<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models\GetCloudAccountResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eiam\V20211201\Models\GetCloudAccountResponseBody\cloudAccount\cloudAccountHealthCheckResult;
use AlibabaCloud\SDK\Eiam\V20211201\Models\GetCloudAccountResponseBody\cloudAccount\cloudAccountProviderConfig;

class cloudAccount extends Model
{
    /**
     * @var string
     */
    public $cloudAccountExternalId;

    /**
     * @var string
     */
    public $cloudAccountHealth;

    /**
     * @var cloudAccountHealthCheckResult
     */
    public $cloudAccountHealthCheckResult;

    /**
     * @var string
     */
    public $cloudAccountId;

    /**
     * @var string
     */
    public $cloudAccountName;

    /**
     * @var cloudAccountProviderConfig
     */
    public $cloudAccountProviderConfig;

    /**
     * @var string
     */
    public $cloudAccountProviderName;

    /**
     * @var string
     */
    public $cloudAccountVendorType;

    /**
     * @var int
     */
    public $createTime;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var int
     */
    public $updateTime;
    protected $_name = [
        'cloudAccountExternalId' => 'CloudAccountExternalId',
        'cloudAccountHealth' => 'CloudAccountHealth',
        'cloudAccountHealthCheckResult' => 'CloudAccountHealthCheckResult',
        'cloudAccountId' => 'CloudAccountId',
        'cloudAccountName' => 'CloudAccountName',
        'cloudAccountProviderConfig' => 'CloudAccountProviderConfig',
        'cloudAccountProviderName' => 'CloudAccountProviderName',
        'cloudAccountVendorType' => 'CloudAccountVendorType',
        'createTime' => 'CreateTime',
        'description' => 'Description',
        'instanceId' => 'InstanceId',
        'updateTime' => 'UpdateTime',
    ];

    public function validate()
    {
        if (null !== $this->cloudAccountHealthCheckResult) {
            $this->cloudAccountHealthCheckResult->validate();
        }
        if (null !== $this->cloudAccountProviderConfig) {
            $this->cloudAccountProviderConfig->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cloudAccountExternalId) {
            $res['CloudAccountExternalId'] = $this->cloudAccountExternalId;
        }

        if (null !== $this->cloudAccountHealth) {
            $res['CloudAccountHealth'] = $this->cloudAccountHealth;
        }

        if (null !== $this->cloudAccountHealthCheckResult) {
            $res['CloudAccountHealthCheckResult'] = null !== $this->cloudAccountHealthCheckResult ? $this->cloudAccountHealthCheckResult->toArray($noStream) : $this->cloudAccountHealthCheckResult;
        }

        if (null !== $this->cloudAccountId) {
            $res['CloudAccountId'] = $this->cloudAccountId;
        }

        if (null !== $this->cloudAccountName) {
            $res['CloudAccountName'] = $this->cloudAccountName;
        }

        if (null !== $this->cloudAccountProviderConfig) {
            $res['CloudAccountProviderConfig'] = null !== $this->cloudAccountProviderConfig ? $this->cloudAccountProviderConfig->toArray($noStream) : $this->cloudAccountProviderConfig;
        }

        if (null !== $this->cloudAccountProviderName) {
            $res['CloudAccountProviderName'] = $this->cloudAccountProviderName;
        }

        if (null !== $this->cloudAccountVendorType) {
            $res['CloudAccountVendorType'] = $this->cloudAccountVendorType;
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
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
        if (isset($map['CloudAccountExternalId'])) {
            $model->cloudAccountExternalId = $map['CloudAccountExternalId'];
        }

        if (isset($map['CloudAccountHealth'])) {
            $model->cloudAccountHealth = $map['CloudAccountHealth'];
        }

        if (isset($map['CloudAccountHealthCheckResult'])) {
            $model->cloudAccountHealthCheckResult = cloudAccountHealthCheckResult::fromMap($map['CloudAccountHealthCheckResult']);
        }

        if (isset($map['CloudAccountId'])) {
            $model->cloudAccountId = $map['CloudAccountId'];
        }

        if (isset($map['CloudAccountName'])) {
            $model->cloudAccountName = $map['CloudAccountName'];
        }

        if (isset($map['CloudAccountProviderConfig'])) {
            $model->cloudAccountProviderConfig = cloudAccountProviderConfig::fromMap($map['CloudAccountProviderConfig']);
        }

        if (isset($map['CloudAccountProviderName'])) {
            $model->cloudAccountProviderName = $map['CloudAccountProviderName'];
        }

        if (isset($map['CloudAccountVendorType'])) {
            $model->cloudAccountVendorType = $map['CloudAccountVendorType'];
        }

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        return $model;
    }
}
