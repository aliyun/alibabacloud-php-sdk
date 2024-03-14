<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sgw\V20180511\Models;

use AlibabaCloud\Tea\Model;

class CreateGatewayRequest extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @example Basic
     *
     * @var string
     */
    public $gatewayClass;

    /**
     * @example Cloud
     *
     * @var string
     */
    public $location;

    /**
     * @example alex***
     *
     * @var string
     */
    public $name;

    /**
     * @example true
     *
     * @var bool
     */
    public $postPaid;

    /**
     * @example 50
     *
     * @var int
     */
    public $publicNetworkBandwidth;

    /**
     * @example true
     *
     * @var bool
     */
    public $releaseAfterExpiration;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $resourceRegionId;

    /**
     * @var string
     */
    public $secondaryVSwitchId;

    /**
     * @var string
     */
    public $securityToken;

    /**
     * @example sb-0001b2otnkdxrigeq***
     *
     * @var string
     */
    public $storageBundleId;

    /**
     * @example File
     *
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $untrustedEnvId;

    /**
     * @var string
     */
    public $untrustedEnvInstanceType;

    /**
     * @example vsw-bp1krhkglx3nahkb9s***
     *
     * @var string
     */
    public $vSwitchId;
    protected $_name = [
        'description'              => 'Description',
        'gatewayClass'             => 'GatewayClass',
        'location'                 => 'Location',
        'name'                     => 'Name',
        'postPaid'                 => 'PostPaid',
        'publicNetworkBandwidth'   => 'PublicNetworkBandwidth',
        'releaseAfterExpiration'   => 'ReleaseAfterExpiration',
        'resourceRegionId'         => 'ResourceRegionId',
        'secondaryVSwitchId'       => 'SecondaryVSwitchId',
        'securityToken'            => 'SecurityToken',
        'storageBundleId'          => 'StorageBundleId',
        'type'                     => 'Type',
        'untrustedEnvId'           => 'UntrustedEnvId',
        'untrustedEnvInstanceType' => 'UntrustedEnvInstanceType',
        'vSwitchId'                => 'VSwitchId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->gatewayClass) {
            $res['GatewayClass'] = $this->gatewayClass;
        }
        if (null !== $this->location) {
            $res['Location'] = $this->location;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->postPaid) {
            $res['PostPaid'] = $this->postPaid;
        }
        if (null !== $this->publicNetworkBandwidth) {
            $res['PublicNetworkBandwidth'] = $this->publicNetworkBandwidth;
        }
        if (null !== $this->releaseAfterExpiration) {
            $res['ReleaseAfterExpiration'] = $this->releaseAfterExpiration;
        }
        if (null !== $this->resourceRegionId) {
            $res['ResourceRegionId'] = $this->resourceRegionId;
        }
        if (null !== $this->secondaryVSwitchId) {
            $res['SecondaryVSwitchId'] = $this->secondaryVSwitchId;
        }
        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
        }
        if (null !== $this->storageBundleId) {
            $res['StorageBundleId'] = $this->storageBundleId;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->untrustedEnvId) {
            $res['UntrustedEnvId'] = $this->untrustedEnvId;
        }
        if (null !== $this->untrustedEnvInstanceType) {
            $res['UntrustedEnvInstanceType'] = $this->untrustedEnvInstanceType;
        }
        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateGatewayRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['GatewayClass'])) {
            $model->gatewayClass = $map['GatewayClass'];
        }
        if (isset($map['Location'])) {
            $model->location = $map['Location'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['PostPaid'])) {
            $model->postPaid = $map['PostPaid'];
        }
        if (isset($map['PublicNetworkBandwidth'])) {
            $model->publicNetworkBandwidth = $map['PublicNetworkBandwidth'];
        }
        if (isset($map['ReleaseAfterExpiration'])) {
            $model->releaseAfterExpiration = $map['ReleaseAfterExpiration'];
        }
        if (isset($map['ResourceRegionId'])) {
            $model->resourceRegionId = $map['ResourceRegionId'];
        }
        if (isset($map['SecondaryVSwitchId'])) {
            $model->secondaryVSwitchId = $map['SecondaryVSwitchId'];
        }
        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }
        if (isset($map['StorageBundleId'])) {
            $model->storageBundleId = $map['StorageBundleId'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['UntrustedEnvId'])) {
            $model->untrustedEnvId = $map['UntrustedEnvId'];
        }
        if (isset($map['UntrustedEnvInstanceType'])) {
            $model->untrustedEnvInstanceType = $map['UntrustedEnvInstanceType'];
        }
        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }

        return $model;
    }
}
