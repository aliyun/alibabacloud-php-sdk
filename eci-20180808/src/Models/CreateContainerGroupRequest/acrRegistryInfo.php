<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eci\V20180808\Models\CreateContainerGroupRequest;

use AlibabaCloud\Tea\Model;

class acrRegistryInfo extends Model
{
    /**
     * @description The Alibaba Cloud Resource Name (ARN) of the RAM role in the Alibaba Cloud account to which the elastic container instance belongs.
     *
     * @example acs:ram::1609982529******:role/role-assume
     *
     * @var string
     */
    public $arnService;

    /**
     * @description The ARN of the RAM role in the Alibaba Cloud account to which the Container Registry Enterprise Edition instance belongs.
     *
     * @example acs:ram::1298452580******:role/role-acr
     *
     * @var string
     */
    public $arnUser;

    /**
     * @description The domain names of the Container Registry Enterprise Edition instance. By default, all domain names of the instance are displayed. You can specify multiple domain names. Separate multiple domain names with commas (,).
     *
     * @example *****-****-registry.cn-beijing.cr.aliyuncs.com
     *
     * @var string[]
     */
    public $domain;

    /**
     * @description The ID of the Container Registry Enterprise Edition instance.
     *
     * @example cri-nwj395hgf6f3****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The name of the Container Registry Enterprise Edition instance.
     *
     * @example acr-test
     *
     * @var string
     */
    public $instanceName;

    /**
     * @description The region ID of the Container Registry Enterprise Edition instance.
     *
     * @example cn-beijing
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'arnService'   => 'ArnService',
        'arnUser'      => 'ArnUser',
        'domain'       => 'Domain',
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
        if (null !== $this->arnService) {
            $res['ArnService'] = $this->arnService;
        }
        if (null !== $this->arnUser) {
            $res['ArnUser'] = $this->arnUser;
        }
        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
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
     * @return acrRegistryInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ArnService'])) {
            $model->arnService = $map['ArnService'];
        }
        if (isset($map['ArnUser'])) {
            $model->arnUser = $map['ArnUser'];
        }
        if (isset($map['Domain'])) {
            if (!empty($map['Domain'])) {
                $model->domain = $map['Domain'];
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
