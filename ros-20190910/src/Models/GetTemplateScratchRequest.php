<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models;

use AlibabaCloud\Tea\Model;

class GetTemplateScratchRequest extends Model
{
    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @example Source
     *
     * @var string
     */
    public $showDataOption;

    /**
     * @example ts-7f7a704cf71c49a6****
     *
     * @var string
     */
    public $templateScratchId;
    protected $_name = [
        'regionId'          => 'RegionId',
        'showDataOption'    => 'ShowDataOption',
        'templateScratchId' => 'TemplateScratchId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->showDataOption) {
            $res['ShowDataOption'] = $this->showDataOption;
        }
        if (null !== $this->templateScratchId) {
            $res['TemplateScratchId'] = $this->templateScratchId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetTemplateScratchRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ShowDataOption'])) {
            $model->showDataOption = $map['ShowDataOption'];
        }
        if (isset($map['TemplateScratchId'])) {
            $model->templateScratchId = $map['TemplateScratchId'];
        }

        return $model;
    }
}
