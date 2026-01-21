<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Privatelink\V20200415\Models;

use AlibabaCloud\Dara\Model;

class UpdateVpcEndpointServiceAttributeRequest extends Model
{
    /**
     * @var string[]
     */
    public $addSupportedRegionSet;

    /**
     * @var string
     */
    public $addressIpVersion;

    /**
     * @var bool
     */
    public $autoAcceptEnabled;

    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var int
     */
    public $connectBandwidth;

    /**
     * @var string[]
     */
    public $deleteSupportedRegionSet;

    /**
     * @var bool
     */
    public $dryRun;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $serviceDescription;

    /**
     * @var string
     */
    public $serviceId;

    /**
     * @var bool
     */
    public $serviceSupportIPv6;

    /**
     * @var bool
     */
    public $zoneAffinityEnabled;
    protected $_name = [
        'addSupportedRegionSet' => 'AddSupportedRegionSet',
        'addressIpVersion' => 'AddressIpVersion',
        'autoAcceptEnabled' => 'AutoAcceptEnabled',
        'clientToken' => 'ClientToken',
        'connectBandwidth' => 'ConnectBandwidth',
        'deleteSupportedRegionSet' => 'DeleteSupportedRegionSet',
        'dryRun' => 'DryRun',
        'regionId' => 'RegionId',
        'serviceDescription' => 'ServiceDescription',
        'serviceId' => 'ServiceId',
        'serviceSupportIPv6' => 'ServiceSupportIPv6',
        'zoneAffinityEnabled' => 'ZoneAffinityEnabled',
    ];

    public function validate()
    {
        if (\is_array($this->addSupportedRegionSet)) {
            Model::validateArray($this->addSupportedRegionSet);
        }
        if (\is_array($this->deleteSupportedRegionSet)) {
            Model::validateArray($this->deleteSupportedRegionSet);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->addSupportedRegionSet) {
            if (\is_array($this->addSupportedRegionSet)) {
                $res['AddSupportedRegionSet'] = [];
                $n1 = 0;
                foreach ($this->addSupportedRegionSet as $item1) {
                    $res['AddSupportedRegionSet'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->addressIpVersion) {
            $res['AddressIpVersion'] = $this->addressIpVersion;
        }

        if (null !== $this->autoAcceptEnabled) {
            $res['AutoAcceptEnabled'] = $this->autoAcceptEnabled;
        }

        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }

        if (null !== $this->connectBandwidth) {
            $res['ConnectBandwidth'] = $this->connectBandwidth;
        }

        if (null !== $this->deleteSupportedRegionSet) {
            if (\is_array($this->deleteSupportedRegionSet)) {
                $res['DeleteSupportedRegionSet'] = [];
                $n1 = 0;
                foreach ($this->deleteSupportedRegionSet as $item1) {
                    $res['DeleteSupportedRegionSet'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->dryRun) {
            $res['DryRun'] = $this->dryRun;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->serviceDescription) {
            $res['ServiceDescription'] = $this->serviceDescription;
        }

        if (null !== $this->serviceId) {
            $res['ServiceId'] = $this->serviceId;
        }

        if (null !== $this->serviceSupportIPv6) {
            $res['ServiceSupportIPv6'] = $this->serviceSupportIPv6;
        }

        if (null !== $this->zoneAffinityEnabled) {
            $res['ZoneAffinityEnabled'] = $this->zoneAffinityEnabled;
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
        if (isset($map['AddSupportedRegionSet'])) {
            if (!empty($map['AddSupportedRegionSet'])) {
                $model->addSupportedRegionSet = [];
                $n1 = 0;
                foreach ($map['AddSupportedRegionSet'] as $item1) {
                    $model->addSupportedRegionSet[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['AddressIpVersion'])) {
            $model->addressIpVersion = $map['AddressIpVersion'];
        }

        if (isset($map['AutoAcceptEnabled'])) {
            $model->autoAcceptEnabled = $map['AutoAcceptEnabled'];
        }

        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }

        if (isset($map['ConnectBandwidth'])) {
            $model->connectBandwidth = $map['ConnectBandwidth'];
        }

        if (isset($map['DeleteSupportedRegionSet'])) {
            if (!empty($map['DeleteSupportedRegionSet'])) {
                $model->deleteSupportedRegionSet = [];
                $n1 = 0;
                foreach ($map['DeleteSupportedRegionSet'] as $item1) {
                    $model->deleteSupportedRegionSet[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['DryRun'])) {
            $model->dryRun = $map['DryRun'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['ServiceDescription'])) {
            $model->serviceDescription = $map['ServiceDescription'];
        }

        if (isset($map['ServiceId'])) {
            $model->serviceId = $map['ServiceId'];
        }

        if (isset($map['ServiceSupportIPv6'])) {
            $model->serviceSupportIPv6 = $map['ServiceSupportIPv6'];
        }

        if (isset($map['ZoneAffinityEnabled'])) {
            $model->zoneAffinityEnabled = $map['ZoneAffinityEnabled'];
        }

        return $model;
    }
}
