<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imageenhan\V20190930\Models\ImageBlindPicWatermarkResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $logoURL;

    /**
     * @var string
     */
    public $watermarkImageURL;
    protected $_name = [
        'logoURL'           => 'LogoURL',
        'watermarkImageURL' => 'WatermarkImageURL',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->logoURL) {
            $res['LogoURL'] = $this->logoURL;
        }
        if (null !== $this->watermarkImageURL) {
            $res['WatermarkImageURL'] = $this->watermarkImageURL;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LogoURL'])) {
            $model->logoURL = $map['LogoURL'];
        }
        if (isset($map['WatermarkImageURL'])) {
            $model->watermarkImageURL = $map['WatermarkImageURL'];
        }

        return $model;
    }
}
