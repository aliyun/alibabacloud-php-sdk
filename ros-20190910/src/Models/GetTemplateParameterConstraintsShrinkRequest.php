<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models;

use AlibabaCloud\SDK\ROS\V20190910\Models\GetTemplateParameterConstraintsShrinkRequest\parameters;
use AlibabaCloud\Tea\Model;

class GetTemplateParameterConstraintsShrinkRequest extends Model
{
    /**
     * @description The client token that is used to ensure the idempotence of the request.
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
     * @description The parameters whose values you want to query.
     *
     * @var string
     */
    public $parametersKeyFilterShrink;

    /**
     * @description The order in which associated parameters are arranged.
     *
     * >  By default, the order of the associated parameters specified in the `Metadata` section of the template is used.
     * @var string
     */
    public $parametersOrderShrink;

    /**
     * @description The region ID of the template.
     *
     * You can call the [DescribeRegions](~~131035~~) operation to query the most recent region list.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @example c754d2a4-28f1-46df-b557-9586173a****
     *
     * @var string
     */
    public $stackId;

    /**
     * @description The structure that contains the template body.
     *
     * >  You must specify only one of the following parameters: TemplateBody, TemplateURL, and TemplateId.
     * @example {"Parameters":{"ZoneInfo":{"Type": "String"},"InstanceType": {"Type": "String"}},"ROSTemplateFormatVersion": "2015-09-01","Resources":{"ECS":{"Properties":{"ZoneId":{"Ref": "ZoneInfo"},"InstanceType": {"Ref": "InstanceType"}},"Type": "ALIYUN::ECS::Instance"}}}
     *
     * @var string
     */
    public $templateBody;

    /**
     * @description The ID of the template. This parameter applies to shared and private templates.
     *
     * >  You must specify only one of the following parameters: TemplateBody, TemplateURL, and TemplateId.
     * @example 5ecd1e10-b0e9-4389-a565-e4c15efc****
     *
     * @var string
     */
    public $templateId;

    /**
     * @description The URL of the file that contains the template body. The URL must point to a template that is located on an HTTP or HTTPS web server or in an Object Storage Service (OSS) bucket, such as oss://ros/stack-policy/demo or oss://ros/stack-policy/demo?RegionId=cn-hangzhou. The template body can be up to 524,288 bytes in length. If you do not specify the region ID of the OSS bucket, the value of the RegionId parameter is used.
     *
     * >  You must specify only one of the following parameters: TemplateBody, TemplateURL, and TemplateId.
     * @example oss://ros-template/demo
     *
     * @var string
     */
    public $templateURL;

    /**
     * @description The version of the template. If you do not specify this parameter, the latest version is used.
     *
     * >  This parameter takes effect only if the TemplateId parameter is specified.
     * @example v1
     *
     * @var string
     */
    public $templateVersion;
    protected $_name = [
        'clientToken'               => 'ClientToken',
        'parameters'                => 'Parameters',
        'parametersKeyFilterShrink' => 'ParametersKeyFilter',
        'parametersOrderShrink'     => 'ParametersOrder',
        'regionId'                  => 'RegionId',
        'stackId'                   => 'StackId',
        'templateBody'              => 'TemplateBody',
        'templateId'                => 'TemplateId',
        'templateURL'               => 'TemplateURL',
        'templateVersion'           => 'TemplateVersion',
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
        if (null !== $this->parametersKeyFilterShrink) {
            $res['ParametersKeyFilter'] = $this->parametersKeyFilterShrink;
        }
        if (null !== $this->parametersOrderShrink) {
            $res['ParametersOrder'] = $this->parametersOrderShrink;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->stackId) {
            $res['StackId'] = $this->stackId;
        }
        if (null !== $this->templateBody) {
            $res['TemplateBody'] = $this->templateBody;
        }
        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
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
     * @return GetTemplateParameterConstraintsShrinkRequest
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
        if (isset($map['ParametersKeyFilter'])) {
            $model->parametersKeyFilterShrink = $map['ParametersKeyFilter'];
        }
        if (isset($map['ParametersOrder'])) {
            $model->parametersOrderShrink = $map['ParametersOrder'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['StackId'])) {
            $model->stackId = $map['StackId'];
        }
        if (isset($map['TemplateBody'])) {
            $model->templateBody = $map['TemplateBody'];
        }
        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
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
