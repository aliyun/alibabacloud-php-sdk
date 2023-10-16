<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Trademark\V20180724\Models\QueryTrademarkDetailByApplyNumberResponseBody\moudle;

use AlibabaCloud\SDK\Trademark\V20180724\Models\QueryTrademarkDetailByApplyNumberResponseBody\moudle\leafCodes\leafCode;
use AlibabaCloud\Tea\Model;

class leafCodes extends Model
{
    /**
     * @var leafCode[]
     */
    public $leafCode;
    protected $_name = [
        'leafCode' => 'leafCode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->leafCode) {
            $res['leafCode'] = [];
            if (null !== $this->leafCode && \is_array($this->leafCode)) {
                $n = 0;
                foreach ($this->leafCode as $item) {
                    $res['leafCode'][$n++] = null !== $item ? $item->toMap() : $item;
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
        if (isset($map['leafCode'])) {
            if (!empty($map['leafCode'])) {
                $model->leafCode = [];
                $n               = 0;
                foreach ($map['leafCode'] as $item) {
                    $model->leafCode[$n++] = null !== $item ? leafCode::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
