<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Facebody\V20191230\Models\GetBodyPersonResponseBody;

use AlibabaCloud\SDK\Facebody\V20191230\Models\GetBodyPersonResponseBody\data\traceList;
use AlibabaCloud\Tea\Model;

class data extends Model
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
     * @description 人员ID
     *
     * @var int
     */
    public $id;

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
     * @description Trace列表
     *
     * @var traceList[]
     */
    public $traceList;
    protected $_name = [
        'instanceId' => 'InstanceId',
        'dbId'       => 'DbId',
        'id'         => 'Id',
        'name'       => 'Name',
        'traceCount' => 'TraceCount',
        'traceList'  => 'TraceList',
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
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->traceCount) {
            $res['TraceCount'] = $this->traceCount;
        }
        if (null !== $this->traceList) {
            $res['TraceList'] = [];
            if (null !== $this->traceList && \is_array($this->traceList)) {
                $n = 0;
                foreach ($this->traceList as $item) {
                    $res['TraceList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
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
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['TraceCount'])) {
            $model->traceCount = $map['TraceCount'];
        }
        if (isset($map['TraceList'])) {
            if (!empty($map['TraceList'])) {
                $model->traceList = [];
                $n                = 0;
                foreach ($map['TraceList'] as $item) {
                    $model->traceList[$n++] = null !== $item ? traceList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
