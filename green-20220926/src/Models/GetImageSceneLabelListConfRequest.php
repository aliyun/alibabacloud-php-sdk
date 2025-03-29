<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20220926\Models;

use AlibabaCloud\Dara\Model;

class GetImageSceneLabelListConfRequest extends Model
{
    /**
     * @var string
     */
    public $imageServiceCode;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'imageServiceCode' => 'ImageServiceCode',
        'regionId' => 'RegionId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
