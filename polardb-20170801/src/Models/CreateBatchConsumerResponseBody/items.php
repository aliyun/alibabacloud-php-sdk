<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models\CreateBatchConsumerResponseBody;

use AlibabaCloud\Dara\Model;

class items extends Model
{
    /**
     * @var bool
     */
    public $active;

    /**
     * @var string
     */
    public $apiKey;

    /**
     * @var string
     */
    public $apiKeyMd5;

    /**
     * @var string
     */
    public $apiKeyStatus;

    /**
     * @var string
     */
    public $apiStatus;

    /**
     * @var int
     */
    public $budgetLimit;

    /**
     * @var string
     */
    public $budgetPolicyId;

    /**
     * @var int
     */
    public $budgetUsed;

    /**
     * @var string
     */
    public $consumerGroupId;

    /**
     * @var string
     */
    public $consumerId;

    /**
     * @var string
     */
    public $consumerTag;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $expireTime;

    /**
     * @var bool
     */
    public $expired;

    /**
     * @var string
     */
    public $gmtCreated;

    /**
     * @var string
     */
    public $gmtModified;

    /**
     * @var string
     */
    public $gwClusterId;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'active' => 'Active',
        'apiKey' => 'ApiKey',
        'apiKeyMd5' => 'ApiKeyMd5',
        'apiKeyStatus' => 'ApiKeyStatus',
        'apiStatus' => 'ApiStatus',
        'budgetLimit' => 'BudgetLimit',
        'budgetPolicyId' => 'BudgetPolicyId',
        'budgetUsed' => 'BudgetUsed',
        'consumerGroupId' => 'ConsumerGroupId',
        'consumerId' => 'ConsumerId',
        'consumerTag' => 'ConsumerTag',
        'description' => 'Description',
        'expireTime' => 'ExpireTime',
        'expired' => 'Expired',
        'gmtCreated' => 'GmtCreated',
        'gmtModified' => 'GmtModified',
        'gwClusterId' => 'GwClusterId',
        'name' => 'Name',
        'status' => 'Status',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->active) {
            $res['Active'] = $this->active;
        }

        if (null !== $this->apiKey) {
            $res['ApiKey'] = $this->apiKey;
        }

        if (null !== $this->apiKeyMd5) {
            $res['ApiKeyMd5'] = $this->apiKeyMd5;
        }

        if (null !== $this->apiKeyStatus) {
            $res['ApiKeyStatus'] = $this->apiKeyStatus;
        }

        if (null !== $this->apiStatus) {
            $res['ApiStatus'] = $this->apiStatus;
        }

        if (null !== $this->budgetLimit) {
            $res['BudgetLimit'] = $this->budgetLimit;
        }

        if (null !== $this->budgetPolicyId) {
            $res['BudgetPolicyId'] = $this->budgetPolicyId;
        }

        if (null !== $this->budgetUsed) {
            $res['BudgetUsed'] = $this->budgetUsed;
        }

        if (null !== $this->consumerGroupId) {
            $res['ConsumerGroupId'] = $this->consumerGroupId;
        }

        if (null !== $this->consumerId) {
            $res['ConsumerId'] = $this->consumerId;
        }

        if (null !== $this->consumerTag) {
            $res['ConsumerTag'] = $this->consumerTag;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->expireTime) {
            $res['ExpireTime'] = $this->expireTime;
        }

        if (null !== $this->expired) {
            $res['Expired'] = $this->expired;
        }

        if (null !== $this->gmtCreated) {
            $res['GmtCreated'] = $this->gmtCreated;
        }

        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }

        if (null !== $this->gwClusterId) {
            $res['GwClusterId'] = $this->gwClusterId;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
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
        if (isset($map['Active'])) {
            $model->active = $map['Active'];
        }

        if (isset($map['ApiKey'])) {
            $model->apiKey = $map['ApiKey'];
        }

        if (isset($map['ApiKeyMd5'])) {
            $model->apiKeyMd5 = $map['ApiKeyMd5'];
        }

        if (isset($map['ApiKeyStatus'])) {
            $model->apiKeyStatus = $map['ApiKeyStatus'];
        }

        if (isset($map['ApiStatus'])) {
            $model->apiStatus = $map['ApiStatus'];
        }

        if (isset($map['BudgetLimit'])) {
            $model->budgetLimit = $map['BudgetLimit'];
        }

        if (isset($map['BudgetPolicyId'])) {
            $model->budgetPolicyId = $map['BudgetPolicyId'];
        }

        if (isset($map['BudgetUsed'])) {
            $model->budgetUsed = $map['BudgetUsed'];
        }

        if (isset($map['ConsumerGroupId'])) {
            $model->consumerGroupId = $map['ConsumerGroupId'];
        }

        if (isset($map['ConsumerId'])) {
            $model->consumerId = $map['ConsumerId'];
        }

        if (isset($map['ConsumerTag'])) {
            $model->consumerTag = $map['ConsumerTag'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['ExpireTime'])) {
            $model->expireTime = $map['ExpireTime'];
        }

        if (isset($map['Expired'])) {
            $model->expired = $map['Expired'];
        }

        if (isset($map['GmtCreated'])) {
            $model->gmtCreated = $map['GmtCreated'];
        }

        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }

        if (isset($map['GwClusterId'])) {
            $model->gwClusterId = $map['GwClusterId'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
