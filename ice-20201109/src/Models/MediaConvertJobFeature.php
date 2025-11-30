<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ICE\V20201109\Models\MediaConvertJobFeature\clip;
use AlibabaCloud\SDK\ICE\V20201109\Models\MediaConvertJobFeature\watermarks;

class MediaConvertJobFeature extends Model
{
    /**
     * @var clip
     */
    public $clip;

    /**
     * @var string[]
     */
    public $metadata;

    /**
     * @var watermarks[]
     */
    public $watermarks;
    protected $_name = [
        'clip' => 'Clip',
        'metadata' => 'Metadata',
        'watermarks' => 'Watermarks',
    ];

    public function validate()
    {
        if (null !== $this->clip) {
            $this->clip->validate();
        }
        if (\is_array($this->metadata)) {
            Model::validateArray($this->metadata);
        }
        if (\is_array($this->watermarks)) {
            Model::validateArray($this->watermarks);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clip) {
            $res['Clip'] = null !== $this->clip ? $this->clip->toArray($noStream) : $this->clip;
        }

        if (null !== $this->metadata) {
            if (\is_array($this->metadata)) {
                $res['Metadata'] = [];
                foreach ($this->metadata as $key1 => $value1) {
                    $res['Metadata'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->watermarks) {
            if (\is_array($this->watermarks)) {
                $res['Watermarks'] = [];
                $n1 = 0;
                foreach ($this->watermarks as $item1) {
                    $res['Watermarks'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['Clip'])) {
            $model->clip = clip::fromMap($map['Clip']);
        }

        if (isset($map['Metadata'])) {
            if (!empty($map['Metadata'])) {
                $model->metadata = [];
                foreach ($map['Metadata'] as $key1 => $value1) {
                    $model->metadata[$key1] = $value1;
                }
            }
        }

        if (isset($map['Watermarks'])) {
            if (!empty($map['Watermarks'])) {
                $model->watermarks = [];
                $n1 = 0;
                foreach ($map['Watermarks'] as $item1) {
                    $model->watermarks[$n1] = watermarks::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
