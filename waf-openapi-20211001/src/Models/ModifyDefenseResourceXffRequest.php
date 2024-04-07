<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models;

use AlibabaCloud\Tea\Model;

class ModifyDefenseResourceXffRequest extends Model
{
    /**
     * @description The status of the tracking cookie.
     *
     *   **0**: disabled
     *   **1**: enabled. This is the default value.
     *
     * @example 0
     *
     * @var int
     */
    public $acwCookieStatus;

    /**
     * @description The status of the secure attribute of the tracking cookie.
     *
     *   **0**: disabled. This is the default value.
     *   **1**: enabled.
     *
     * @example 0
     *
     * @var int
     */
    public $acwSecureStatus;

    /**
     * @description The status of the secure attribute of the slider CAPTCHA cookie.
     *
     *   **0**: disabled. This is the default value.
     *   **1**: enabled.
     *
     * @example 0
     *
     * @var int
     */
    public $acwV3SecureStatus;

    /**
     * @description The custom header fields.
     *
     * >  The first IP address in the specified custom header field is used as the originating IP address of the client to prevent X-Forwarded-For forgery. If you specify multiple header fields, WAF reads the values of the header fields in sequence until the originating IP address is obtained. If the originating IP address cannot be obtained, the first IP address in the X-Forwarded-For header is used as the originating IP address of the client.
     * @var string[]
     */
    public $customHeaders;

    /**
     * @description The ID of the Web Application Firewall (WAF) instance.
     *
     * >  You can call the [DescribeInstance](~~433756~~) operation to query the ID of the WAF instance.
     * @example waf_v2_public_cn-wwo3c****07
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The region in which the WAF instance is deployed. Valid values:
     *
     *   **cn-hangzhou**: Chinese mainland.
     *   **ap-southeast-1**: outside the Chinese mainland.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The name of the protected object.
     *
     * @example alb-4pxu81fgagx3****mz-alb
     *
     * @var string
     */
    public $resource;

    /**
     * @description The ID of the Alibaba Cloud resource group.
     *
     * @example rg-acfm2kie2****wq
     *
     * @var string
     */
    public $resourceManagerResourceGroupId;

    /**
     * @description Specifies whether a Layer 7 proxy is deployed in front of WAF. Layer 7 proxies include Anti-DDoS Proxy and Alibaba Cloud CDN. Valid values:
     *
     *   **0**: No Layer 7 proxies are deployed. This is the default value.
     *   **1**: A Layer 7 proxy is deployed.
     *
     * @example 0
     *
     * @var int
     */
    public $xffStatus;
    protected $_name = [
        'acwCookieStatus'                => 'AcwCookieStatus',
        'acwSecureStatus'                => 'AcwSecureStatus',
        'acwV3SecureStatus'              => 'AcwV3SecureStatus',
        'customHeaders'                  => 'CustomHeaders',
        'instanceId'                     => 'InstanceId',
        'regionId'                       => 'RegionId',
        'resource'                       => 'Resource',
        'resourceManagerResourceGroupId' => 'ResourceManagerResourceGroupId',
        'xffStatus'                      => 'XffStatus',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->acwCookieStatus) {
            $res['AcwCookieStatus'] = $this->acwCookieStatus;
        }
        if (null !== $this->acwSecureStatus) {
            $res['AcwSecureStatus'] = $this->acwSecureStatus;
        }
        if (null !== $this->acwV3SecureStatus) {
            $res['AcwV3SecureStatus'] = $this->acwV3SecureStatus;
        }
        if (null !== $this->customHeaders) {
            $res['CustomHeaders'] = $this->customHeaders;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resource) {
            $res['Resource'] = $this->resource;
        }
        if (null !== $this->resourceManagerResourceGroupId) {
            $res['ResourceManagerResourceGroupId'] = $this->resourceManagerResourceGroupId;
        }
        if (null !== $this->xffStatus) {
            $res['XffStatus'] = $this->xffStatus;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyDefenseResourceXffRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AcwCookieStatus'])) {
            $model->acwCookieStatus = $map['AcwCookieStatus'];
        }
        if (isset($map['AcwSecureStatus'])) {
            $model->acwSecureStatus = $map['AcwSecureStatus'];
        }
        if (isset($map['AcwV3SecureStatus'])) {
            $model->acwV3SecureStatus = $map['AcwV3SecureStatus'];
        }
        if (isset($map['CustomHeaders'])) {
            if (!empty($map['CustomHeaders'])) {
                $model->customHeaders = $map['CustomHeaders'];
            }
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['Resource'])) {
            $model->resource = $map['Resource'];
        }
        if (isset($map['ResourceManagerResourceGroupId'])) {
            $model->resourceManagerResourceGroupId = $map['ResourceManagerResourceGroupId'];
        }
        if (isset($map['XffStatus'])) {
            $model->xffStatus = $map['XffStatus'];
        }

        return $model;
    }
}
