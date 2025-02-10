<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeExpressConnectTrafficQosQueueResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeExpressConnectTrafficQosQueueResponseBody\queueList\ruleList;

class queueList extends Model
{
    /**
     * @var string
     */
    public $bandwidthPercent;
    /**
     * @var string
     */
    public $qosId;
    /**
     * @var string
     */
    public $queueDescription;
    /**
     * @var string
     */
    public $queueId;
    /**
     * @var string
     */
    public $queueName;
    /**
     * @var string
     */
    public $queueType;
    /**
     * @var ruleList[]
     */
    public $ruleList;
    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'bandwidthPercent' => 'BandwidthPercent',
        'qosId'            => 'QosId',
        'queueDescription' => 'QueueDescription',
        'queueId'          => 'QueueId',
        'queueName'        => 'QueueName',
        'queueType'        => 'QueueType',
        'ruleList'         => 'RuleList',
        'status'           => 'Status',
    ];

    public function validate()
    {
        if (\is_array($this->ruleList)) {
            Model::validateArray($this->ruleList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bandwidthPercent) {
            $res['BandwidthPercent'] = $this->bandwidthPercent;
        }

        if (null !== $this->qosId) {
            $res['QosId'] = $this->qosId;
        }

        if (null !== $this->queueDescription) {
            $res['QueueDescription'] = $this->queueDescription;
        }

        if (null !== $this->queueId) {
            $res['QueueId'] = $this->queueId;
        }

        if (null !== $this->queueName) {
            $res['QueueName'] = $this->queueName;
        }

        if (null !== $this->queueType) {
            $res['QueueType'] = $this->queueType;
        }

        if (null !== $this->ruleList) {
            if (\is_array($this->ruleList)) {
                $res['RuleList'] = [];
                $n1              = 0;
                foreach ($this->ruleList as $item1) {
                    $res['RuleList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['BandwidthPercent'])) {
            $model->bandwidthPercent = $map['BandwidthPercent'];
        }

        if (isset($map['QosId'])) {
            $model->qosId = $map['QosId'];
        }

        if (isset($map['QueueDescription'])) {
            $model->queueDescription = $map['QueueDescription'];
        }

        if (isset($map['QueueId'])) {
            $model->queueId = $map['QueueId'];
        }

        if (isset($map['QueueName'])) {
            $model->queueName = $map['QueueName'];
        }

        if (isset($map['QueueType'])) {
            $model->queueType = $map['QueueType'];
        }

        if (isset($map['RuleList'])) {
            if (!empty($map['RuleList'])) {
                $model->ruleList = [];
                $n1              = 0;
                foreach ($map['RuleList'] as $item1) {
                    $model->ruleList[$n1++] = ruleList::fromMap($item1);
                }
            }
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
