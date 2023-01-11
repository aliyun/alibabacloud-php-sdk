<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models;

use AlibabaCloud\Tea\Model;

class GenerateTemplateByScratchRequest extends Model
{
    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $provisionRegionId;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @example ts-aa9c62feab844a6b****
     *
     * @var string
     */
    public $templateScratchId;
    protected $_name = [
        'provisionRegionId' => 'ProvisionRegionId',
        'regionId'          => 'RegionId',
        'templateScratchId' => 'TemplateScratchId',
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

        return $model;
    }
}
