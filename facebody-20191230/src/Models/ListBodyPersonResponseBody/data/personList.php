<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Facebody\V20191230\Models\ListBodyPersonResponseBody\data;

use AlibabaCloud\Tea\Model;

class personList extends Model
{
    /**
     * @description 搜索引擎实例Id
     *
     * @var int
     */
    public $instanceId;

    /**
     * @description 数据库ID
     *
     * @var int
     */
    public $dbId;

    /**
     * @description 人员名称
     *
     * @var string
     */
    public $name;

    /**
     * @description Trace数量
     *
     * @var int
     */
    public $traceCount;

    /**
     * @description 人员ID
     *
     * @var int
     */
    public $id;
    protected $_name = [
        'instanceId' => 'InstanceId',
        'dbId'       => 'DbId',
        'name'       => 'Name',
        'traceCount' => 'TraceCount',
        'id'         => 'Id',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->dbId) {
            $res['DbId'] = $this->dbId;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->traceCount) {
            $res['TraceCount'] = $this->traceCount;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return personList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['DbId'])) {
            $model->dbId = $map['DbId'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['TraceCount'])) {
            $model->traceCount = $map['TraceCount'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        return $model;
    }
}
