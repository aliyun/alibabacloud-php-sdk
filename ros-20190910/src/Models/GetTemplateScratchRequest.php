<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models;

use AlibabaCloud\Tea\Model;

class GetTemplateScratchRequest extends Model
{
    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $showDataOption;

    /**
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
