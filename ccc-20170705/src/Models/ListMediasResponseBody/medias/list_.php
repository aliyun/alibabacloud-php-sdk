<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20170705\Models\ListMediasResponseBody\medias;

use AlibabaCloud\SDK\CCC\V20170705\Models\ListMediasResponseBody\medias\list_\media;
use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->media) {
            $res['Media'] = [];
            if (null !== $this->media && \is_array($this->media)) {
                $n = 0;
                foreach ($this->media as $item) {
                    $res['Media'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return list_
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Media'])) {
            if (!empty($map['Media'])) {
                $model->media = [];
                $n            = 0;
                foreach ($map['Media'] as $item) {
                    $model->media[$n++] = null !== $item ? media::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
