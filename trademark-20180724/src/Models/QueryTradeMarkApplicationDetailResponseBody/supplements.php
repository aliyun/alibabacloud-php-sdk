<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Trademark\V20180724\Models\QueryTradeMarkApplicationDetailResponseBody;

use AlibabaCloud\Tea\Model;

class supplements extends Model
{
    /**
     * @var \AlibabaCloud\SDK\Trademark\V20180724\Models\QueryTradeMarkApplicationDetailResponseBody\supplements\supplements[]
     */
    public $supplements;
    protected $_name = [
        'supplements' => 'Supplements',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->supplements) {
            $res['Supplements'] = [];
            if (null !== $this->supplements && \is_array($this->supplements)) {
                $n = 0;
                foreach ($this->supplements as $item) {
                    $res['Supplements'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return supplements
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Supplements'])) {
            if (!empty($map['Supplements'])) {
                $model->supplements = [];
                $n                  = 0;
                foreach ($map['Supplements'] as $item) {
                    $model->supplements[$n++] = null !== $item ? \AlibabaCloud\SDK\Trademark\V20180724\Models\QueryTradeMarkApplicationDetailResponseBody\supplements\supplements::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
