<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveUpVideoAudioInfoResponseBody\upItems\publishItem;

use AlibabaCloud\Tea\Model;

class aacHeaders extends Model
{
    /**
     * @var aacHeaders\aacHeaders[]
     */
    public $aacHeaders;
    protected $_name = [
        'aacHeaders' => 'AacHeaders',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->aacHeaders) {
            $res['AacHeaders'] = [];
            if (null !== $this->aacHeaders && \is_array($this->aacHeaders)) {
                $n = 0;
                foreach ($this->aacHeaders as $item) {
                    $res['AacHeaders'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return aacHeaders
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AacHeaders'])) {
            if (!empty($map['AacHeaders'])) {
                $model->aacHeaders = [];
                $n = 0;
                foreach ($map['AacHeaders'] as $item) {
                    $model->aacHeaders[$n++] = null !== $item ? aacHeaders\aacHeaders::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
