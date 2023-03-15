<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models;

use AlibabaCloud\SDK\ROS\V20190910\Models\GetTemplateEstimateCostRequest\parameters;
use AlibabaCloud\Tea\Model;

class GetTemplateEstimateCostRequest extends Model
{
    /**
     * @description The client token that is used to ensure the idempotence of the request. You can use the client to generate the value, but you must make sure that the value is unique among different requests.
     *
     * For more information, see [Ensure idempotence](~~134212~~).
     * @example 123e4567-e89b-12d3-a456-42665544****
     *
     * @var string
     */
    public $clientToken;

    /**
     * @var parameters[]
     */
    public $parameters;

    /**
     * @description The region ID of the stack. You can call the [DescribeRegions](~~131035~~) operation to query the most recent region list.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The structure that contains the template body. The template body must be 1 to 524,288 bytes in length. If the length of the template body exceeds the upper limit, we recommend that you add parameters to the HTTP POST request body to prevent request failures caused by excessively long URLs.
     *
     * >  You must specify only one of the following parameters: TemplateBody, TemplateURL, TemplateId, and TemplateScratchId.
     * @example {"ROSTemplateFormatVersion": "2015-09-01", "Parameters": {"Isp": {"Type": "String"}, "Name": {"Type": "String"},"Netmode": {"Type": "String"}, "Bandwidth": {"Type": "Number", "Default": 5}}, "Resources": {"NewEip": {"Type": "ALIYUN::VPC::EIP","Properties": {"InstanceChargeType": "Prepaid", "PricingCycle": "Month",   "Isp": {"Ref": "Isp"}, "Period": 1, "DeletionProtection": false, "AutoPay": false, "Name": {"Ref": "Name"}, "InternetChargeType": "PayByTraffic", "Netmode": {   "Ref": "Netmode"},"Bandwidth": 5}}}}
     *
     * @var string
     */
    public $templateBody;

    /**
     * @description The ID of the template. This parameter applies to shared and private templates.
     *
     * >  You must specify only one of the following parameters: TemplateBody, TemplateURL, TemplateId, and TemplateScratchId.
     * @example 5ecd1e10-b0e9-4389-a565-e4c15efc****
     *
     * @var string
     */
    public $templateId;

    /**
     * @description The ID of the scenario.
     *
     * >  You must specify only one of the following parameters: TemplateBody, TemplateURL, TemplateId, and TemplateScratchId.
     * @example ts-aa9c62feab844a6b****
     *
     * @var string
     */
    public $templateScratchId;

    /**
     * @description The region ID of the scenario. The default value is the same as the value of the RegionId parameter.
     *
     * You can call the [DescribeRegions](~~131035~~) operation to query the most recent region list.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $templateScratchRegionId;

    /**
     * @description The URL of the file that contains the template body. The URL must point to a template that is located on an HTTP or HTTPS web server or in an Alibaba Cloud Object Storage Service (OSS) bucket, such as oss://ros/stack-policy/demo or oss://ros/stack-policy/demo?RegionId=cn-hangzhou. The template body can be up to 524,288 bytes in length. If you do not specify the region ID of the OSS bucket, the value of the RegionId parameter is used.
     *
     * >  You must specify only one of the following parameters: TemplateBody, TemplateURL, TemplateId, and TemplateScratchId.
     * @example oss://ros-template/demo
     *
     * @var string
     */
    public $templateURL;

    /**
     * @description The version of the template. This parameter takes effect only when the TemplateId parameter is specified.
     *
     * @example v1
     *
     * @var string
     */
    public $templateVersion;
    protected $_name = [
        'clientToken'             => 'ClientToken',
        'parameters'              => 'Parameters',
        'regionId'                => 'RegionId',
        'templateBody'            => 'TemplateBody',
        'templateId'              => 'TemplateId',
        'templateScratchId'       => 'TemplateScratchId',
        'templateScratchRegionId' => 'TemplateScratchRegionId',
        'templateURL'             => 'TemplateURL',
        'templateVersion'         => 'TemplateVersion',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->parameters) {
            $res['Parameters'] = [];
            if (null !== $this->parameters && \is_array($this->parameters)) {
                $n = 0;
                foreach ($this->parameters as $item) {
                    $res['Parameters'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->templateBody) {
            $res['TemplateBody'] = $this->templateBody;
        }
        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
        }
        if (null !== $this->templateScratchId) {
            $res['TemplateScratchId'] = $this->templateScratchId;
        }
        if (null !== $this->templateScratchRegionId) {
            $res['TemplateScratchRegionId'] = $this->templateScratchRegionId;
        }
        if (null !== $this->templateURL) {
            $res['TemplateURL'] = $this->templateURL;
        }
        if (null !== $this->templateVersion) {
            $res['TemplateVersion'] = $this->templateVersion;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetTemplateEstimateCostRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['Parameters'])) {
            if (!empty($map['Parameters'])) {
                $model->parameters = [];
                $n                 = 0;
                foreach ($map['Parameters'] as $item) {
                    $model->parameters[$n++] = null !== $item ? parameters::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['TemplateBody'])) {
            $model->templateBody = $map['TemplateBody'];
        }
        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }
        if (isset($map['TemplateScratchId'])) {
            $model->templateScratchId = $map['TemplateScratchId'];
        }
        if (isset($map['TemplateScratchRegionId'])) {
            $model->templateScratchRegionId = $map['TemplateScratchRegionId'];
        }
        if (isset($map['TemplateURL'])) {
            $model->templateURL = $map['TemplateURL'];
        }
        if (isset($map['TemplateVersion'])) {
            $model->templateVersion = $map['TemplateVersion'];
        }

        return $model;
    }
}
