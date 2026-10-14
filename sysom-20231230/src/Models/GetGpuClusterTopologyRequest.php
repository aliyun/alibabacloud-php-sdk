<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SysOM\V20231230\Models;

use AlibabaCloud\Dara\Model;

class GetGpuClusterTopologyRequest extends Model
{
    /**
     * @var string
     */
    public $channelId;

    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var string
     */
    public $communicationId;

    /**
     * @var mixed
     */
    public $instanceIdList;

    /**
     * @var mixed
     */
    public $podList;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var mixed
     */
    public $taskIdList;

    /**
     * @var string
     */
    public $topoType;
    protected $_name = [
        'channelId' => 'channelId',
        'clusterId' => 'clusterId',
        'communicationId' => 'communicationId',
        'instanceIdList' => 'instanceIdList',
        'podList' => 'podList',
        'startTime' => 'startTime',
        'taskIdList' => 'taskIdList',
        'topoType' => 'topoType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->channelId) {
            $res['channelId'] = $this->channelId;
        }

        if (null !== $this->clusterId) {
            $res['clusterId'] = $this->clusterId;
        }

        if (null !== $this->communicationId) {
            $res['communicationId'] = $this->communicationId;
        }

        if (null !== $this->instanceIdList) {
            $res['instanceIdList'] = $this->instanceIdList;
        }

        if (null !== $this->podList) {
            $res['podList'] = $this->podList;
        }

        if (null !== $this->startTime) {
            $res['startTime'] = $this->startTime;
        }

        if (null !== $this->taskIdList) {
            $res['taskIdList'] = $this->taskIdList;
        }

        if (null !== $this->topoType) {
            $res['topoType'] = $this->topoType;
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
        if (isset($map['channelId'])) {
            $model->channelId = $map['channelId'];
        }

        if (isset($map['clusterId'])) {
            $model->clusterId = $map['clusterId'];
        }

        if (isset($map['communicationId'])) {
            $model->communicationId = $map['communicationId'];
        }

        if (isset($map['instanceIdList'])) {
            $model->instanceIdList = $map['instanceIdList'];
        }

        if (isset($map['podList'])) {
            $model->podList = $map['podList'];
        }

        if (isset($map['startTime'])) {
            $model->startTime = $map['startTime'];
        }

        if (isset($map['taskIdList'])) {
            $model->taskIdList = $map['taskIdList'];
        }

        if (isset($map['topoType'])) {
            $model->topoType = $map['topoType'];
        }

        return $model;
    }
}
