<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models\SearchCloudGtmAddressesResponseBody\addresses;

use AlibabaCloud\SDK\Alidns\V20150109\Models\SearchCloudGtmAddressesResponseBody\addresses\address\healthTasks;
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
     * @description ID of the address, unique identifier for the address.
     *
     * @example addr-89518218114368**92
     *
     * @var string
     */
    public $addressId;

    /**
     * @description Address ownership information, not supported in the current version.
     *
     * @example The parameter should be none.
     *
     * @var string
     */
    public $attributeInfo;

    /**
     * @description The failover method that is used if the address fails health checks. Valid values:
     *
     *   auto: the automatic mode. The system determines whether to return an address based on the health check results. If the address fails health checks, the system does not return the address. If the address passes health checks, the system returns the address.
     *   manual: the manual mode. If an address is in the unavailable state, the address is not returned for Domain Name System (DNS) requests even if the address passes health checks. If an address is in the available state, the address is returned for DNS requests even if an alert is triggered when the address fails health checks.
     *
     * @example auto
     *
     * @var string
     */
    public $availableMode;

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
    public $availableStatus;

    /**
     * @description Creation time of the address.
     *
     * @example 2024-03-23T13:09Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @description Creation time of the address (timestamp).
     *
     * @example 1527690629357
     *
     * @var int
     */
    public $createTimestamp;

    /**
     * @description Current activation status of the address:
     * - enable: Enabled status
     * - disable: Disabled status
     *
     * @example enable
     *
     * @var string
     */
    public $enableStatus;

    /**
     * @description The condition for determining the health status of the address. Valid values:
     *
     *   any_ok: The health check results of at least one health check template are normal.
     *   p30_ok: The health check results of at least 30% of health check templates are normal.
     *   p50_ok: The health check results of at least 50% of health check templates are normal.
     *   p70_ok: The health check results of at least 70% of health check templates are normal.
     *   all_ok: The health check results of all health check templates are normal.
     *
     * @example p50_ok
     *
     * @var string
     */
    public $healthJudgement;

    /**
     * @description The health check state of the address. Valid values:
     *
     *   ok: The address passes all health checks of the referenced health check templates.
     *   ok_alert: The address fails some health checks of the referenced health check templates, but the address is deemed available.
     *   ok_no_monitor: The address does not reference any health check template.
     *   exceptional: The address fails some or all health checks of the referenced health check templates, and the address is deemed unavailable.
     *
     * @example ok
     *
     * @var string
     */
    public $healthStatus;

    /**
     * @description The health check tasks.
     *
     * @var healthTasks
     */
    public $healthTasks;

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
     * @description Remarks.
     *
     * @example test
     *
     * @var string
     */
    public $remark;

    /**
     * @description Address type:
     * - IPv4: ipv4 address - IPv6: ipv6 address - domain: domain name
     *
     * @example IPv4
     *
     * @var string
     */
    public $type;

    /**
     * @description The last modification time of the address.
     *
     * @example 2024-03-29T13:20Z
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
        'healthTasks' => 'HealthTasks',
        'manualAvailableStatus' => 'ManualAvailableStatus',
        'name' => 'Name',
        'remark' => 'Remark',
        'type' => 'Type',
        'updateTime' => 'UpdateTime',
        'updateTimestamp' => 'UpdateTimestamp',
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
        if (null !== $this->healthTasks) {
            $res['HealthTasks'] = null !== $this->healthTasks ? $this->healthTasks->toMap() : null;
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
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }
        if (null !== $this->updateTimestamp) {
            $res['UpdateTimestamp'] = $this->updateTimestamp;
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
        if (isset($map['HealthTasks'])) {
            $model->healthTasks = healthTasks::fromMap($map['HealthTasks']);
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
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }
        if (isset($map['UpdateTimestamp'])) {
            $model->updateTimestamp = $map['UpdateTimestamp'];
        }

        return $model;
    }
}
