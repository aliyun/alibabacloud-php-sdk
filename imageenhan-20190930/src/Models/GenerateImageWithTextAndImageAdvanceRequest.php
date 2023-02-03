<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imageenhan\V20190930\Models;

use AlibabaCloud\Tea\Model;
use GuzzleHttp\Psr7\Stream;

class GenerateImageWithTextAndImageAdvanceRequest extends Model
{
    /**
     * @example center_crop
     *
     * @var string
     */
    public $aspectRatioMode;

    /**
     * @example 1
     *
     * @var int
     */
    public $number;

    /**
     * @example https://viapi-test.oss-cn-shanghai.aliyuncs.com/yxrtest/%E6%96%87%E7%94%9F%E5%9B%BE/%E7%9D%A1%E8%8E%B2.jpg"
     *
     * @var Stream
     */
    public $refImageUrlObject;

    /**
     * @example 1024*1024
     *
     * @var string
     */
    public $resolution;

    /**
     * @example 0.2
     *
     * @var float
     */
    public $similarity;

    /**
     * @var string
     */
    public $text;
    protected $_name = [
        'aspectRatioMode'   => 'AspectRatioMode',
        'number'            => 'Number',
        'refImageUrlObject' => 'RefImageUrl',
        'resolution'        => 'Resolution',
        'similarity'        => 'Similarity',
        'text'              => 'Text',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aspectRatioMode) {
            $res['AspectRatioMode'] = $this->aspectRatioMode;
        }
        if (null !== $this->number) {
            $res['Number'] = $this->number;
        }
        if (null !== $this->refImageUrlObject) {
            $res['RefImageUrl'] = $this->refImageUrlObject;
        }
        if (null !== $this->resolution) {
            $res['Resolution'] = $this->resolution;
        }
        if (null !== $this->similarity) {
            $res['Similarity'] = $this->similarity;
        }
        if (null !== $this->text) {
            $res['Text'] = $this->text;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GenerateImageWithTextAndImageAdvanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AspectRatioMode'])) {
            $model->aspectRatioMode = $map['AspectRatioMode'];
        }
        if (isset($map['Number'])) {
            $model->number = $map['Number'];
        }
        if (isset($map['RefImageUrl'])) {
            $model->refImageUrlObject = $map['RefImageUrl'];
        }
        if (isset($map['Resolution'])) {
            $model->resolution = $map['Resolution'];
        }
        if (isset($map['Similarity'])) {
            $model->similarity = $map['Similarity'];
        }
        if (isset($map['Text'])) {
            $model->text = $map['Text'];
        }

        return $model;
    }
}
