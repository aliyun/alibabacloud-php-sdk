<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Tea\Model;

class InstallCmsExporterRequest extends Model
{
    /**
     * @description The ID of the cluster.
     *
     * This parameter is required.
     * @example cc7a37ee31aea4ed1a059eff8034b****
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description The cloud services that you want to monitor. The CmsArgs parameter is the startup parameter of the cms-exporter collector. Separate multiple cloud services with number signs (`#`).
     *
     * @example hologres#cen
     *
     * @var string
     */
    public $cmsArgs;

    /**
     * @description The recently monitored cloud services. Separate multiple cloud services with number signs (`#`).
     *
     * @example hologres#cen
     *
     * @var string
     */
    public $directArgs;

    /**
     * @description Specifies whether to collect the aliyun tags attached to each cloud service. Default value: false.
     *
     * @example false
     *
     * @var bool
     */
    public $enableTag;

    /**
     * @description The ID of the region.
     *
     * This parameter is required.
     * @example cn-beijing
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'clusterId'  => 'ClusterId',
        'cmsArgs'    => 'CmsArgs',
        'directArgs' => 'DirectArgs',
        'enableTag'  => 'EnableTag',
        'regionId'   => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->cmsArgs) {
            $res['CmsArgs'] = $this->cmsArgs;
        }
        if (null !== $this->directArgs) {
            $res['DirectArgs'] = $this->directArgs;
        }
        if (null !== $this->enableTag) {
            $res['EnableTag'] = $this->enableTag;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return InstallCmsExporterRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['CmsArgs'])) {
            $model->cmsArgs = $map['CmsArgs'];
        }
        if (isset($map['DirectArgs'])) {
            $model->directArgs = $map['DirectArgs'];
        }
        if (isset($map['EnableTag'])) {
            $model->enableTag = $map['EnableTag'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
