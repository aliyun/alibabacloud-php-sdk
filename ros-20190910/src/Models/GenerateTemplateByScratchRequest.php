<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models;

use AlibabaCloud\Tea\Model;

class GenerateTemplateByScratchRequest extends Model
{
    /**
     * @description The region ID of the new node.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $provisionRegionId;

    /**
     * @description The region ID of the resource scenario.
     *
     * This parameter is required.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the resource scenario.
     *
     * This parameter is required.
     * @example ts-aa9c62feab844a6b****
     *
     * @var string
     */
    public $templateScratchId;

    /**
     * @description The type of the template that Resource Orchestration Service (ROS) generates. ROS can generate templates of the ROS and Terraform types. Default value: ROS.
     *
     * @example ROS
     *
     * @var string
     */
    public $templateType;
    protected $_name = [
        'provisionRegionId' => 'ProvisionRegionId',
        'regionId'          => 'RegionId',
        'templateScratchId' => 'TemplateScratchId',
        'templateType'      => 'TemplateType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->provisionRegionId) {
            $res['ProvisionRegionId'] = $this->provisionRegionId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->templateScratchId) {
            $res['TemplateScratchId'] = $this->templateScratchId;
        }
        if (null !== $this->templateType) {
            $res['TemplateType'] = $this->templateType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GenerateTemplateByScratchRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ProvisionRegionId'])) {
            $model->provisionRegionId = $map['ProvisionRegionId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['TemplateScratchId'])) {
            $model->templateScratchId = $map['TemplateScratchId'];
        }
        if (isset($map['TemplateType'])) {
            $model->templateType = $map['TemplateType'];
        }

        return $model;
    }
}
