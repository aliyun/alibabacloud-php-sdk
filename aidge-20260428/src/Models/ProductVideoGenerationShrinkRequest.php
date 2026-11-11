<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aidge\V20260428\Models;

use AlibabaCloud\Dara\Model;

class ProductVideoGenerationShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $aspectRatio;

    /**
     * @var int
     */
    public $duration;

    /**
     * @var string
     */
    public $productImagesShrink;

    /**
     * @var string
     */
    public $productTitle;

    /**
     * @var string
     */
    public $resolution;

    /**
     * @var string
     */
    public $script;
    protected $_name = [
        'aspectRatio' => 'aspect_ratio',
        'duration' => 'duration',
        'productImagesShrink' => 'product_images',
        'productTitle' => 'product_title',
        'resolution' => 'resolution',
        'script' => 'script',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->aspectRatio) {
            $res['aspect_ratio'] = $this->aspectRatio;
        }

        if (null !== $this->duration) {
            $res['duration'] = $this->duration;
        }

        if (null !== $this->productImagesShrink) {
            $res['product_images'] = $this->productImagesShrink;
        }

        if (null !== $this->productTitle) {
            $res['product_title'] = $this->productTitle;
        }

        if (null !== $this->resolution) {
            $res['resolution'] = $this->resolution;
        }

        if (null !== $this->script) {
            $res['script'] = $this->script;
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
        if (isset($map['aspect_ratio'])) {
            $model->aspectRatio = $map['aspect_ratio'];
        }

        if (isset($map['duration'])) {
            $model->duration = $map['duration'];
        }

        if (isset($map['product_images'])) {
            $model->productImagesShrink = $map['product_images'];
        }

        if (isset($map['product_title'])) {
            $model->productTitle = $map['product_title'];
        }

        if (isset($map['resolution'])) {
            $model->resolution = $map['resolution'];
        }

        if (isset($map['script'])) {
            $model->script = $map['script'];
        }

        return $model;
    }
}
