<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models;

use AlibabaCloud\Tea\Model;

class ListScaleOutEcuRequest extends Model
{
    /**
     * @var string
     */
    public $logicalRegionId;

    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var string
     */
    public $appId;

    /**
     * @var string
     */
    public $groupId;

    /**
     * @var int
     */
    public $cpu;

    /**
     * @var int
     */
    public $mem;

    /**
     * @var int
     */
    public $instanceNum;
    protected $_name = [
        'logicalRegionId' => 'LogicalRegionId',
        'clusterId'       => 'ClusterId',
        'appId'           => 'AppId',
        'groupId'         => 'GroupId',
        'cpu'             => 'Cpu',
        'mem'             => 'Mem',
        'instanceNum'     => 'InstanceNum',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->logicalRegionId) {
            $res['LogicalRegionId'] = $this->logicalRegionId;
        }
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->cpu) {
            $res['Cpu'] = $this->cpu;
        }
        if (null !== $this->mem) {
            $res['Mem'] = $this->mem;
        }
        if (null !== $this->instanceNum) {
            $res['InstanceNum'] = $this->instanceNum;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListScaleOutEcuRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LogicalRegionId'])) {
            $model->logicalRegionId = $map['LogicalRegionId'];
        }
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['Cpu'])) {
            $model->cpu = $map['Cpu'];
        }
        if (isset($map['Mem'])) {
            $model->mem = $map['Mem'];
        }
        if (isset($map['InstanceNum'])) {
            $model->instanceNum = $map['InstanceNum'];
        }

        return $model;
    }
}
