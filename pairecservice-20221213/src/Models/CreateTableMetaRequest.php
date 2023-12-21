<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiRecService\V20221213\Models;

use AlibabaCloud\SDK\PaiRecService\V20221213\Models\CreateTableMetaRequest\fields;
use AlibabaCloud\Tea\Model;

class CreateTableMetaRequest extends Model
{
    /**
     * @example this is a test table
     *
     * @var string
     */
    public $description;

    /**
     * @var fields[]
     */
    public $fields;

    /**
     * @example pairec-cn-test123
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example ABTest
     *
     * @var string
     */
    public $module;

    /**
     * @example table_test
     *
     * @var string
     */
    public $name;

    /**
     * @example reso-2s416t146ffjc3yefx
     *
     * @var string
     */
    public $resourceId;

    /**
     * @example table_mysql
     *
     * @var string
     */
    public $tableName;
    protected $_name = [
        'description' => 'Description',
        'fields'      => 'Fields',
        'instanceId'  => 'InstanceId',
        'module'      => 'Module',
        'name'        => 'Name',
        'resourceId'  => 'ResourceId',
        'tableName'   => 'TableName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->fields) {
            $res['Fields'] = [];
            if (null !== $this->fields && \is_array($this->fields)) {
                $n = 0;
                foreach ($this->fields as $item) {
                    $res['Fields'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->module) {
            $res['Module'] = $this->module;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->resourceId) {
            $res['ResourceId'] = $this->resourceId;
        }
        if (null !== $this->tableName) {
            $res['TableName'] = $this->tableName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateTableMetaRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Fields'])) {
            if (!empty($map['Fields'])) {
                $model->fields = [];
                $n             = 0;
                foreach ($map['Fields'] as $item) {
                    $model->fields[$n++] = null !== $item ? fields::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Module'])) {
            $model->module = $map['Module'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['ResourceId'])) {
            $model->resourceId = $map['ResourceId'];
        }
        if (isset($map['TableName'])) {
            $model->tableName = $map['TableName'];
        }

        return $model;
    }
}
