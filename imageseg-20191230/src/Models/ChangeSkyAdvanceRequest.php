<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imageseg\V20191230\Models;

use AlibabaCloud\Tea\Model;
use GuzzleHttp\Psr7\Stream;

class ChangeSkyAdvanceRequest extends Model
{
    /**
     * @var Stream
     */
    public $imageURLObject;

    /**
     * @var string
     */
    public $replaceImageURL;
    protected $_name = [
        'imageURLObject'  => 'ImageURLObject',
        'replaceImageURL' => 'ReplaceImageURL',
    ];

    public function validate()
    {
        Model::validateRequired('imageURLObject', $this->imageURLObject, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->imageURLObject) {
            $res['ImageURLObject'] = $this->imageURLObject;
        }
        if (null !== $this->replaceImageURL) {
            $res['ReplaceImageURL'] = $this->replaceImageURL;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ChangeSkyAdvanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ImageURLObject'])) {
            $model->imageURLObject = $map['ImageURLObject'];
        }
        if (isset($map['ReplaceImageURL'])) {
            $model->replaceImageURL = $map['ReplaceImageURL'];
        }

        return $model;
    }
}
