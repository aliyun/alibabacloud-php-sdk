<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models;

use AlibabaCloud\Dara\Model;

class GenerateTemplateByScratchRequest extends Model
{
    /**
     * @var string
     */
    public $provisionRegionId;
    /**
     * @var string
     */
    public $regionId;
    /**
     * @var string
     */
    public $templateScratchId;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
