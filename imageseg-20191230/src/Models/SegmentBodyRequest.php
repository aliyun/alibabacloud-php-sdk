<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imageseg\V20191230\Models;

use AlibabaCloud\Tea\Model;

class SegmentBodyRequest extends Model
{
    /**
     * @var string
     */
    public $imageURL;

    /**
     * @var bool
     */
    public $async;

    /**
     * @var string
     */
    public $returnForm;
    protected $_name = [
        'imageURL'   => 'ImageURL',
        'async'      => 'Async',
        'returnForm' => 'ReturnForm',
    ];

    public function validate()
    {
        Model::validateRequired('imageURL', $this->imageURL, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->imageURL) {
            $res['ImageURL'] = $this->imageURL;
        }
        if (null !== $this->async) {
            $res['Async'] = $this->async;
        }
        if (null !== $this->returnForm) {
            $res['ReturnForm'] = $this->returnForm;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SegmentBodyRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ImageURL'])) {
            $model->imageURL = $map['ImageURL'];
        }
        if (isset($map['Async'])) {
            $model->async = $map['Async'];
        }
        if (isset($map['ReturnForm'])) {
            $model->returnForm = $map['ReturnForm'];
        }

        return $model;
    }
}
