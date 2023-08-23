<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20220222\Models\DescribeEciScalingConfigurationsResponseBody\scalingConfigurations;

use AlibabaCloud\Tea\Model;

class acrRegistryInfos extends Model
{
    /**
     * @description The IP addresses of the DNS servers.
     *
     * @var string[]
     */
    public $domains;

    /**
     * @description The region ID of the Container Registry Enterprise Edition instance.
     *
     * @example cri-nwj395hgf6f3****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The domain name of the Container Registry Enterprise Edition instance. By default, all domain names of the Container Registry Enterprise Edition instance are displayed. You can specify one or more domain names. Separate multiple domain names with commas (,).
     *
     * @example acr-test
     *
     * @var string
     */
    public $instanceName;

    /**
     * @description The domain name of the Container Registry Enterprise Edition instance. By default, all domain names of the Container Registry Enterprise Edition instance are displayed. You can specify one or more domain names. Separate multiple domain names with commas (,).
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'domains'      => 'Domains',
        'instanceId'   => 'InstanceId',
        'instanceName' => 'InstanceName',
        'regionId'     => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->domains) {
            $res['Domains'] = $this->domains;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return acrRegistryInfos
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Domains'])) {
            if (!empty($map['Domains'])) {
                $model->domains = $map['Domains'];
            }
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
