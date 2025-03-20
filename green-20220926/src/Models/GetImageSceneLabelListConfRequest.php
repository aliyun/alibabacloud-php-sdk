<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20220926\Models;

use AlibabaCloud\Tea\Model;

class GetImageSceneLabelListConfRequest extends Model
{
    /**
     * @example baselineCheck
     *
     * @var string
     */
    public $imageServiceCode;

    /**
     * @example cn-shanghai
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'imageServiceCode' => 'ImageServiceCode',
        'regionId' => 'RegionId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->imageServiceCode) {
            $res['ImageServiceCode'] = $this->imageServiceCode;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetImageSceneLabelListConfRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ImageServiceCode'])) {
            $model->imageServiceCode = $map['ImageServiceCode'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
