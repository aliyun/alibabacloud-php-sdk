<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20191015\Models;

use AlibabaCloud\Dara\Model;

class QueryTouchListRequest extends Model
{
    /**
     * @var string[]
     */
    public $channelId;

    /**
     * @var int[]
     */
    public $channelType;

    /**
     * @var int
     */
    public $closeTimeEnd;

    /**
     * @var int
     */
    public $closeTimeStart;

    /**
     * @var int
     */
    public $currentPage;

    /**
     * @var int[]
     */
    public $evaluationLevel;

    /**
     * @var int[]
     */
    public $evaluationScore;

    /**
     * @var int[]
     */
    public $evaluationStatus;

    /**
     * @var int
     */
    public $firstTimeEnd;

    /**
     * @var int
     */
    public $firstTimeStart;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var int[]
     */
    public $memberId;

    /**
     * @var string[]
     */
    public $memberName;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var int[]
     */
    public $queueId;

    /**
     * @var int[]
     */
    public $servicerId;

    /**
     * @var string[]
     */
    public $servicerName;

    /**
     * @var int[]
     */
    public $touchId;

    /**
     * @var int[]
     */
    public $touchType;
    protected $_name = [
        'channelId' => 'ChannelId',
        'channelType' => 'ChannelType',
        'closeTimeEnd' => 'CloseTimeEnd',
        'closeTimeStart' => 'CloseTimeStart',
        'currentPage' => 'CurrentPage',
        'evaluationLevel' => 'EvaluationLevel',
        'evaluationScore' => 'EvaluationScore',
        'evaluationStatus' => 'EvaluationStatus',
        'firstTimeEnd' => 'FirstTimeEnd',
        'firstTimeStart' => 'FirstTimeStart',
        'instanceId' => 'InstanceId',
        'memberId' => 'MemberId',
        'memberName' => 'MemberName',
        'pageSize' => 'PageSize',
        'queueId' => 'QueueId',
        'servicerId' => 'ServicerId',
        'servicerName' => 'ServicerName',
        'touchId' => 'TouchId',
        'touchType' => 'TouchType',
    ];

    public function validate()
    {
        if (\is_array($this->channelId)) {
            Model::validateArray($this->channelId);
        }
        if (\is_array($this->channelType)) {
            Model::validateArray($this->channelType);
        }
        if (\is_array($this->evaluationLevel)) {
            Model::validateArray($this->evaluationLevel);
        }
        if (\is_array($this->evaluationScore)) {
            Model::validateArray($this->evaluationScore);
        }
        if (\is_array($this->evaluationStatus)) {
            Model::validateArray($this->evaluationStatus);
        }
        if (\is_array($this->memberId)) {
            Model::validateArray($this->memberId);
        }
        if (\is_array($this->memberName)) {
            Model::validateArray($this->memberName);
        }
        if (\is_array($this->queueId)) {
            Model::validateArray($this->queueId);
        }
        if (\is_array($this->servicerId)) {
            Model::validateArray($this->servicerId);
        }
        if (\is_array($this->servicerName)) {
            Model::validateArray($this->servicerName);
        }
        if (\is_array($this->touchId)) {
            Model::validateArray($this->touchId);
        }
        if (\is_array($this->touchType)) {
            Model::validateArray($this->touchType);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->channelId) {
            if (\is_array($this->channelId)) {
                $res['ChannelId'] = [];
                $n1 = 0;
                foreach ($this->channelId as $item1) {
                    $res['ChannelId'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->channelType) {
            if (\is_array($this->channelType)) {
                $res['ChannelType'] = [];
                $n1 = 0;
                foreach ($this->channelType as $item1) {
                    $res['ChannelType'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->closeTimeEnd) {
            $res['CloseTimeEnd'] = $this->closeTimeEnd;
        }

        if (null !== $this->closeTimeStart) {
            $res['CloseTimeStart'] = $this->closeTimeStart;
        }

        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }

        if (null !== $this->evaluationLevel) {
            if (\is_array($this->evaluationLevel)) {
                $res['EvaluationLevel'] = [];
                $n1 = 0;
                foreach ($this->evaluationLevel as $item1) {
                    $res['EvaluationLevel'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->evaluationScore) {
            if (\is_array($this->evaluationScore)) {
                $res['EvaluationScore'] = [];
                $n1 = 0;
                foreach ($this->evaluationScore as $item1) {
                    $res['EvaluationScore'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->evaluationStatus) {
            if (\is_array($this->evaluationStatus)) {
                $res['EvaluationStatus'] = [];
                $n1 = 0;
                foreach ($this->evaluationStatus as $item1) {
                    $res['EvaluationStatus'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->firstTimeEnd) {
            $res['FirstTimeEnd'] = $this->firstTimeEnd;
        }

        if (null !== $this->firstTimeStart) {
            $res['FirstTimeStart'] = $this->firstTimeStart;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->memberId) {
            if (\is_array($this->memberId)) {
                $res['MemberId'] = [];
                $n1 = 0;
                foreach ($this->memberId as $item1) {
                    $res['MemberId'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->memberName) {
            if (\is_array($this->memberName)) {
                $res['MemberName'] = [];
                $n1 = 0;
                foreach ($this->memberName as $item1) {
                    $res['MemberName'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->queueId) {
            if (\is_array($this->queueId)) {
                $res['QueueId'] = [];
                $n1 = 0;
                foreach ($this->queueId as $item1) {
                    $res['QueueId'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->servicerId) {
            if (\is_array($this->servicerId)) {
                $res['ServicerId'] = [];
                $n1 = 0;
                foreach ($this->servicerId as $item1) {
                    $res['ServicerId'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->servicerName) {
            if (\is_array($this->servicerName)) {
                $res['ServicerName'] = [];
                $n1 = 0;
                foreach ($this->servicerName as $item1) {
                    $res['ServicerName'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->touchId) {
            if (\is_array($this->touchId)) {
                $res['TouchId'] = [];
                $n1 = 0;
                foreach ($this->touchId as $item1) {
                    $res['TouchId'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->touchType) {
            if (\is_array($this->touchType)) {
                $res['TouchType'] = [];
                $n1 = 0;
                foreach ($this->touchType as $item1) {
                    $res['TouchType'][$n1++] = $item1;
                }
            }
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
        if (isset($map['ChannelId'])) {
            if (!empty($map['ChannelId'])) {
                $model->channelId = [];
                $n1 = 0;
                foreach ($map['ChannelId'] as $item1) {
                    $model->channelId[$n1++] = $item1;
                }
            }
        }

        if (isset($map['ChannelType'])) {
            if (!empty($map['ChannelType'])) {
                $model->channelType = [];
                $n1 = 0;
                foreach ($map['ChannelType'] as $item1) {
                    $model->channelType[$n1++] = $item1;
                }
            }
        }

        if (isset($map['CloseTimeEnd'])) {
            $model->closeTimeEnd = $map['CloseTimeEnd'];
        }

        if (isset($map['CloseTimeStart'])) {
            $model->closeTimeStart = $map['CloseTimeStart'];
        }

        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }

        if (isset($map['EvaluationLevel'])) {
            if (!empty($map['EvaluationLevel'])) {
                $model->evaluationLevel = [];
                $n1 = 0;
                foreach ($map['EvaluationLevel'] as $item1) {
                    $model->evaluationLevel[$n1++] = $item1;
                }
            }
        }

        if (isset($map['EvaluationScore'])) {
            if (!empty($map['EvaluationScore'])) {
                $model->evaluationScore = [];
                $n1 = 0;
                foreach ($map['EvaluationScore'] as $item1) {
                    $model->evaluationScore[$n1++] = $item1;
                }
            }
        }

        if (isset($map['EvaluationStatus'])) {
            if (!empty($map['EvaluationStatus'])) {
                $model->evaluationStatus = [];
                $n1 = 0;
                foreach ($map['EvaluationStatus'] as $item1) {
                    $model->evaluationStatus[$n1++] = $item1;
                }
            }
        }

        if (isset($map['FirstTimeEnd'])) {
            $model->firstTimeEnd = $map['FirstTimeEnd'];
        }

        if (isset($map['FirstTimeStart'])) {
            $model->firstTimeStart = $map['FirstTimeStart'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['MemberId'])) {
            if (!empty($map['MemberId'])) {
                $model->memberId = [];
                $n1 = 0;
                foreach ($map['MemberId'] as $item1) {
                    $model->memberId[$n1++] = $item1;
                }
            }
        }

        if (isset($map['MemberName'])) {
            if (!empty($map['MemberName'])) {
                $model->memberName = [];
                $n1 = 0;
                foreach ($map['MemberName'] as $item1) {
                    $model->memberName[$n1++] = $item1;
                }
            }
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['QueueId'])) {
            if (!empty($map['QueueId'])) {
                $model->queueId = [];
                $n1 = 0;
                foreach ($map['QueueId'] as $item1) {
                    $model->queueId[$n1++] = $item1;
                }
            }
        }

        if (isset($map['ServicerId'])) {
            if (!empty($map['ServicerId'])) {
                $model->servicerId = [];
                $n1 = 0;
                foreach ($map['ServicerId'] as $item1) {
                    $model->servicerId[$n1++] = $item1;
                }
            }
        }

        if (isset($map['ServicerName'])) {
            if (!empty($map['ServicerName'])) {
                $model->servicerName = [];
                $n1 = 0;
                foreach ($map['ServicerName'] as $item1) {
                    $model->servicerName[$n1++] = $item1;
                }
            }
        }

        if (isset($map['TouchId'])) {
            if (!empty($map['TouchId'])) {
                $model->touchId = [];
                $n1 = 0;
                foreach ($map['TouchId'] as $item1) {
                    $model->touchId[$n1++] = $item1;
                }
            }
        }

        if (isset($map['TouchType'])) {
            if (!empty($map['TouchType'])) {
                $model->touchType = [];
                $n1 = 0;
                foreach ($map['TouchType'] as $item1) {
                    $model->touchType[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
