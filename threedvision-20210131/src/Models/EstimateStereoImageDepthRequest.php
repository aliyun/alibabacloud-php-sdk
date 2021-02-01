<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Threedvision\V20210131\Models;

use AlibabaCloud\Tea\Model;

class EstimateStereoImageDepthRequest extends Model
{
    /**
     * @description A short description of struct
     *
     * @var string
     */
    public $leftImageURL;

    /**
     * @var string
     */
    public $rightImageURL;
    protected $_name = [
        'leftImageURL'  => 'LeftImageURL',
        'rightImageURL' => 'RightImageURL',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->leftImageURL) {
            $res['LeftImageURL'] = $this->leftImageURL;
        }
        if (null !== $this->rightImageURL) {
            $res['RightImageURL'] = $this->rightImageURL;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return EstimateStereoImageDepthRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LeftImageURL'])) {
            $model->leftImageURL = $map['LeftImageURL'];
        }
        if (isset($map['RightImageURL'])) {
            $model->rightImageURL = $map['RightImageURL'];
        }

        return $model;
    }
}
