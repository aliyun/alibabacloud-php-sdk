<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeConsumersResponseBody;

use AlibabaCloud\Dara\Model;

class items extends Model
{
    /**
     * @var string
     */
    public $allowedModels;

    /**
     * @var string
     */
    public $apiKey;

    /**
     * @var string
     */
    public $consumerGroupId;

    /**
     * @var string
     */
    public $consumerGroupName;

    /**
     * @var string
     */
    public $consumerId;

    /**
     * @var string
     */
    public $gmtCreated;

    /**
     * @var string
     */
    public $gmtModified;

    /**
     * @var int
     */
    public $lifetimeCostCount;

    /**
     * @var int
     */
    public $lifetimeTokenCount;

    /**
     * @var int
     */
    public $mtdCostCount;

    /**
     * @var int
     */
    public $mtdTokenCount;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $nickName;
    protected $_name = [
        'allowedModels' => 'AllowedModels',
        'apiKey' => 'ApiKey',
        'consumerGroupId' => 'ConsumerGroupId',
        'consumerGroupName' => 'ConsumerGroupName',
        'consumerId' => 'ConsumerId',
        'gmtCreated' => 'GmtCreated',
        'gmtModified' => 'GmtModified',
        'lifetimeCostCount' => 'LifetimeCostCount',
        'lifetimeTokenCount' => 'LifetimeTokenCount',
        'mtdCostCount' => 'MtdCostCount',
        'mtdTokenCount' => 'MtdTokenCount',
        'name' => 'Name',
        'nickName' => 'NickName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->allowedModels) {
            $res['AllowedModels'] = $this->allowedModels;
        }

        if (null !== $this->apiKey) {
            $res['ApiKey'] = $this->apiKey;
        }

        if (null !== $this->consumerGroupId) {
            $res['ConsumerGroupId'] = $this->consumerGroupId;
        }

        if (null !== $this->consumerGroupName) {
            $res['ConsumerGroupName'] = $this->consumerGroupName;
        }

        if (null !== $this->consumerId) {
            $res['ConsumerId'] = $this->consumerId;
        }

        if (null !== $this->gmtCreated) {
            $res['GmtCreated'] = $this->gmtCreated;
        }

        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }

        if (null !== $this->lifetimeCostCount) {
            $res['LifetimeCostCount'] = $this->lifetimeCostCount;
        }

        if (null !== $this->lifetimeTokenCount) {
            $res['LifetimeTokenCount'] = $this->lifetimeTokenCount;
        }

        if (null !== $this->mtdCostCount) {
            $res['MtdCostCount'] = $this->mtdCostCount;
        }

        if (null !== $this->mtdTokenCount) {
            $res['MtdTokenCount'] = $this->mtdTokenCount;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->nickName) {
            $res['NickName'] = $this->nickName;
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
        if (isset($map['AllowedModels'])) {
            $model->allowedModels = $map['AllowedModels'];
        }

        if (isset($map['ApiKey'])) {
            $model->apiKey = $map['ApiKey'];
        }

        if (isset($map['ConsumerGroupId'])) {
            $model->consumerGroupId = $map['ConsumerGroupId'];
        }

        if (isset($map['ConsumerGroupName'])) {
            $model->consumerGroupName = $map['ConsumerGroupName'];
        }

        if (isset($map['ConsumerId'])) {
            $model->consumerId = $map['ConsumerId'];
        }

        if (isset($map['GmtCreated'])) {
            $model->gmtCreated = $map['GmtCreated'];
        }

        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }

        if (isset($map['LifetimeCostCount'])) {
            $model->lifetimeCostCount = $map['LifetimeCostCount'];
        }

        if (isset($map['LifetimeTokenCount'])) {
            $model->lifetimeTokenCount = $map['LifetimeTokenCount'];
        }

        if (isset($map['MtdCostCount'])) {
            $model->mtdCostCount = $map['MtdCostCount'];
        }

        if (isset($map['MtdTokenCount'])) {
            $model->mtdTokenCount = $map['MtdTokenCount'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['NickName'])) {
            $model->nickName = $map['NickName'];
        }

        return $model;
    }
}
