<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aidge\V20260428\Models\VideoGenerationRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Aidge\V20260428\Models\VideoGenerationRequest\input\assetBindings;

class input extends Model
{
    /**
     * @var assetBindings[]
     */
    public $assetBindings;

    /**
     * @var mixed[]
     */
    public $extra;

    /**
     * @var string[]
     */
    public $images;

    /**
     * @var string
     */
    public $title;
    protected $_name = [
        'assetBindings' => 'AssetBindings',
        'extra' => 'Extra',
        'images' => 'Images',
        'title' => 'Title',
    ];

    public function validate()
    {
        if (\is_array($this->assetBindings)) {
            Model::validateArray($this->assetBindings);
        }
        if (\is_array($this->extra)) {
            Model::validateArray($this->extra);
        }
        if (\is_array($this->images)) {
            Model::validateArray($this->images);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->assetBindings) {
            if (\is_array($this->assetBindings)) {
                $res['AssetBindings'] = [];
                $n1 = 0;
                foreach ($this->assetBindings as $item1) {
                    $res['AssetBindings'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->extra) {
            if (\is_array($this->extra)) {
                $res['Extra'] = [];
                foreach ($this->extra as $key1 => $value1) {
                    $res['Extra'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->images) {
            if (\is_array($this->images)) {
                $res['Images'] = [];
                $n1 = 0;
                foreach ($this->images as $item1) {
                    $res['Images'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->title) {
            $res['Title'] = $this->title;
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
        if (isset($map['AssetBindings'])) {
            if (!empty($map['AssetBindings'])) {
                $model->assetBindings = [];
                $n1 = 0;
                foreach ($map['AssetBindings'] as $item1) {
                    $model->assetBindings[$n1] = assetBindings::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Extra'])) {
            if (!empty($map['Extra'])) {
                $model->extra = [];
                foreach ($map['Extra'] as $key1 => $value1) {
                    $model->extra[$key1] = $value1;
                }
            }
        }

        if (isset($map['Images'])) {
            if (!empty($map['Images'])) {
                $model->images = [];
                $n1 = 0;
                foreach ($map['Images'] as $item1) {
                    $model->images[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }

        return $model;
    }
}
