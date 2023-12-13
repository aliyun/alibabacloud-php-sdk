<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eci\V20180808\Models\UpdateImageCacheRequest;

use AlibabaCloud\Tea\Model;

class acrRegistryInfo extends Model
{
    /**
     * @description The domain names of the Container Registry Enterprise Edition instance. By default, all domain names of the instance are displayed. You can specify multiple domain names. Separate multiple domain names with commas (,).
     *
     * @example test****-registry.cn-hangzhou.cr.aliyuncs.com
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
     * @example test****
     *
     * @var string
     */
    public $instanceName;

    /**
     * @description The region ID of the Container Registry Enterprise Edition instance.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
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
