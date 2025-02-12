<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alikafka\V20190916\Models\GetQuotaTipResponseBody;

use AlibabaCloud\Dara\Model;

class quotaData extends Model
{
    /**
     * @var int
     */
    public $groupLeft;
    /**
     * @var int
     */
    public $groupUsed;
    /**
     * @var int
     */
    public $isPartitionBuy;
    /**
     * @var int
     */
    public $partitionLeft;
    /**
     * @var int
     */
    public $partitionNumOfBuy;
    /**
     * @var int
     */
    public $partitionQuota;
    /**
     * @var int
     */
    public $partitionUsed;
    /**
     * @var int
     */
    public $topicLeft;
    /**
     * @var int
     */
    public $topicNumOfBuy;
    /**
     * @var int
     */
    public $topicQuota;
    /**
     * @var int
     */
    public $topicUsed;
    protected $_name = [
        'groupLeft'         => 'GroupLeft',
        'groupUsed'         => 'GroupUsed',
        'isPartitionBuy'    => 'IsPartitionBuy',
        'partitionLeft'     => 'PartitionLeft',
        'partitionNumOfBuy' => 'PartitionNumOfBuy',
        'partitionQuota'    => 'PartitionQuota',
        'partitionUsed'     => 'PartitionUsed',
        'topicLeft'         => 'TopicLeft',
        'topicNumOfBuy'     => 'TopicNumOfBuy',
        'topicQuota'        => 'TopicQuota',
        'topicUsed'         => 'TopicUsed',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->groupLeft) {
            $res['GroupLeft'] = $this->groupLeft;
        }

        if (null !== $this->groupUsed) {
            $res['GroupUsed'] = $this->groupUsed;
        }

        if (null !== $this->isPartitionBuy) {
            $res['IsPartitionBuy'] = $this->isPartitionBuy;
        }

        if (null !== $this->partitionLeft) {
            $res['PartitionLeft'] = $this->partitionLeft;
        }

        if (null !== $this->partitionNumOfBuy) {
            $res['PartitionNumOfBuy'] = $this->partitionNumOfBuy;
        }

        if (null !== $this->partitionQuota) {
            $res['PartitionQuota'] = $this->partitionQuota;
        }

        if (null !== $this->partitionUsed) {
            $res['PartitionUsed'] = $this->partitionUsed;
        }

        if (null !== $this->topicLeft) {
            $res['TopicLeft'] = $this->topicLeft;
        }

        if (null !== $this->topicNumOfBuy) {
            $res['TopicNumOfBuy'] = $this->topicNumOfBuy;
        }

        if (null !== $this->topicQuota) {
            $res['TopicQuota'] = $this->topicQuota;
        }

        if (null !== $this->topicUsed) {
            $res['TopicUsed'] = $this->topicUsed;
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
        if (isset($map['GroupLeft'])) {
            $model->groupLeft = $map['GroupLeft'];
        }

        if (isset($map['GroupUsed'])) {
            $model->groupUsed = $map['GroupUsed'];
        }

        if (isset($map['IsPartitionBuy'])) {
            $model->isPartitionBuy = $map['IsPartitionBuy'];
        }

        if (isset($map['PartitionLeft'])) {
            $model->partitionLeft = $map['PartitionLeft'];
        }

        if (isset($map['PartitionNumOfBuy'])) {
            $model->partitionNumOfBuy = $map['PartitionNumOfBuy'];
        }

        if (isset($map['PartitionQuota'])) {
            $model->partitionQuota = $map['PartitionQuota'];
        }

        if (isset($map['PartitionUsed'])) {
            $model->partitionUsed = $map['PartitionUsed'];
        }

        if (isset($map['TopicLeft'])) {
            $model->topicLeft = $map['TopicLeft'];
        }

        if (isset($map['TopicNumOfBuy'])) {
            $model->topicNumOfBuy = $map['TopicNumOfBuy'];
        }

        if (isset($map['TopicQuota'])) {
            $model->topicQuota = $map['TopicQuota'];
        }

        if (isset($map['TopicUsed'])) {
            $model->topicUsed = $map['TopicUsed'];
        }

        return $model;
    }
}
