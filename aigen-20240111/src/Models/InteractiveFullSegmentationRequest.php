<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aigen\V20240111\Models;

use AlibabaCloud\Tea\Model;

class InteractiveFullSegmentationRequest extends Model
{
    /**
     * @example http://viapi-test.oss-cn-shanghai.aliyuncs.com/viapi-3.0domepic/aigen/xxx01.png
     *
     * @var string
     */
    public $imageUrl;

    /**
     * @example PNG
     *
     * @var string
     */
    public $returnFormat;
    protected $_name = [
        'imageUrl'     => 'ImageUrl',
        'returnFormat' => 'ReturnFormat',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->imageUrl) {
            $res['ImageUrl'] = $this->imageUrl;
        }
        if (null !== $this->returnFormat) {
            $res['ReturnFormat'] = $this->returnFormat;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return InteractiveFullSegmentationRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ImageUrl'])) {
            $model->imageUrl = $map['ImageUrl'];
        }
        if (isset($map['ReturnFormat'])) {
            $model->returnFormat = $map['ReturnFormat'];
        }

        return $model;
    }
}
