<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models\GetAggregateConfigDeliveryChannelResponseBody;

use AlibabaCloud\Tea\Model;

class deliveryChannel extends Model
{
    /**
     * @description The ID of the member in the account group.
     *
     * @example 120886317861****
     *
     * @var string
     */
    public $accountId;

    /**
     * @description The ID of the account group.
     *
     * @example ca-a4e5626622af0079****
     *
     * @var string
     */
    public $aggregatorId;

    /**
     * @description Indicates whether the specified destination receives resource change logs. If the value of this parameter is true, Cloud Config delivers the resource change logs to OSS, Log Service, or MNS when the configurations of the resources change. Valid values:
     *
     *   true: The specified destination receives resource change logs.
     *   false: The specified destination does not receive resource change logs.
     *
     * @example true
     *
     * @var bool
     */
    public $configurationItemChangeNotification;

    /**
     * @description Indicates whether the specified destination receives scheduled resource snapshots. Cloud Config delivers scheduled resource snapshots at `04:00Z` and `16:00Z` to OSS, MNS, or Log Service every day. The time is displayed in UTC. Valid values:
     *
     *   true: The specified destination receives scheduled resource snapshots.
     *   false: The specified destination does not receive scheduled resource snapshots.
     *
     * @example false
     *
     * @var bool
     */
    public $configurationSnapshot;

    /**
     * @description The ARN of the role that is assigned to the delivery channel.
     *
     * @example acs:ram::120886317861****:role/aliyunserviceroleforconfig
     *
     * @var string
     */
    public $deliveryChannelAssumeRoleArn;

    /**
     * @description The rule that is attached to the delivery channel. This parameter is available when you deliver data of all types to MNS or deliver snapshots to Log Service.
     *
     *   If the value of the DeliveryChannelType parameter is MNS, take note of the following settings of the lowest risk level and resource types of the events to which you subscribed:
     *
     *   The lowest risk level of the events to which you want to subscribe is in the following format: `{"filterType":"RuleRiskLevel","value":"1","multiple":false}`.
     *
     * The `value` field indicates the risk level of the events to which you want to subscribe. Valid values: 1, 2, and 3. The value 1 indicates the high risk level, the value 2 indicates the medium risk level, and the value 3 indicates the low risk level.
     *
     *   The setting of the resource types of the events to which you want to subscribe is in the following format: `{"filterType":"ResourceType","values":["ACS::ACK::Cluster","ACS::ActionTrail::Trail","ACS::CBWP::CommonBandwidthPackage"],"multiple":true}`.
     *
     * `[{"filterType":"ResourceType","values":["ACS::ActionTrail::Trail","ACS::CBWP::CommonBandwidthPackage","ACS::CDN::Domain","ACS::CEN::CenBandwidthPackage","ACS::CEN::CenInstance","ACS::CEN::Flowlog","ACS::DdosCoo::Instance"],"multiple":true}]`
     *
     *   If you set the DeliveryChannelType parameter to SLS, the setting of the resource types of the snapshots to which you want to deliver is in the following format: `{"filterType":"ResourceType","values":["ACS::ACK::Cluster","ACS::ActionTrail::Trail","ACS::CBWP::CommonBandwidthPackage"],"multiple":true}`.
     *
     * `[{"filterType":"ResourceType","values":["ACS::ActionTrail::Trail","ACS::CBWP::CommonBandwidthPackage","ACS::CDN::Domain","ACS::CEN::CenBandwidthPackage","ACS::CEN::CenInstance","ACS::CEN::Flowlog","ACS::DdosCoo::Instance"],"multiple":true}]`
     * @example [{"filterType":"ResourceType","values":["ACS::ActionTrail::Trail","ACS::CBWP::CommonBandwidthPackage","ACS::CDN::Domain","ACS::CEN::CenBandwidthPackage","ACS::CEN::CenInstance","ACS::CEN::Flowlog","ACS::DdosCoo::Instance"],"multiple":true}]
     *
     * @var string
     */
    public $deliveryChannelCondition;

    /**
     * @description The ID of the delivery channel.
     *
     * @example cdc-d9106457e0d900b1****
     *
     * @var string
     */
    public $deliveryChannelId;

    /**
     * @description The name of the delivery channel.
     *
     * @example myDeliveryChannel
     *
     * @var string
     */
    public $deliveryChannelName;

    /**
     * @description The ARN of the delivery destination.
     *
     *   If the value of the DeliveryChannelType parameter is OSS, the value of this parameter is the ARN of the destination OSS bucket.
     *   If the value of the DeliveryChannelType parameter is MNS, the value of this parameter is the ARN of the destination MNS topic.
     *   If the value of the DeliveryChannelType parameter is SLS, the value of this parameter is the ARN of the destination Log Service Logstore.
     *
     * @example acs:oss:cn-shanghai:120886317861****:new-bucket
     *
     * @var string
     */
    public $deliveryChannelTargetArn;

    /**
     * @description The type of the delivery channel. Valid values:
     *
     *   OSS: Object Storage Service (OSS)
     *   MNS: Message Service (MNS)
     *   SLS: Log Service
     *
     * @example OSS
     *
     * @var string
     */
    public $deliveryChannelType;

    /**
     * @description The time when Cloud Config delivers scheduled resources snapshots every day.
     *
     * Format: `HH:mmZ`. This time is displayed in UTC.
     * @example 09:10Z
     *
     * @var string
     */
    public $deliverySnapshotTime;

    /**
     * @description The description of the delivery channel.
     *
     * @example My OSS delivery.
     *
     * @var string
     */
    public $description;

    /**
     * @description Indicates whether the specified destination receives resource non-compliance events. If the value of this parameter is true, Cloud Config delivers resource non-compliance events to Log Service or MNS when resources are evaluated as non-compliant. Valid values:
     *
     *   true: The specified destination receives resource non-compliance events.
     *   false: The specified destination does not receive resource non-compliance events.
     *
     * @example false
     *
     * @var bool
     */
    public $nonCompliantNotification;

    /**
     * @description The ARN of the OSS bucket to which the delivered data is transferred when the size of the data exceeds the specified upper limit of the delivery channel.
     *
     * @example acs:oss:cn-shanghai:100931896542****:new-bucket
     *
     * @var string
     */
    public $oversizedDataOSSTargetArn;

    /**
     * @description The status of the delivery channel. Valid values:
     *
     *   0: The delivery channel is disabled.
     *   1: The delivery channel is enabled.
     *
     * @example 1
     *
     * @var int
     */
    public $status;
    protected $_name = [
        'accountId'                           => 'AccountId',
        'aggregatorId'                        => 'AggregatorId',
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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accountId) {
            $res['AccountId'] = $this->accountId;
        }
        if (null !== $this->aggregatorId) {
            $res['AggregatorId'] = $this->aggregatorId;
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

    /**
     * @param array $map
     *
     * @return deliveryChannel
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccountId'])) {
            $model->accountId = $map['AccountId'];
        }
        if (isset($map['AggregatorId'])) {
            $model->aggregatorId = $map['AggregatorId'];
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
