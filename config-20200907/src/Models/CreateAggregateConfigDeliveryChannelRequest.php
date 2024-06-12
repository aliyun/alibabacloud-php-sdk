<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models;

use AlibabaCloud\Tea\Model;

class CreateAggregateConfigDeliveryChannelRequest extends Model
{
    /**
     * @description The ID of the account group.
     *
     * This parameter is required.
     * @example ca-a4e5626622af0079****
     *
     * @var string
     */
    public $aggregatorId;

    /**
     * @description The client token that is used to ensure the idempotence of the request. You can use the client to generate the token, but you must make sure that the token is unique among different requests.
     *
     * The `token` can contain only ASCII characters and cannot exceed 64 characters in length. For more information, see [Ensure idempotence](https://help.aliyun.com/document_detail/25693.html)
     * @example 1594295238-f9361358-5843-4294-8d30-b5183fac****
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description Specifies whether to deliver resource change logs. If you set this parameter to true, Cloud Config delivers resource change logs to OSS, Log Service, or MNS when the configurations of the resources change. Valid values:
     *
     *   true: Cloud Config delivers resource change logs.
     *   false: Cloud Config does not deliver resource change logs. This is the default value.
     *
     * > This parameter is available for delivery channels of the OSS, SLS, and MNS types.
     * @example false
     *
     * @var bool
     */
    public $configurationItemChangeNotification;

    /**
     * @description Specifies whether to deliver scheduled resource snapshots. Cloud Config delivers scheduled resource snapshots to OSS, MNS, or Log Service at `04:00Z` and `16:00Z` every day. The time is displayed in UTC. Valid values:
     *
     *   true: Cloud Config delivers scheduled resource snapshots.
     *   false: Cloud Config does not deliver scheduled resource snapshots. This is the default value.
     *
     * @example false
     *
     * @var bool
     */
    public $configurationSnapshot;

    /**
     * @description The rule that you want to attach to the delivery channel. This parameter is available when you deliver data of all types to MNS or deliver snapshots to Log Service.
     *
     *   If you set the DeliveryChannelType parameter to MNS, take note of the following settings of the lowest risk level and the resource types of the events to which you want to subscribe:
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
     * @description The name of the delivery channel.
     *
     * > If you do not configure this parameter, this parameter is left empty.
     * @example testoss
     *
     * @var string
     */
    public $deliveryChannelName;

    /**
     * @description The ARN of the delivery destination. Valid values:
     *
     *   `acs:oss:{RegionId}:{accountId}:{bucketName}` if your delivery destination is an OSS bucket. Example: `acs:oss:cn-shanghai:100931896542****:new-bucket`.
     *   `acs:mns:{RegionId}:{accountId}:/topics/{topicName}` if your delivery destination is an MNS topic. Example: `acs:mns:cn-shanghai:100931896542****:/topics/topic1`.
     *   `acs:log:{RegionId}:{accountId}:project/{projectName}/logstore/{logstoreName}` if your delivery destination is a Log Service Logstore. Example: `acs:log:cn-shanghai:100931896542****:project/project1/logstore/logstore1`.
     *
     * This parameter is required.
     * @example acs:oss:cn-shanghai:100931896542****:new-bucket
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
     * This parameter is required.
     * @example OSS
     *
     * @var string
     */
    public $deliveryChannelType;

    /**
     * @description The time when you want Cloud Config to deliver scheduled resource snapshots every day.
     *
     * > When you enable the scheduled resource delivery feature, you can configure this parameter to specify a custom delivery time. If you do not configure this parameter, Cloud Config automatically delivers scheduled resource snapshots at `04:00Z` and `16:00Z` every day.
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
     * @description Specifies whether to deliver resource non-compliance events. If you set this parameter to true, Cloud Config delivers resource non-compliance events to Log Service or MNS when resources are considered non-compliant. Valid values:
     *
     *   true: Cloud Config delivers resource non-compliance events.
     *   false: Cloud Config does not deliver resource non-compliance events. This is the default value.
     *
     * > This parameter is available only for delivery channels of the SLS or MNS type.
     * @example false
     *
     * @var bool
     */
    public $nonCompliantNotification;

    /**
     * @description The ARN of the OSS bucket to which you want to transfer the delivery data when the size of the data exceeds the specified upper limit of the delivery channel. Format: `acs:oss:{RegionId}:{accountId}:{bucketName}`.
     *
     * > This parameter is available only for delivery channels of the SLS or MNS type. The upper limit on the storage size of delivery channels of the SLS type is 1 MB, and the maximum storage size of delivery channels of the MNS type is 64 KB.
     * @example acs:oss:cn-shanghai:100931896542****:new-bucket
     *
     * @var string
     */
    public $oversizedDataOSSTargetArn;
    protected $_name = [
        'aggregatorId'                        => 'AggregatorId',
        'clientToken'                         => 'ClientToken',
        'configurationItemChangeNotification' => 'ConfigurationItemChangeNotification',
        'configurationSnapshot'               => 'ConfigurationSnapshot',
        'deliveryChannelCondition'            => 'DeliveryChannelCondition',
        'deliveryChannelName'                 => 'DeliveryChannelName',
        'deliveryChannelTargetArn'            => 'DeliveryChannelTargetArn',
        'deliveryChannelType'                 => 'DeliveryChannelType',
        'deliverySnapshotTime'                => 'DeliverySnapshotTime',
        'description'                         => 'Description',
        'nonCompliantNotification'            => 'NonCompliantNotification',
        'oversizedDataOSSTargetArn'           => 'OversizedDataOSSTargetArn',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aggregatorId) {
            $res['AggregatorId'] = $this->aggregatorId;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->configurationItemChangeNotification) {
            $res['ConfigurationItemChangeNotification'] = $this->configurationItemChangeNotification;
        }
        if (null !== $this->configurationSnapshot) {
            $res['ConfigurationSnapshot'] = $this->configurationSnapshot;
        }
        if (null !== $this->deliveryChannelCondition) {
            $res['DeliveryChannelCondition'] = $this->deliveryChannelCondition;
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateAggregateConfigDeliveryChannelRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AggregatorId'])) {
            $model->aggregatorId = $map['AggregatorId'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['ConfigurationItemChangeNotification'])) {
            $model->configurationItemChangeNotification = $map['ConfigurationItemChangeNotification'];
        }
        if (isset($map['ConfigurationSnapshot'])) {
            $model->configurationSnapshot = $map['ConfigurationSnapshot'];
        }
        if (isset($map['DeliveryChannelCondition'])) {
            $model->deliveryChannelCondition = $map['DeliveryChannelCondition'];
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

        return $model;
    }
}
