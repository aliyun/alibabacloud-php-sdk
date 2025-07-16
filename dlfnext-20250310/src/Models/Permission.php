<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DlfNext\V20250310\Models;

use AlibabaCloud\SDK\DlfNext\V20250310\Models\Permission\columns;
use AlibabaCloud\Tea\Model;

class Permission extends Model
{
    /**
     * @var string
     */
    public $access;

    /**
     * @var columns
     */
    public $columns;

    /**
     * @var string
     */
    public $database;

    /**
     * @var string
     */
    public $function;

    /**
     * @var string
     */
    public $principal;

    /**
     * @var string
     */
    public $resourceType;

    /**
     * @var string
     */
    public $table;

    /**
     * @var string
     */
    public $view;
    protected $_name = [
        'access' => 'access',
        'columns' => 'columns',
        'database' => 'database',
        'function' => 'function',
        'principal' => 'principal',
        'resourceType' => 'resourceType',
        'table' => 'table',
        'view' => 'view',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->access) {
            $res['access'] = $this->access;
        }
        if (null !== $this->columns) {
            $res['columns'] = null !== $this->columns ? $this->columns->toMap() : null;
        }
        if (null !== $this->database) {
            $res['database'] = $this->database;
        }
        if (null !== $this->function) {
            $res['function'] = $this->function;
        }
        if (null !== $this->principal) {
            $res['principal'] = $this->principal;
        }
        if (null !== $this->resourceType) {
            $res['resourceType'] = $this->resourceType;
        }
        if (null !== $this->table) {
            $res['table'] = $this->table;
        }
        if (null !== $this->view) {
            $res['view'] = $this->view;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return Permission
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['access'])) {
            $model->access = $map['access'];
        }
        if (isset($map['columns'])) {
            $model->columns = columns::fromMap($map['columns']);
        }
        if (isset($map['database'])) {
            $model->database = $map['database'];
        }
        if (isset($map['function'])) {
            $model->function = $map['function'];
        }
        if (isset($map['principal'])) {
            $model->principal = $map['principal'];
        }
        if (isset($map['resourceType'])) {
            $model->resourceType = $map['resourceType'];
        }
        if (isset($map['table'])) {
            $model->table = $map['table'];
        }
        if (isset($map['view'])) {
            $model->view = $map['view'];
        }

        return $model;
    }
}
