<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imageenhan\V20190930\Models;

use AlibabaCloud\Tea\Model;
use GuzzleHttp\Psr7\Stream;

class IntelligentCompositionAdvanceRequest extends Model
{
    /**
     * @example http://viapi-test.oss-cn-shanghai.aliyuncs.com/viapi-3.0domepic/imageenhan/IntelligentComposition/IntelligentComposition3.jpg
     *
     * @var Stream
     */
    public $imageURLObject;

    /**
     * @example 5
     *
     * @var int
     */
    public $numBoxes;
    protected $_name = [
        'imageURLObject' => 'ImageURL',
        'numBoxes'       => 'NumBoxes',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->imageURLObject) {
            $res['ImageURL'] = $this->imageURLObject;
        }
        if (null !== $this->numBoxes) {
            $res['NumBoxes'] = $this->numBoxes;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return IntelligentCompositionAdvanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ImageURL'])) {
            $model->imageURLObject = $map['ImageURL'];
        }
        if (isset($map['NumBoxes'])) {
            $model->numBoxes = $map['NumBoxes'];
        }

        return $model;
    }
}
