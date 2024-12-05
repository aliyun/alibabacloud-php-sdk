<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models;

use AlibabaCloud\Tea\Model;

class ConfigureMigrationJobAlertRequest extends Model
{
    /**
     * @description The ID of the Alibaba Cloud account. You do not need to specify this parameter because this parameter will be removed in the future.
     *
     * @example 12323344****
     *
     * @var string
     */
    public $accountId;

    /**
     * @description The mobile phone numbers that receive latency-related alerts. Separate mobile phone numbers with commas (,).
     *
     * >
     *
     *   This parameter is available only for China site (aliyun.com) users. Only mobile phone numbers in the Chinese mainland are supported. Up to 10 mobile phone numbers can be specified.
     *   International site (alibabacloud.com) users cannot receive alerts by using mobile phones, but can [set alert rules for DTS tasks in the Cloud Monitor console](https://help.aliyun.com/document_detail/175876.html).
     *
     * @example 1361234****,1371234****
     *
     * @var string
     */
    public $delayAlertPhone;

    /**
     * @description Specifies whether to monitor task latency. Valid values:
     *
     *   **enable**: yes
     *   **disable**: no
     *
     * >
     *
     *   The default value is **enable**.
     *   You must specify at least one of the DelayAlertStatus and **ErrorAlertStatus** parameters.
     *
     * @example enable
     *
     * @var string
     */
    public $delayAlertStatus;

    /**
     * @description The threshold for triggering latency alerts. The unit is seconds and the value must be an integer. You can set the threshold based on your business needs. To avoid delay fluctuations caused by network and database loads, we recommend that you set the threshold to more than 10 seconds.
     *
     * >  If the **DelayAlertStatus** parameter is set to **enable**, this parameter must be specified.
     * @example 10
     *
     * @var string
     */
    public $delayOverSeconds;

    /**
     * @description The mobile phone numbers that receive status-related alerts. Separate mobile phone numbers with commas (,).
     *
     * >
     *
     *   This parameter is available only for China site (aliyun.com) users. Only mobile phone numbers in the Chinese mainland are supported. Up to 10 mobile phone numbers can be specified.
     *   International site (alibabacloud.com) users cannot receive alerts by using mobile phones, but can [set alert rules for DTS tasks in the Cloud Monitor console](https://help.aliyun.com/document_detail/175876.html).
     *
     * @example 1361234****,1371234****
     *
     * @var string
     */
    public $errorAlertPhone;

    /**
     * @description Specifies whether to monitor task status. Valid values:
     *
     *   **enable**: yes
     *   **disable**: no
     *
     * >
     *
     *   The default value is **enable**.
     *   You must specify at least one of the **DelayAlertStatus** and ErrorAlertStatus parameters.
     *   If the task that you monitor enters an abnormal state, an alert is triggered.
     *
     * @example enable
     *
     * @var string
     */
    public $errorAlertStatus;

    /**
     * @description The ID of the data migration instance. You can call the **DescribeMigrationJobs** operation to query the instance ID.
     *
     * This parameter is required.
     * @example dtslb9113qq11n****
     *
     * @var string
     */
    public $migrationJobId;

    /**
     * @var string
     */
    public $ownerId;

    /**
     * @description The ID of the region where the data migration instance resides. For more information, see [List of supported regions](https://help.aliyun.com/document_detail/141033.html).
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description Resource group ID.
     *
     * @example rg-acfmzawhxxc****
     *
     * @var string
     */
    public $resourceGroupId;
    protected $_name = [
        'accountId'        => 'AccountId',
        'delayAlertPhone'  => 'DelayAlertPhone',
        'delayAlertStatus' => 'DelayAlertStatus',
        'delayOverSeconds' => 'DelayOverSeconds',
        'errorAlertPhone'  => 'ErrorAlertPhone',
        'errorAlertStatus' => 'ErrorAlertStatus',
        'migrationJobId'   => 'MigrationJobId',
        'ownerId'          => 'OwnerId',
        'regionId'         => 'RegionId',
        'resourceGroupId'  => 'ResourceGroupId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accountId) {
            $res['AccountId'] = $this->accountId;
        }
        if (null !== $this->delayAlertPhone) {
            $res['DelayAlertPhone'] = $this->delayAlertPhone;
        }
        if (null !== $this->delayAlertStatus) {
            $res['DelayAlertStatus'] = $this->delayAlertStatus;
        }
        if (null !== $this->delayOverSeconds) {
            $res['DelayOverSeconds'] = $this->delayOverSeconds;
        }
        if (null !== $this->errorAlertPhone) {
            $res['ErrorAlertPhone'] = $this->errorAlertPhone;
        }
        if (null !== $this->errorAlertStatus) {
            $res['ErrorAlertStatus'] = $this->errorAlertStatus;
        }
        if (null !== $this->migrationJobId) {
            $res['MigrationJobId'] = $this->migrationJobId;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ConfigureMigrationJobAlertRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccountId'])) {
            $model->accountId = $map['AccountId'];
        }
        if (isset($map['DelayAlertPhone'])) {
            $model->delayAlertPhone = $map['DelayAlertPhone'];
        }
        if (isset($map['DelayAlertStatus'])) {
            $model->delayAlertStatus = $map['DelayAlertStatus'];
        }
        if (isset($map['DelayOverSeconds'])) {
            $model->delayOverSeconds = $map['DelayOverSeconds'];
        }
        if (isset($map['ErrorAlertPhone'])) {
            $model->errorAlertPhone = $map['ErrorAlertPhone'];
        }
        if (isset($map['ErrorAlertStatus'])) {
            $model->errorAlertStatus = $map['ErrorAlertStatus'];
        }
        if (isset($map['MigrationJobId'])) {
            $model->migrationJobId = $map['MigrationJobId'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }

        return $model;
    }
}
