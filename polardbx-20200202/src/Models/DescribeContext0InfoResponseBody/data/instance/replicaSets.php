<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeContext0InfoResponseBody\data\instance;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeContext0InfoResponseBody\data\instance\replicaSets\connAddrs;

class replicaSets extends Model
{
    /**
     * @var string
     */
    public $classCode;

    /**
     * @var connAddrs[]
     */
    public $connAddrs;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var int
     */
    public $nodeCount;

    /**
     * @var string
     */
    public $nodeType;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $storageType;

    /**
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'classCode' => 'ClassCode',
        'connAddrs' => 'ConnAddrs',
        'createTime' => 'CreateTime',
        'instanceId' => 'InstanceId',
        'nodeCount' => 'NodeCount',
        'nodeType' => 'NodeType',
        'status' => 'Status',
        'storageType' => 'StorageType',
        'zoneId' => 'ZoneId',
    ];

    public function validate()
    {
        if (\is_array($this->connAddrs)) {
            Model::validateArray($this->connAddrs);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->classCode) {
            $res['ClassCode'] = $this->classCode;
        }

        if (null !== $this->connAddrs) {
            if (\is_array($this->connAddrs)) {
                $res['ConnAddrs'] = [];
                $n1 = 0;
                foreach ($this->connAddrs as $item1) {
                    $res['ConnAddrs'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->nodeCount) {
            $res['NodeCount'] = $this->nodeCount;
        }

        if (null !== $this->nodeType) {
            $res['NodeType'] = $this->nodeType;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->storageType) {
            $res['StorageType'] = $this->storageType;
        }

        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClassCode'])) {
            $model->classCode = $map['ClassCode'];
        }

        if (isset($map['ConnAddrs'])) {
            if (!empty($map['ConnAddrs'])) {
                $model->connAddrs = [];
                $n1 = 0;
                foreach ($map['ConnAddrs'] as $item1) {
                    $model->connAddrs[$n1] = connAddrs::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['NodeCount'])) {
            $model->nodeCount = $map['NodeCount'];
        }

        if (isset($map['NodeType'])) {
            $model->nodeType = $map['NodeType'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['StorageType'])) {
            $model->storageType = $map['StorageType'];
        }

        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
