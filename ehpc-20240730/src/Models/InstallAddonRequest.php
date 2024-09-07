<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20240730\Models;

use AlibabaCloud\Tea\Model;

class InstallAddonRequest extends Model
{
    /**
     * @description The addon name.
     *
     * This parameter is required.
     * @example Login
     *
     * @var string
     */
    public $addonName;

    /**
     * @description The addon version.
     *
     * This parameter is required.
     * @example 1.0
     *
     * @var string
     */
    public $addonVersion;

    /**
     * @description The cluster ID.
     *
     * This parameter is required.
     * @example ehpc-hz-FYUr32****
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description The resource configurations of the addon.
     *
     * This parameter is required.
     * @example `{"EipResource": {"AutoCreate": true}, "EcsResources": [{"InstanceType": "ecs.c7.xlarge", "ImageId": "centos_7_6_xxx.vhd", "SystemDisk": {"Category": "cloud_essd", "Size": 40, "Level": "PL0"}]}`
     *
     * @var string
     */
    public $resourcesSpec;

    /**
     * @description The service configurations of the addon.
     *
     * This parameter is required.
     * @example `[{"ServiceName": "SSH", "ServiceAccessType": null, "ServiceAccessUrl": null, "NetworkACL": [{"IpProtocol": "TCP", "Port": 22, "SourceCidrIp": "0.0.0.0/0"}]}, {"ServiceName": "VNC", "ServiceAccessType": null, "ServiceAccessUrl": null, "NetworkACL": [{"IpProtocol": "TCP", "Port": 12016, "SourceCidrIp": "0.0.0.0/0"}]}]`
     *
     * @var string
     */
    public $servicesSpec;
    protected $_name = [
        'addonName'     => 'AddonName',
        'addonVersion'  => 'AddonVersion',
        'clusterId'     => 'ClusterId',
        'resourcesSpec' => 'ResourcesSpec',
        'servicesSpec'  => 'ServicesSpec',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->addonName) {
            $res['AddonName'] = $this->addonName;
        }
        if (null !== $this->addonVersion) {
            $res['AddonVersion'] = $this->addonVersion;
        }
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->resourcesSpec) {
            $res['ResourcesSpec'] = $this->resourcesSpec;
        }
        if (null !== $this->servicesSpec) {
            $res['ServicesSpec'] = $this->servicesSpec;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return InstallAddonRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AddonName'])) {
            $model->addonName = $map['AddonName'];
        }
        if (isset($map['AddonVersion'])) {
            $model->addonVersion = $map['AddonVersion'];
        }
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['ResourcesSpec'])) {
            $model->resourcesSpec = $map['ResourcesSpec'];
        }
        if (isset($map['ServicesSpec'])) {
            $model->servicesSpec = $map['ServicesSpec'];
        }

        return $model;
    }
}
