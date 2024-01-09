<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hdr\V20170925\Models\DescribeSitePairsResponseBody;

use AlibabaCloud\SDK\Hdr\V20170925\Models\DescribeSitePairsResponseBody\sitePairs\sitePair;
use AlibabaCloud\Tea\Model;

class sitePairs extends Model
{
    /**
     * @var sitePair[]
     */
    public $sitePair;
    protected $_name = [
        'sitePair' => 'sitePair',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->sitePair) {
            $res['sitePair'] = [];
            if (null !== $this->sitePair && \is_array($this->sitePair)) {
                $n = 0;
                foreach ($this->sitePair as $item) {
                    $res['sitePair'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return sitePairs
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['sitePair'])) {
            if (!empty($map['sitePair'])) {
                $model->sitePair = [];
                $n               = 0;
                foreach ($map['sitePair'] as $item) {
                    $model->sitePair[$n++] = null !== $item ? sitePair::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
