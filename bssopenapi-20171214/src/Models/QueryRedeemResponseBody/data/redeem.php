<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryRedeemResponseBody\data;

use AlibabaCloud\Tea\Model;

class redeem extends Model
{
    /**
     * @var \AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryRedeemResponseBody\data\redeem\redeem[]
     */
    public $redeem;
    protected $_name = [
        'redeem' => 'Redeem',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->redeem) {
            $res['Redeem'] = [];
            if (null !== $this->redeem && \is_array($this->redeem)) {
                $n = 0;
                foreach ($this->redeem as $item) {
                    $res['Redeem'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return redeem
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Redeem'])) {
            if (!empty($map['Redeem'])) {
                $model->redeem = [];
                $n             = 0;
                foreach ($map['Redeem'] as $item) {
                    $model->redeem[$n++] = null !== $item ? \AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryRedeemResponseBody\data\redeem\redeem::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
