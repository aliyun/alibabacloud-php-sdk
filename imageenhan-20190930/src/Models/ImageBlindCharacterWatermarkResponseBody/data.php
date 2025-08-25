<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imageenhan\V20190930\Models\ImageBlindCharacterWatermarkResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $textImageURL;

    /**
     * @var string
     */
    public $watermarkImageURL;
    protected $_name = [
        'textImageURL' => 'TextImageURL',
        'watermarkImageURL' => 'WatermarkImageURL',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->textImageURL) {
            $res['TextImageURL'] = $this->textImageURL;
        }

        if (null !== $this->watermarkImageURL) {
            $res['WatermarkImageURL'] = $this->watermarkImageURL;
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
        if (isset($map['TextImageURL'])) {
            $model->textImageURL = $map['TextImageURL'];
        }

        if (isset($map['WatermarkImageURL'])) {
            $model->watermarkImageURL = $map['WatermarkImageURL'];
        }

        return $model;
    }
}
