<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocr\V20191230\Models;

use AlibabaCloud\Tea\Model;

class RecognizeDriverLicenseRequest extends Model
{
    /**
     * @var int
     */
    public $imageType;

    /**
     * @var string
     */
    public $imageURL;

    /**
     * @var string
     */
    public $side;
    protected $_name = [
        'imageType' => 'ImageType',
        'imageURL'  => 'ImageURL',
        'side'      => 'Side',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->imageType) {
            $res['ImageType'] = $this->imageType;
        }
        if (null !== $this->imageURL) {
            $res['ImageURL'] = $this->imageURL;
        }
        if (null !== $this->side) {
            $res['Side'] = $this->side;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RecognizeDriverLicenseRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ImageType'])) {
            $model->imageType = $map['ImageType'];
        }
        if (isset($map['ImageURL'])) {
            $model->imageURL = $map['ImageURL'];
        }
        if (isset($map['Side'])) {
            $model->side = $map['Side'];
        }

        return $model;
    }
}
