<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cmn\V20200825\Models;

use AlibabaCloud\Tea\Model;

class ListDevicesShrinkRequest extends Model
{
    /**
     * @example true
     *
     * @var bool
     */
    public $calculateAmount;

    /**
     * @example form-u4ilnhu64h026lrf
     *
     * @var string
     */
    public $deviceFormId;

    /**
     * @example 网络设备
     *
     * @var string
     */
    public $deviceFormName;

    /**
     * @var string
     */
    public $deviceIdsShrink;

    /**
     * @example {"role":"ASW"}
     *
     * @var string
     */
    public $extAttributes;

    /**
     * @example space-ez6zd3w68ma4fsd4
     *
     * @var string
     */
    public $hostNameShrink;

    /**
     * @example cmn-cn-xxx
     *
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $ipShrink;

    /**
     * @example G1QH55J******
     *
     * @var string
     */
    public $keyword;

    /**
     * @var string
     */
    public $macShrink;

    /**
     * @example 10
     *
     * @var int
     */
    public $maxResults;

    /**
     * @var string
     */
    public $modelShrink;

    /**
     * @example 1
     *
     * @var string
     */
    public $nextToken;

    /**
     * @example space-ez6zd3w68ma4fsd4
     *
     * @var string
     */
    public $physicalSpaceId;

    /**
     * @var string
     */
    public $physicalSpaceIdsShrink;

    /**
     * @example AH01
     *
     * @var string
     */
    public $securityDomainShrink;

    /**
     * @var string
     */
    public $serviceStatusShrink;

    /**
     * @var string
     */
    public $snShrink;

    /**
     * @var string
     */
    public $vendorShrink;
    protected $_name = [
        'calculateAmount'        => 'CalculateAmount',
        'deviceFormId'           => 'DeviceFormId',
        'deviceFormName'         => 'DeviceFormName',
        'deviceIdsShrink'        => 'DeviceIds',
        'extAttributes'          => 'ExtAttributes',
        'hostNameShrink'         => 'HostName',
        'instanceId'             => 'InstanceId',
        'ipShrink'               => 'Ip',
        'keyword'                => 'Keyword',
        'macShrink'              => 'Mac',
        'maxResults'             => 'MaxResults',
        'modelShrink'            => 'Model',
        'nextToken'              => 'NextToken',
        'physicalSpaceId'        => 'PhysicalSpaceId',
        'physicalSpaceIdsShrink' => 'PhysicalSpaceIds',
        'securityDomainShrink'   => 'SecurityDomain',
        'serviceStatusShrink'    => 'ServiceStatus',
        'snShrink'               => 'Sn',
        'vendorShrink'           => 'Vendor',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->calculateAmount) {
            $res['CalculateAmount'] = $this->calculateAmount;
        }
        if (null !== $this->deviceFormId) {
            $res['DeviceFormId'] = $this->deviceFormId;
        }
        if (null !== $this->deviceFormName) {
            $res['DeviceFormName'] = $this->deviceFormName;
        }
        if (null !== $this->deviceIdsShrink) {
            $res['DeviceIds'] = $this->deviceIdsShrink;
        }
        if (null !== $this->extAttributes) {
            $res['ExtAttributes'] = $this->extAttributes;
        }
        if (null !== $this->hostNameShrink) {
            $res['HostName'] = $this->hostNameShrink;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->ipShrink) {
            $res['Ip'] = $this->ipShrink;
        }
        if (null !== $this->keyword) {
            $res['Keyword'] = $this->keyword;
        }
        if (null !== $this->macShrink) {
            $res['Mac'] = $this->macShrink;
        }
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->modelShrink) {
            $res['Model'] = $this->modelShrink;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->physicalSpaceId) {
            $res['PhysicalSpaceId'] = $this->physicalSpaceId;
        }
        if (null !== $this->physicalSpaceIdsShrink) {
            $res['PhysicalSpaceIds'] = $this->physicalSpaceIdsShrink;
        }
        if (null !== $this->securityDomainShrink) {
            $res['SecurityDomain'] = $this->securityDomainShrink;
        }
        if (null !== $this->serviceStatusShrink) {
            $res['ServiceStatus'] = $this->serviceStatusShrink;
        }
        if (null !== $this->snShrink) {
            $res['Sn'] = $this->snShrink;
        }
        if (null !== $this->vendorShrink) {
            $res['Vendor'] = $this->vendorShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListDevicesShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CalculateAmount'])) {
            $model->calculateAmount = $map['CalculateAmount'];
        }
        if (isset($map['DeviceFormId'])) {
            $model->deviceFormId = $map['DeviceFormId'];
        }
        if (isset($map['DeviceFormName'])) {
            $model->deviceFormName = $map['DeviceFormName'];
        }
        if (isset($map['DeviceIds'])) {
            $model->deviceIdsShrink = $map['DeviceIds'];
        }
        if (isset($map['ExtAttributes'])) {
            $model->extAttributes = $map['ExtAttributes'];
        }
        if (isset($map['HostName'])) {
            $model->hostNameShrink = $map['HostName'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Ip'])) {
            $model->ipShrink = $map['Ip'];
        }
        if (isset($map['Keyword'])) {
            $model->keyword = $map['Keyword'];
        }
        if (isset($map['Mac'])) {
            $model->macShrink = $map['Mac'];
        }
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['Model'])) {
            $model->modelShrink = $map['Model'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['PhysicalSpaceId'])) {
            $model->physicalSpaceId = $map['PhysicalSpaceId'];
        }
        if (isset($map['PhysicalSpaceIds'])) {
            $model->physicalSpaceIdsShrink = $map['PhysicalSpaceIds'];
        }
        if (isset($map['SecurityDomain'])) {
            $model->securityDomainShrink = $map['SecurityDomain'];
        }
        if (isset($map['ServiceStatus'])) {
            $model->serviceStatusShrink = $map['ServiceStatus'];
        }
        if (isset($map['Sn'])) {
            $model->snShrink = $map['Sn'];
        }
        if (isset($map['Vendor'])) {
            $model->vendorShrink = $map['Vendor'];
        }

        return $model;
    }
}
