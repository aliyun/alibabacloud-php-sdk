<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226\Models\DescribeDialogueNodeStatisticsResponseBody;

use AlibabaCloud\Tea\Model;

class noAnswerDialogueNodes extends Model
{
    /**
     * @example f06f7c9f-2895-4b30-a8c2-6ecccb9c9f89
     *
     * @var string
     */
    public $groupId;

    /**
     * @example 2
     *
     * @var int
     */
    public $hangUpNum;

    /**
     * @example 12
     *
     * @var int
     */
    public $hitNum;

    /**
     * @description id
     *
     * @example 123
     *
     * @var string
     */
    public $id;

    /**
     * @example e5035654-1745-484a-8c5b-165f7c7bcd79
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example 2
     *
     * @var int
     */
    public $noAnswerNum;

    /**
     * @example e5035654-1745-484a-8c5b-165f7c7bcd79
     *
     * @var string
     */
    public $nodeId;

    /**
     * @example xxx
     *
     * @var string
     */
    public $nodeName;
    protected $_name = [
        'groupId'     => 'GroupId',
        'hangUpNum'   => 'HangUpNum',
        'hitNum'      => 'HitNum',
        'id'          => 'Id',
        'instanceId'  => 'InstanceId',
        'noAnswerNum' => 'NoAnswerNum',
        'nodeId'      => 'NodeId',
        'nodeName'    => 'NodeName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->hangUpNum) {
            $res['HangUpNum'] = $this->hangUpNum;
        }
        if (null !== $this->hitNum) {
            $res['HitNum'] = $this->hitNum;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->noAnswerNum) {
            $res['NoAnswerNum'] = $this->noAnswerNum;
        }
        if (null !== $this->nodeId) {
            $res['NodeId'] = $this->nodeId;
        }
        if (null !== $this->nodeName) {
            $res['NodeName'] = $this->nodeName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return noAnswerDialogueNodes
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['HangUpNum'])) {
            $model->hangUpNum = $map['HangUpNum'];
        }
        if (isset($map['HitNum'])) {
            $model->hitNum = $map['HitNum'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['NoAnswerNum'])) {
            $model->noAnswerNum = $map['NoAnswerNum'];
        }
        if (isset($map['NodeId'])) {
            $model->nodeId = $map['NodeId'];
        }
        if (isset($map['NodeName'])) {
            $model->nodeName = $map['NodeName'];
        }

        return $model;
    }
}
