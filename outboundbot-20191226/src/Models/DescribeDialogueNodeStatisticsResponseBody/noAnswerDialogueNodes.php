<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226\Models\DescribeDialogueNodeStatisticsResponseBody;

use AlibabaCloud\Dara\Model;

class noAnswerDialogueNodes extends Model
{
    /**
     * @var string
     */
    public $groupId;

    /**
     * @var int
     */
    public $hangUpNum;

    /**
     * @var int
     */
    public $hitNum;

    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var int
     */
    public $noAnswerNum;

    /**
     * @var string
     */
    public $nodeId;

    /**
     * @var string
     */
    public $nodeName;
    protected $_name = [
        'groupId' => 'GroupId',
        'hangUpNum' => 'HangUpNum',
        'hitNum' => 'HitNum',
        'id' => 'Id',
        'instanceId' => 'InstanceId',
        'noAnswerNum' => 'NoAnswerNum',
        'nodeId' => 'NodeId',
        'nodeName' => 'NodeName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
