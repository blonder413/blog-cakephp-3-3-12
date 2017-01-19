<?php
use Migrations\AbstractMigration;

class CreateArticles extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-change-method
     * @return void
     */
    public function change()
    {
        $this->table('articles')
            ->addColumn('number', 'integer', [
                'default' => null,
                'limit' => 4,
                'null' => true,
            ])
            ->addColumn('title', 'string', [
                'default' => null,
                'limit' => 150,
                'null' => false,
            ])
            ->addColumn('slug', 'string', [
                'default' => null,
                'limit' => 150,
                'null' => false,
            ])
            ->addColumn('topic', 'string', [
                'default' => null,
                'limit' => 100,
                'null' => false,
            ])
            ->addColumn('detail', 'text', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('abstract', 'string', [
                'comment' => 'short description without HTML',
                'default' => null,
                'limit' => 300,
                'null' => false,
            ])
            ->addColumn('video', 'text', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('type_id', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => false,
                //'signed' => false,
            ])
            ->addColumn('download', 'string', [
                'default' => null,
                'limit' => 100,
                'null' => true,
            ])
            ->addColumn('category_id', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => false,
                //'signed' => false,
            ])
            ->addColumn('tags', 'string', [
                'default' => null,
                'limit' => 255,
                'null' => false,
            ])
            ->addColumn('status', 'boolean', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('visit_counter', 'integer', [
                'default' => '0',
                'limit' => 10,
                'null' => false,
                //'signed' => false,
            ])
            ->addColumn('download_counter', 'integer', [
                'default' => '0',
                'limit' => 10,
                'null' => false,
                //'signed' => false,
            ])
            ->addColumn('course_id', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => true,
                //'signed' => false,
            ])
            ->addColumn('created_by', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => true,
                //'signed' => false,
            ])
            ->addColumn('created_at', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('updated_by', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => true,
                //'signed' => false,
            ])
            ->addColumn('updated_at', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addIndex(
                [
                    'category_id',
                ]
            )
            ->addIndex(
                [
                    'created_by',
                ]
            )
            ->addIndex(
                [
                    'type_id',
                ]
            )
            ->addIndex(
                [
                    'updated_by',
                ]
            )
            ->create();
            
        $this->table('articles')
            ->addForeignKey(
                'category_id',
                'categories',
                'id',
                [
                    'update' => 'NO_ACTION',
                    'delete' => 'NO_ACTION'
                ]
            )
            ->addForeignKey(
                'created_by',
                'users',
                'id',
                [
                    'update' => 'NO_ACTION',
                    'delete' => 'NO_ACTION'
                ]
            )
            ->addForeignKey(
                'type_id',
                'types',
                'id',
                [
                    'update' => 'NO_ACTION',
                    'delete' => 'NO_ACTION'
                ]
            )
            ->addForeignKey(
                'updated_by',
                'users',
                'id',
                [
                    'update' => 'NO_ACTION',
                    'delete' => 'NO_ACTION'
                ]
            )
            ->update();
    }
}
