<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imarketing\V20220704\Models\ListAdvertisingResponseBody\result;

use AlibabaCloud\SDK\Imarketing\V20220704\Models\ListAdvertisingResponseBody\result\seatbid\bid;
use AlibabaCloud\Tea\Model;

class seatbid extends Model
{
    /**
     * @var bid[]
     */
    public $bid;
    protected $_name = [
        'bid' => 'Bid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bid) {
            $res['Bid'] = [];
            if (null !== $this->bid && \is_array($this->bid)) {
                $n = 0;
                foreach ($this->bid as $item) {
                    $res['Bid'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return seatbid
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Bid'])) {
            if (!empty($map['Bid'])) {
                $model->bid = [];
                $n          = 0;
                foreach ($map['Bid'] as $item) {
                    $model->bid[$n++] = null !== $item ? bid::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
