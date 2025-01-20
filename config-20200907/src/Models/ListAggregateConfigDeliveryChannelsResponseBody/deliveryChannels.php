<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models\ListAggregateConfigDeliveryChannelsResponseBody;

use AlibabaCloud\Dara\Model;

class deliveryChannels extends Model
{
    /**
     * @var int
     */
    public $accountId;
    /**
     * @var string
     */
    public $aggregatorId;
    /**
     * @var bool
     */
    public $compliantSnapshot;
    /**
     * @var bool
     */
    public $configurationItemChangeNotification;
    /**
     * @var bool
     */
    public $configurationSnapshot;
    /**
     * @var string
     */
    public $deliveryChannelAssumeRoleArn;
    /**
     * @var string
     */
    public $deliveryChannelCondition;
    /**
     * @var string
     */
    public $deliveryChannelId;
    /**
     * @var string
     */
    public $deliveryChannelName;
    /**
     * @var string
     */
    public $deliveryChannelTargetArn;
    /**
     * @var string
     */
    public $deliveryChannelType;
    /**
     * @var string
     */
    public $deliverySnapshotTime;
    /**
     * @var string
     */
    public $description;
    /**
     * @var bool
     */
    public $nonCompliantNotification;
    /**
     * @var string
     */
    public $oversizedDataOSSTargetArn;
    /**
     * @var int
     */
    public $status;
    protected $_name = [
        'accountId'                           => 'AccountId',
        'aggregatorId'                        => 'AggregatorId',
        'compliantSnapshot'                   => 'CompliantSnapshot',
        'configurationItemChangeNotification' => 'ConfigurationItemChangeNotification',
        'configurationSnapshot'               => 'ConfigurationSnapshot',
        'deliveryChannelAssumeRoleArn'        => 'DeliveryChannelAssumeRoleArn',
        'deliveryChannelCondition'            => 'DeliveryChannelCondition',
        'deliveryChannelId'                   => 'DeliveryChannelId',
        'deliveryChannelName'                 => 'DeliveryChannelName',
        'deliveryChannelTargetArn'            => 'DeliveryChannelTargetArn',
        'deliveryChannelType'                 => 'DeliveryChannelType',
        'deliverySnapshotTime'                => 'DeliverySnapshotTime',
        'description'                         => 'Description',
        'nonCompliantNotification'            => 'NonCompliantNotification',
        'oversizedDataOSSTargetArn'           => 'OversizedDataOSSTargetArn',
        'status'                              => 'Status',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accountId) {
            $res['AccountId'] = $this->accountId;
        }

        if (null !== $this->aggregatorId) {
            $res['AggregatorId'] = $this->aggregatorId;
        }

        if (null !== $this->compliantSnapshot) {
            $res['CompliantSnapshot'] = $this->compliantSnapshot;
        }

        if (null !== $this->configurationItemChangeNotification) {
            $res['ConfigurationItemChangeNotification'] = $this->configurationItemChangeNotification;
        }

        if (null !== $this->configurationSnapshot) {
            $res['ConfigurationSnapshot'] = $this->configurationSnapshot;
        }

        if (null !== $this->deliveryChannelAssumeRoleArn) {
            $res['DeliveryChannelAssumeRoleArn'] = $this->deliveryChannelAssumeRoleArn;
        }

        if (null !== $this->deliveryChannelCondition) {
            $res['DeliveryChannelCondition'] = $this->deliveryChannelCondition;
        }

        if (null !== $this->deliveryChannelId) {
            $res['DeliveryChannelId'] = $this->deliveryChannelId;
        }

        if (null !== $this->deliveryChannelName) {
            $res['DeliveryChannelName'] = $this->deliveryChannelName;
        }

        if (null !== $this->deliveryChannelTargetArn) {
            $res['DeliveryChannelTargetArn'] = $this->deliveryChannelTargetArn;
        }

        if (null !== $this->deliveryChannelType) {
            $res['DeliveryChannelType'] = $this->deliveryChannelType;
        }

        if (null !== $this->deliverySnapshotTime) {
            $res['DeliverySnapshotTime'] = $this->deliverySnapshotTime;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->nonCompliantNotification) {
            $res['NonCompliantNotification'] = $this->nonCompliantNotification;
        }

        if (null !== $this->oversizedDataOSSTargetArn) {
            $res['OversizedDataOSSTargetArn'] = $this->oversizedDataOSSTargetArn;
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
        if (isset($map['AccountId'])) {
            $model->accountId = $map['AccountId'];
        }

        if (isset($map['AggregatorId'])) {
            $model->aggregatorId = $map['AggregatorId'];
        }

        if (isset($map['CompliantSnapshot'])) {
            $model->compliantSnapshot = $map['CompliantSnapshot'];
        }

        if (isset($map['ConfigurationItemChangeNotification'])) {
            $model->configurationItemChangeNotification = $map['ConfigurationItemChangeNotification'];
        }

        if (isset($map['ConfigurationSnapshot'])) {
            $model->configurationSnapshot = $map['ConfigurationSnapshot'];
        }

        if (isset($map['DeliveryChannelAssumeRoleArn'])) {
            $model->deliveryChannelAssumeRoleArn = $map['DeliveryChannelAssumeRoleArn'];
        }

        if (isset($map['DeliveryChannelCondition'])) {
            $model->deliveryChannelCondition = $map['DeliveryChannelCondition'];
        }

        if (isset($map['DeliveryChannelId'])) {
            $model->deliveryChannelId = $map['DeliveryChannelId'];
        }

        if (isset($map['DeliveryChannelName'])) {
            $model->deliveryChannelName = $map['DeliveryChannelName'];
        }

        if (isset($map['DeliveryChannelTargetArn'])) {
            $model->deliveryChannelTargetArn = $map['DeliveryChannelTargetArn'];
        }

        if (isset($map['DeliveryChannelType'])) {
            $model->deliveryChannelType = $map['DeliveryChannelType'];
        }

        if (isset($map['DeliverySnapshotTime'])) {
            $model->deliverySnapshotTime = $map['DeliverySnapshotTime'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['NonCompliantNotification'])) {
            $model->nonCompliantNotification = $map['NonCompliantNotification'];
        }

        if (isset($map['OversizedDataOSSTargetArn'])) {
            $model->oversizedDataOSSTargetArn = $map['OversizedDataOSSTargetArn'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
