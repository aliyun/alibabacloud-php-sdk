<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Trademark\V20180724\Models\QueryTradeMarkApplicationsByIntentionResponseBody;

use AlibabaCloud\SDK\Trademark\V20180724\Models\QueryTradeMarkApplicationsByIntentionResponseBody\data\tmProduces;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var tmProduces[]
     */
    public $tmProduces;
    protected $_name = [
        'tmProduces' => 'TmProduces',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->tmProduces) {
            $res['TmProduces'] = [];
            if (null !== $this->tmProduces && \is_array($this->tmProduces)) {
                $n = 0;
                foreach ($this->tmProduces as $item) {
                    $res['TmProduces'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TmProduces'])) {
            if (!empty($map['TmProduces'])) {
                $model->tmProduces = [];
                $n                 = 0;
                foreach ($map['TmProduces'] as $item) {
                    $model->tmProduces[$n++] = null !== $item ? tmProduces::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
