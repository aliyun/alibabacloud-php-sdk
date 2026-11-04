<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20170705\Models\ListMediasResponseBody\medias;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\CCC\V20170705\Models\ListMediasResponseBody\medias\list_\media;

class list_ extends Model
{
    /**
     * @var media[]
     */
    public $media;
    protected $_name = [
        'media' => 'Media',
    ];

    public function validate()
    {
        if (\is_array($this->media)) {
            Model::validateArray($this->media);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->media) {
            if (\is_array($this->media)) {
                $res['Media'] = [];
                $n1 = 0;
                foreach ($this->media as $item1) {
                    $res['Media'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Media'])) {
            if (!empty($map['Media'])) {
                $model->media = [];
                $n1 = 0;
                foreach ($map['Media'] as $item1) {
                    $model->media[$n1] = media::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
