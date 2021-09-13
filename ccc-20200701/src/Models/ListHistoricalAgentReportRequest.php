<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models;

use AlibabaCloud\Tea\Model;

class ListHistoricalAgentReportRequest extends Model
{
    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $agentIdList;

    /**
     * @var int
     */
    public $startTime;

    /**
     * @var int
     */
    public $stopTime;

    /**
     * @var string
     */
    public $instanceId;
    protected $_name = [
        'pageNumber'  => 'PageNumber',
        'pageSize'    => 'PageSize',
        'agentIdList' => 'AgentIdList',
        'startTime'   => 'StartTime',
        'stopTime'    => 'StopTime',
        'instanceId'  => 'InstanceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->agentIdList) {
            $res['AgentIdList'] = $this->agentIdList;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->stopTime) {
            $res['StopTime'] = $this->stopTime;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListHistoricalAgentReportRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['AgentIdList'])) {
            $model->agentIdList = $map['AgentIdList'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['StopTime'])) {
            $model->stopTime = $map['StopTime'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        return $model;
    }
}
