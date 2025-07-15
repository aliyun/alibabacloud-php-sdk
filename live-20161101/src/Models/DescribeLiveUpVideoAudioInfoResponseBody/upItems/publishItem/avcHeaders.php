<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveUpVideoAudioInfoResponseBody\upItems\publishItem;

use AlibabaCloud\Tea\Model;

class avcHeaders extends Model
{
    /**
     * @var avcHeaders\avcHeaders[]
     */
    public $avcHeaders;
    protected $_name = [
        'avcHeaders' => 'AvcHeaders',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->avcHeaders) {
            $res['AvcHeaders'] = [];
            if (null !== $this->avcHeaders && \is_array($this->avcHeaders)) {
                $n = 0;
                foreach ($this->avcHeaders as $item) {
                    $res['AvcHeaders'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return avcHeaders
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AvcHeaders'])) {
            if (!empty($map['AvcHeaders'])) {
                $model->avcHeaders = [];
                $n = 0;
                foreach ($map['AvcHeaders'] as $item) {
                    $model->avcHeaders[$n++] = null !== $item ? avcHeaders\avcHeaders::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
