<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models;

use AlibabaCloud\Tea\Model;

class ValidateTemplateRequest extends Model
{
    /**
     * @description The client token that is used to ensure the idempotence of the request. You can use the client to generate the token, but you must make sure that the token is unique among different requests.
     *
     * For more information, see [Ensure idempotence](https://help.aliyun.com/document_detail/134212.html).
     * @example 123e4567-e89b-12d3-a456-42665544****
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description The region ID of the template. You can call the [DescribeRegions](https://help.aliyun.com/document_detail/131035.html) operation to query the most recent region list.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $templateBody;

    /**
     * @description The URL of the file that contains the template body. The URL must point to a template that is located on an HTTP web server or in an Object Storage Service (OSS) bucket, such as oss://ros/template/demo or oss://ros/template/demo?RegionId=cn-hangzhou. The template body can be up to 524,288 bytes in length.
     *
     * You can specify one of TemplateBody and TemplateURL, but not both of them. The URL can be up to 1,024 bytes in length.\\
     * @example oss://ros/template/demo
     *
     * @var string
     */
    public $templateURL;

    /**
     * @description The options that are used to control the generation of information about the stack update. You can specify up to two options.
     *
     * @var string[]
     */
    public $updateInfoOptions;

    /**
     * @description Specifies whether to enable additional validation for the template. Valid values:
     *
     *   None (default): does not enable additional validation.
     *   EnableTerraformValidation: runs the `terraform validate` command in the Terraform CLI to enable additional validation for a Terraform template.
     *   EnableFastTerraformValidation: runs a command that is similar to the `terraform validate` command in the Terraform CLI to enable additional validation for a Terraform template.
     *
     * > Compared with the EnableTerraformValidation method, the EnableFastTerraformValidation method validates a template at a faster speed but a lower integrity level.
     * @example None
     *
     * @var string
     */
    public $validationOption;
    protected $_name = [
        'clientToken'       => 'ClientToken',
        'regionId'          => 'RegionId',
        'templateBody'      => 'TemplateBody',
        'templateURL'       => 'TemplateURL',
        'updateInfoOptions' => 'UpdateInfoOptions',
        'validationOption'  => 'ValidationOption',
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
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->templateBody) {
            $res['TemplateBody'] = $this->templateBody;
        }
        if (null !== $this->templateURL) {
            $res['TemplateURL'] = $this->templateURL;
        }
        if (null !== $this->updateInfoOptions) {
            $res['UpdateInfoOptions'] = $this->updateInfoOptions;
        }
        if (null !== $this->validationOption) {
            $res['ValidationOption'] = $this->validationOption;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ValidateTemplateRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['TemplateBody'])) {
            $model->templateBody = $map['TemplateBody'];
        }
        if (isset($map['TemplateURL'])) {
            $model->templateURL = $map['TemplateURL'];
        }
        if (isset($map['UpdateInfoOptions'])) {
            if (!empty($map['UpdateInfoOptions'])) {
                $model->updateInfoOptions = $map['UpdateInfoOptions'];
            }
        }
        if (isset($map['ValidationOption'])) {
            $model->validationOption = $map['ValidationOption'];
        }

        return $model;
    }
}
