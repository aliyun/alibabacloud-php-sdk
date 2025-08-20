<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imageseg\V20191230\Models;

use AlibabaCloud\Dara\Model;
use GuzzleHttp\Psr7\Stream;

class ChangeSkyAdvanceRequest extends Model
{
    /**
     * @var Stream
     */
    public $imageURLObject;

    /**
     * @var Stream
     */
    public $replaceImageURLObject;
    protected $_name = [
        'imageURLObject' => 'ImageURL',
        'replaceImageURLObject' => 'ReplaceImageURL',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->imageURLObject) {
            $res['ImageURL'] = $this->imageURLObject;
        }

        if (null !== $this->replaceImageURLObject) {
            $res['ReplaceImageURL'] = $this->replaceImageURLObject;
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
        if (isset($map['ImageURL'])) {
            $model->imageURLObject = $map['ImageURL'];
        }

        if (isset($map['ReplaceImageURL'])) {
            $model->replaceImageURLObject = $map['ReplaceImageURL'];
        }

        return $model;
    }
}
