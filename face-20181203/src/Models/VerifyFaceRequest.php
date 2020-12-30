<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Face\V20181203\Models;

use AlibabaCloud\Tea\Model;

class VerifyFaceRequest extends Model
{
    /**
     * @var string
     */
    public $imageUrl1;

    /**
     * @var string
     */
    public $imageUrl2;

    /**
     * @var string
     */
    public $content1;

    /**
     * @var string
     */
    public $content2;
    protected $_name = [
        'imageUrl1' => 'ImageUrl1',
        'imageUrl2' => 'ImageUrl2',
        'content1'  => 'Content1',
        'content2'  => 'Content2',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->imageUrl1) {
            $res['ImageUrl1'] = $this->imageUrl1;
        }
        if (null !== $this->imageUrl2) {
            $res['ImageUrl2'] = $this->imageUrl2;
        }
        if (null !== $this->content1) {
            $res['Content1'] = $this->content1;
        }
        if (null !== $this->content2) {
            $res['Content2'] = $this->content2;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return VerifyFaceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ImageUrl1'])) {
            $model->imageUrl1 = $map['ImageUrl1'];
        }
        if (isset($map['ImageUrl2'])) {
            $model->imageUrl2 = $map['ImageUrl2'];
        }
        if (isset($map['Content1'])) {
            $model->content1 = $map['Content1'];
        }
        if (isset($map['Content2'])) {
            $model->content2 = $map['Content2'];
        }

        return $model;
    }
}
