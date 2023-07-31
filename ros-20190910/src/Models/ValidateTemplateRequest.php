<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models;

use AlibabaCloud\Tea\Model;

class ValidateTemplateRequest extends Model
{
    /**
     * @description The regular resource types.
     *
     * @example 123e4567-e89b-12d3-a456-42665544****
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description The description of the output item.
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
     * @description The name of the output item.
     *
     * @example oss://ros/template/demo
     *
     * @var string
     */
    public $templateURL;

    /**
     * @var string[]
     */
    public $updateInfoOptions;

    /**
     * @description The DataSource resource types.
     *
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
