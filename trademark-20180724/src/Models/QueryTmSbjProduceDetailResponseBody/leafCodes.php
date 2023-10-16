<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Trademark\V20180724\Models\QueryTmSbjProduceDetailResponseBody;

use AlibabaCloud\Tea\Model;

class leafCodes extends Model
{
    /**
     * @var \AlibabaCloud\SDK\Trademark\V20180724\Models\QueryTmSbjProduceDetailResponseBody\leafCodes\leafCodes[]
     */
    public $leafCodes;
    protected $_name = [
        'leafCodes' => 'LeafCodes',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->leafCodes) {
            $res['LeafCodes'] = [];
            if (null !== $this->leafCodes && \is_array($this->leafCodes)) {
                $n = 0;
                foreach ($this->leafCodes as $item) {
                    $res['LeafCodes'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return leafCodes
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LeafCodes'])) {
            if (!empty($map['LeafCodes'])) {
                $model->leafCodes = [];
                $n                = 0;
                foreach ($map['LeafCodes'] as $item) {
                    $model->leafCodes[$n++] = null !== $item ? \AlibabaCloud\SDK\Trademark\V20180724\Models\QueryTmSbjProduceDetailResponseBody\leafCodes\leafCodes::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
