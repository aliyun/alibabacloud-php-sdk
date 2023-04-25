<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alikafka\V20190916\Models\GetQuotaTipResponseBody;

use AlibabaCloud\Tea\Model;

class quotaData extends Model
{
    /**
     * @description The number of available groups.
     *
     * @example 50
     *
     * @var int
     */
    public $groupLeft;

    /**
     * @description The number of used groups.
     *
     * @example 50
     *
     * @var int
     */
    public $groupUsed;

    /**
     * @description The method that you use to purchase partitions. Valid values:
     *
     *   0: indicates that the instance is purchased based on topics.
     *   1: indicates that the instance is purchased based on partitions.
     *
     * @example 1
     *
     * @var int
     */
    public $isPartitionBuy;

    /**
     * @description The number of available partitions.
     *
     * @example 1050
     *
     * @var int
     */
    public $partitionLeft;

    /**
     * @description The number of purchased partitions.
     *
     * @example 100
     *
     * @var int
     */
    public $partitionNumOfBuy;

    /**
     * @description The quota of partitions.
     *
     * @example 1100
     *
     * @var int
     */
    public $partitionQuota;

    /**
     * @description The number of used partitions.
     *
     * @example 50
     *
     * @var int
     */
    public $partitionUsed;

    /**
     * @description The number of available topics.
     *
     * @example 20
     *
     * @var int
     */
    public $topicLeft;

    /**
     * @description The number of purchased topics.
     *
     * @example 50
     *
     * @var int
     */
    public $topicNumOfBuy;

    /**
     * @description The quota of topics.
     *
     * @example 50
     *
     * @var int
     */
    public $topicQuota;

    /**
     * @description The number of used topics.
     *
     * @example 30
     *
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
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return quotaData
     */
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
