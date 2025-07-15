<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oos\V20190601\Models;

use AlibabaCloud\Tea\Model;

class GetTemplateParameterConstraintsRequest extends Model
{
    /**
     * @description The information about the parameters.
     *
     * @example {\\"endDate\\": \\"2022-04-13T03:31:20Z\\", \\"Status\\": \\"Stopped\\"}
     *
     * @var string
     */
    public $parameters;

    /**
     * @description The region ID.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The content of the template in the JSON or YAML format. This parameter is the same as the Content parameter that you can specify when you call the CreateTemplate operation. You can use this parameter to specify the tasks that you want to run. This way, you do not need to create a template before you start an execution. If you select an existing template, you do not need to specify this parameter.
     *
     * @example {
     * "Description": "Example template, describe instances in some status",
     * "FormatVersion": "OOS-2019-06-01",
     * "Parameters": {},
     * "Tasks": [{
     * "Name": "describeInstances",
     * "Action": "ACS::ExecuteAPI",
     * "Description": "desc-en",
     * "Properties": {
     * "Service": "ECS",
     * "API": "DescribeInstances",
     * "Parameters": {
     * "Status": "Running"
     * }
     * }
     * }]
     * }
     *
     * @var string
     */
    public $templateContent;

    /**
     * @description The name of the template.
     *
     * @example MyTemplate
     *
     * @var string
     */
    public $templateName;

    /**
     * @description The URL that is used to store the content of the Operation Orchestration Service (OOS) template in the Alibaba Cloud Object Storage Service (OSS). Only the public-read URL is supported. You can use this parameter to specify the tasks that you want to run. This way, you do not need to create a template before you start an execution. If you select an existing template, you do not need to specify this parameter.
     *
     * @example http://oos-template.cn-hangzhou.oss.aliyun-inc.com/oos-test-template.json
     *
     * @var string
     */
    public $templateURL;

    /**
     * @description The version of the template. The default value is the latest version of the template.
     *
     * @example v1
     *
     * @var string
     */
    public $templateVersion;
    protected $_name = [
        'parameters' => 'Parameters',
        'regionId' => 'RegionId',
        'templateContent' => 'TemplateContent',
        'templateName' => 'TemplateName',
        'templateURL' => 'TemplateURL',
        'templateVersion' => 'TemplateVersion',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->parameters) {
            $res['Parameters'] = $this->parameters;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->templateContent) {
            $res['TemplateContent'] = $this->templateContent;
        }
        if (null !== $this->templateName) {
            $res['TemplateName'] = $this->templateName;
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
     * @return GetTemplateParameterConstraintsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Parameters'])) {
            $model->parameters = $map['Parameters'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['TemplateContent'])) {
            $model->templateContent = $map['TemplateContent'];
        }
        if (isset($map['TemplateName'])) {
            $model->templateName = $map['TemplateName'];
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
