<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models\SearchCloudGtmAddressPoolsResponseBody\addressPools\addressPool\addresses;

use AlibabaCloud\SDK\Alidns\V20150109\Models\SearchCloudGtmAddressPoolsResponseBody\addressPools\addressPool\addresses\address\healthTasks;
use AlibabaCloud\Tea\Model;

class address extends Model
{
    /**
     * @example 223.5.XX.XX
     *
     * @var string
     */
    public $address;

    /**
     * @example addr-895182181143688192
     *
     * @var string
     */
    public $addressId;

    /**
     * @var string
     */
    public $attributeInfo;

    /**
     * @example auto
     *
     * @var string
     */
    public $availableMode;

    /**
     * @example available
     *
     * @var string
     */
    public $availableStatus;

    /**
     * @example 2024-03-15T01:46Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @example 1527690629357
     *
     * @var int
     */
    public $createTimestamp;

    /**
     * @example enable
     *
     * @var string
     */
    public $enableStatus;

    /**
     * @example any_ok
     *
     * @var string
     */
    public $healthJudgement;

    /**
     * @example ok
     *
     * @var string
     */
    public $healthStatus;

    /**
     * @var healthTasks
     */
    public $healthTasks;

    /**
     * @example available
     *
     * @var string
     */
    public $manualAvailableStatus;

    /**
     * @example Address-1
     *
     * @var string
     */
    public $name;

    /**
     * @example test
     *
     * @var string
     */
    public $remark;

    /**
     * @example default
     *
     * @var string
     */
    public $requestSource;

    /**
     * @example 1
     *
     * @var int
     */
    public $serialNumber;

    /**
     * @example IPv4
     *
     * @var string
     */
    public $type;

    /**
     * @example 2024-03-15T01:46Z
     *
     * @var string
     */
    public $updateTime;

    /**
     * @example 1527690629357
     *
     * @var int
     */
    public $updateTimestamp;

    /**
     * @example 1
     *
     * @var int
     */
    public $weightValue;
    protected $_name = [
        'address'               => 'Address',
        'addressId'             => 'AddressId',
        'attributeInfo'         => 'AttributeInfo',
        'availableMode'         => 'AvailableMode',
        'availableStatus'       => 'AvailableStatus',
        'createTime'            => 'CreateTime',
        'createTimestamp'       => 'CreateTimestamp',
        'enableStatus'          => 'EnableStatus',
        'healthJudgement'       => 'HealthJudgement',
        'healthStatus'          => 'HealthStatus',
        'healthTasks'           => 'HealthTasks',
        'manualAvailableStatus' => 'ManualAvailableStatus',
        'name'                  => 'Name',
        'remark'                => 'Remark',
        'requestSource'         => 'RequestSource',
        'serialNumber'          => 'SerialNumber',
        'type'                  => 'Type',
        'updateTime'            => 'UpdateTime',
        'updateTimestamp'       => 'UpdateTimestamp',
        'weightValue'           => 'WeightValue',
    ];

    public function validate()
    {
    }

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
        if (null !== $this->requestSource) {
            $res['RequestSource'] = $this->requestSource;
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
        if (isset($map['RequestSource'])) {
            $model->requestSource = $map['RequestSource'];
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
