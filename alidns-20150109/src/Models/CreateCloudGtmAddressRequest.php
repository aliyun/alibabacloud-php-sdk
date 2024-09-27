<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\SDK\Alidns\V20150109\Models\CreateCloudGtmAddressRequest\healthTasks;
use AlibabaCloud\Tea\Model;

class CreateCloudGtmAddressRequest extends Model
{
    /**
     * @description The language of the response. Valid values:
     *
     *   zh-CN: Chinese
     *   en-US (default): English
     *
     * @example zh-CN
     *
     * @var string
     */
    public $acceptLanguage;

    /**
     * @description IP address or domain name.
     *
     * This parameter is required.
     * @example 223.5.XX.XX
     *
     * @var string
     */
    public $address;

    /**
     * @description Address ownership information.
     *
     * @example 当前版本不支持传入此参数，请不要传入参数。
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
     * This parameter is required.
     * @example auto
     *
     * @var string
     */
    public $availableMode;

    /**
     * @description The client token that is used to ensure the idempotence of the request. You can use the client to generate the token, but you must make sure that the token is unique among different requests. The token can contain only ASCII characters and cannot exceed 64 characters in length.
     *
     * @example 1ae05db4-10e7-11ef-b126-00163e24**22
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description Indicates the current enabled status of the address:
     * This parameter is required.
     * @example enable
     *
     * @var string
     */
    public $enableStatus;

    /**
     * @description The condition for determining the health status of the address. This parameter is required when HealthTasks is specified. Valid values:
     *
     *   any_ok: The health check results of at least one health check template are normal.
     *   p30_ok: The health check results of at least 30% of health check templates are normal.
     *   p50_ok: The health check results of at least 50% of health check templates are normal.
     *   p70_ok: The health check results of at least 70% of health check templates are normal.
     *   all_ok: The health check results of all health check templates are normal.
     *
     * This parameter is required.
     * @example p50_ok
     *
     * @var string
     */
    public $healthJudgement;

    /**
     * @description The health check tasks associated with the address.
     *
     * @var healthTasks[]
     */
    public $healthTasks;

    /**
     * @description The availability state of the address. This parameter is required when AvailableMode is set to **manual**. Valid values:
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
     * This parameter is required.
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
     * This parameter is required.
     * @example IPv4
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'acceptLanguage'        => 'AcceptLanguage',
        'address'               => 'Address',
        'attributeInfo'         => 'AttributeInfo',
        'availableMode'         => 'AvailableMode',
        'clientToken'           => 'ClientToken',
        'enableStatus'          => 'EnableStatus',
        'healthJudgement'       => 'HealthJudgement',
        'healthTasks'           => 'HealthTasks',
        'manualAvailableStatus' => 'ManualAvailableStatus',
        'name'                  => 'Name',
        'remark'                => 'Remark',
        'type'                  => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->acceptLanguage) {
            $res['AcceptLanguage'] = $this->acceptLanguage;
        }
        if (null !== $this->address) {
            $res['Address'] = $this->address;
        }
        if (null !== $this->attributeInfo) {
            $res['AttributeInfo'] = $this->attributeInfo;
        }
        if (null !== $this->availableMode) {
            $res['AvailableMode'] = $this->availableMode;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->enableStatus) {
            $res['EnableStatus'] = $this->enableStatus;
        }
        if (null !== $this->healthJudgement) {
            $res['HealthJudgement'] = $this->healthJudgement;
        }
        if (null !== $this->healthTasks) {
            $res['HealthTasks'] = [];
            if (null !== $this->healthTasks && \is_array($this->healthTasks)) {
                $n = 0;
                foreach ($this->healthTasks as $item) {
                    $res['HealthTasks'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateCloudGtmAddressRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AcceptLanguage'])) {
            $model->acceptLanguage = $map['AcceptLanguage'];
        }
        if (isset($map['Address'])) {
            $model->address = $map['Address'];
        }
        if (isset($map['AttributeInfo'])) {
            $model->attributeInfo = $map['AttributeInfo'];
        }
        if (isset($map['AvailableMode'])) {
            $model->availableMode = $map['AvailableMode'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['EnableStatus'])) {
            $model->enableStatus = $map['EnableStatus'];
        }
        if (isset($map['HealthJudgement'])) {
            $model->healthJudgement = $map['HealthJudgement'];
        }
        if (isset($map['HealthTasks'])) {
            if (!empty($map['HealthTasks'])) {
                $model->healthTasks = [];
                $n                  = 0;
                foreach ($map['HealthTasks'] as $item) {
                    $model->healthTasks[$n++] = null !== $item ? healthTasks::fromMap($item) : $item;
                }
            }
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

        return $model;
    }
}
