<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models;

use AlibabaCloud\Tea\Model;

class ValidateTemplateRequest extends Model
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
     * @description The ID of the region where the template resides. You can call the [DescribeRegions](~~131035~~) operation to query the most recent region list.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The structure that contains the template body. The template body must be 1 to 524,288 bytes in length.
     *
     * You can specify only one of the TemplateBody and TemplateURL parameters.
     * @example {"ROSTemplateFormatVersion":"2015-09-01"}
     *
     * @var string
     */
    public $templateBody;

    /**
     * @description The URL of the file that contains the template body. The URL must point to a template that is located on an HTTP or HTTPS web server or in an Object Storage Service (OSS) bucket, such as oss://ros/template/demo or oss://ros/template/demo?RegionId=cn-hangzhou. The template body can be up to 524,288 bytes in length.
     *
     * The URL can be up to 1,024 bytes in length.
     * @example oss://ros/template/demo
     *
     * @var string
     */
    public $templateURL;

    /**
     * @description Specifies whether to enable additional validation for the template. Default value: None. Valid values:
     *
     *   None: does not enable additional validation.
     *
     *   EnableTerraformValidation: runs the `terraform validate` command in the Terraform CLI to enable additional validation for a Terraform template.
     *
     *   EnableFastTerraformValidation: runs a command that is similar to the `terraform validate` command in the Terraform CLI to enable additional validation for a Terraform template.
     *
     **
     *
     **Note** Compared with the EnableTerraformValidation method, the EnableFastTerraformValidation method validates a template at a faster speed, but lower integrity level.
     *
     * @example None
     *
     * @var string
     */
    public $validationOption;
    protected $_name = [
        'clientToken'      => 'ClientToken',
        'regionId'         => 'RegionId',
        'templateBody'     => 'TemplateBody',
        'templateURL'      => 'TemplateURL',
        'validationOption' => 'ValidationOption',
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
        if (isset($map['ValidationOption'])) {
            $model->validationOption = $map['ValidationOption'];
        }

        return $model;
    }
}
