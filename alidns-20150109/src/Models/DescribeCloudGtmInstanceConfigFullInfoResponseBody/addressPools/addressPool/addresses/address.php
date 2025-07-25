<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeCloudGtmInstanceConfigFullInfoResponseBody\addressPools\addressPool\addresses;

use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeCloudGtmInstanceConfigFullInfoResponseBody\addressPools\addressPool\addresses\address\requestSource;
use AlibabaCloud\Tea\Model;

class address extends Model
{
    /**
     * @description IP address or domain name.
     *
     * @example 223.5.XX.XX
     *
     * @var string
     */
    public $address;

    /**
     * @description The address ID. This ID uniquely identifies the address.
     *
     * @example addr-89564712295703**96
     *
     * @var string
     */
    public $addressId;

    /**
     * @description Address ownership information, not supported in the current version.
     *
     * @example The current version does not support returning this parameter.
     *
     * @var string
     */
    public $attributeInfo;

    /**
     * @description The failover mode that is used when address exceptions are identified. Valid values:
     *
     *   auto: the automatic mode. The system determines whether to return an address based on the health check results. If the address fails health checks, the system does not return the address. If the address passes health checks, the system returns the address.
     *   manual: the manual mode. If an address is in the unavailable state, the address is not returned for DNS requests even if the address passes health checks. If an address is in the available state, the address is returned for DNS requests even if an alert is triggered when the address fails health checks.
     *
     * @example auto
     *
     * @var string
     */
    public $availableMode;

    /**
     * @description The availability state of the address. Valid values:
     *
     *   available
     *   unavailable
     *
     * @example available
     *
     * @var string
     */
    public $availableStatus;

    /**
     * @description Address creation time.
     *
     * @example 2024-03-15T01:46Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @description Address creation time (timestamp).
     *
     * @example 1527690629357
     *
     * @var int
     */
    public $createTimestamp;

    /**
     * @description The enabling state of the address. Valid values:
     *
     *   enable
     *   disable
     *
     * @example enable
     *
     * @var string
     */
    public $enableStatus;

    /**
     * @description The condition for determining the health state of the address. Valid values:
     *
     *   any_ok: The health check results of at least one health check template are normal.
     *   p30_ok: The health check results of at least 30% of health check templates are normal.
     *   p50_ok: The health check results of at least 50% of health check templates are normal.
     *   p70_ok: The health check results of at least 70% of health check templates are normal.
     *   all_ok: The health check results of all health check templates are normal.
     *
     * @example any_ok
     *
     * @var string
     */
    public $healthJudgement;

    /**
     * @description The health check state of the address. Valid values:
     *
     *   ok: The address passes all health checks of the referenced health check templates.
     *   ok_alert: The address fails some health checks of the referenced health check templates but the address is deemed normal.
     *   ok_no_monitor: The address does not reference any health check template and is normal.
     *   exceptional: The address fails some or all health checks of the referenced health check templates and the address is deemed abnormal.
     *
     * @example ok
     *
     * @var string
     */
    public $healthStatus;

    /**
     * @description The availability state of the address when AvailableMode is set to manual. Valid values:
     *
     *   available: The address is normal. In this state, the address is returned for DNS requests even if an alert is triggered when the address fails health checks.
     *   unavailable: The address is abnormal. In this state, the address is not returned for DNS requests even if the address passes health checks.
     *
     * @example available
     *
     * @var string
     */
    public $manualAvailableStatus;

    /**
     * @description Address name.
     *
     * @example Address-1
     *
     * @var string
     */
    public $name;

    /**
     * @description The remark of the address.
     *
     * @example test
     *
     * @var string
     */
    public $remark;

    /**
     * @description Request source list.
     *
     * @var requestSource
     */
    public $requestSource;

    /**
     * @description Indicates whether it is a sequential (non-preemptive) mode scheduling object, applicable to hybrid cloud management scenarios:
     *
     * - true: yes
     * - false: no
     *
     * @example false
     *
     * @var bool
     */
    public $seqNonPreemptiveSchedule;

    /**
     * @description Sequence number, indicating the priority of address return, where smaller numbers have higher priority.
     *
     * @example 1
     *
     * @var int
     */
    public $serialNumber;

    /**
     * @description The type of the address. Valid values:
     *
     *   IPV4: the IPv4 address
     *   IPv6: the IPv6 address
     *   domain: the domain name
     *
     * @example IPv4
     *
     * @var string
     */
    public $type;

    /**
     * @description Last modified time of the address.
     *
     * @example 2024-03-15T01:46Z
     *
     * @var string
     */
    public $updateTime;

    /**
     * @description The last modification time of the address (timestamp).
     *
     * @example 1527690629357
     *
     * @var int
     */
    public $updateTimestamp;

    /**
     * @description Weight value (an integer between 1 and 100, inclusive), allowing different weight values to be set for each address, enabling resolution queries to return addresses in proportion to their weights.
     *
     * @example 1
     *
     * @var int
     */
    public $weightValue;
    protected $_name = [
        'address' => 'Address',
        'addressId' => 'AddressId',
        'attributeInfo' => 'AttributeInfo',
        'availableMode' => 'AvailableMode',
        'availableStatus' => 'AvailableStatus',
        'createTime' => 'CreateTime',
        'createTimestamp' => 'CreateTimestamp',
        'enableStatus' => 'EnableStatus',
        'healthJudgement' => 'HealthJudgement',
        'healthStatus' => 'HealthStatus',
        'manualAvailableStatus' => 'ManualAvailableStatus',
        'name' => 'Name',
        'remark' => 'Remark',
        'requestSource' => 'RequestSource',
        'seqNonPreemptiveSchedule' => 'SeqNonPreemptiveSchedule',
        'serialNumber' => 'SerialNumber',
        'type' => 'Type',
        'updateTime' => 'UpdateTime',
        'updateTimestamp' => 'UpdateTimestamp',
        'weightValue' => 'WeightValue',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->address) {
            $res['Address'] = $this->address;
        }
        if (null !== $this->addressId) {
            $res['AddressId'] = $this->addressId;
        }
        if (null !== $this->attributeInfo) {
            $res['AttributeInfo'] = $this->attributeInfo;
        }
        if (null !== $this->availableMode) {
            $res['AvailableMode'] = $this->availableMode;
        }
        if (null !== $this->availableStatus) {
            $res['AvailableStatus'] = $this->availableStatus;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->createTimestamp) {
            $res['CreateTimestamp'] = $this->createTimestamp;
        }
        if (null !== $this->enableStatus) {
            $res['EnableStatus'] = $this->enableStatus;
        }
        if (null !== $this->healthJudgement) {
            $res['HealthJudgement'] = $this->healthJudgement;
        }
        if (null !== $this->healthStatus) {
            $res['HealthStatus'] = $this->healthStatus;
        }
        if (null !== $this->manualAvailableStatus) {
            $res['ManualAvailableStatus'] = $this->manualAvailableStatus;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }
        if (null !== $this->requestSource) {
            $res['RequestSource'] = null !== $this->requestSource ? $this->requestSource->toMap() : null;
        }
        if (null !== $this->seqNonPreemptiveSchedule) {
            $res['SeqNonPreemptiveSchedule'] = $this->seqNonPreemptiveSchedule;
        }
        if (null !== $this->serialNumber) {
            $res['SerialNumber'] = $this->serialNumber;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }
        if (null !== $this->updateTimestamp) {
            $res['UpdateTimestamp'] = $this->updateTimestamp;
        }
        if (null !== $this->weightValue) {
            $res['WeightValue'] = $this->weightValue;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return address
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Address'])) {
            $model->address = $map['Address'];
        }
        if (isset($map['AddressId'])) {
            $model->addressId = $map['AddressId'];
        }
        if (isset($map['AttributeInfo'])) {
            $model->attributeInfo = $map['AttributeInfo'];
        }
        if (isset($map['AvailableMode'])) {
            $model->availableMode = $map['AvailableMode'];
        }
        if (isset($map['AvailableStatus'])) {
            $model->availableStatus = $map['AvailableStatus'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['CreateTimestamp'])) {
            $model->createTimestamp = $map['CreateTimestamp'];
        }
        if (isset($map['EnableStatus'])) {
            $model->enableStatus = $map['EnableStatus'];
        }
        if (isset($map['HealthJudgement'])) {
            $model->healthJudgement = $map['HealthJudgement'];
        }
        if (isset($map['HealthStatus'])) {
            $model->healthStatus = $map['HealthStatus'];
        }
        if (isset($map['ManualAvailableStatus'])) {
            $model->manualAvailableStatus = $map['ManualAvailableStatus'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }
        if (isset($map['RequestSource'])) {
            $model->requestSource = requestSource::fromMap($map['RequestSource']);
        }
        if (isset($map['SeqNonPreemptiveSchedule'])) {
            $model->seqNonPreemptiveSchedule = $map['SeqNonPreemptiveSchedule'];
        }
        if (isset($map['SerialNumber'])) {
            $model->serialNumber = $map['SerialNumber'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }
        if (isset($map['UpdateTimestamp'])) {
            $model->updateTimestamp = $map['UpdateTimestamp'];
        }
        if (isset($map['WeightValue'])) {
            $model->weightValue = $map['WeightValue'];
        }

        return $model;
    }
}
