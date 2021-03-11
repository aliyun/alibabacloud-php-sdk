<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Facebody\V20191230\Models;

use AlibabaCloud\Tea\Model;

class VerifyFaceMaskRequest extends Model
{
    /**
     * @var string
     */
    public $imageURL;

    /**
     * @var string
     */
    public $refUrl;

    /**
     * @var int[]
     */
    public $imageData;

    /**
     * @var int[]
     */
    public $refData;
    protected $_name = [
        'imageURL'  => 'ImageURL',
        'refUrl'    => 'RefUrl',
        'imageData' => 'ImageData',
        'refData'   => 'RefData',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->imageURL) {
            $res['ImageURL'] = $this->imageURL;
        }
        if (null !== $this->refUrl) {
            $res['RefUrl'] = $this->refUrl;
        }
        if (null !== $this->imageData) {
            $res['ImageData'] = $this->imageData;
        }
        if (null !== $this->refData) {
            $res['RefData'] = $this->refData;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return VerifyFaceMaskRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ImageURL'])) {
            $model->imageURL = $map['ImageURL'];
        }
        if (isset($map['RefUrl'])) {
            $model->refUrl = $map['RefUrl'];
        }
        if (isset($map['ImageData'])) {
            $model->imageData = $map['ImageData'];
        }
        if (isset($map['RefData'])) {
            $model->refData = $map['RefData'];
        }

        return $model;
    }
}
