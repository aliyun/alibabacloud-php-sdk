<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imageenhan\V20190930\Models;

use AlibabaCloud\Dara\Model;
use GuzzleHttp\Psr7\Stream;

class GenerateImageWithTextAndImageAdvanceRequest extends Model
{
    /**
     * @var string
     */
    public $aspectRatioMode;

    /**
     * @var int
     */
    public $number;

    /**
     * @var Stream
     */
    public $refImageUrlObject;

    /**
     * @var string
     */
    public $resolution;

    /**
     * @var float
     */
    public $similarity;

    /**
     * @var string
     */
    public $text;
    protected $_name = [
        'aspectRatioMode' => 'AspectRatioMode',
        'number' => 'Number',
        'refImageUrlObject' => 'RefImageUrl',
        'resolution' => 'Resolution',
        'similarity' => 'Similarity',
        'text' => 'Text',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
