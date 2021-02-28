<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Scdn\V20171115\Models\DescribeScdnDDoSTrafficInfoResponseBody;

use AlibabaCloud\Tea\Model;

class bpsTotals extends Model
{
    /**
     * @var string[]
     */
    public $bpsTotal;
    protected $_name = [
        'bpsTotal' => 'BpsTotal',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bpsTotal) {
            $res['BpsTotal'] = $this->bpsTotal;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return bpsTotals
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BpsTotal'])) {
            if (!empty($map['BpsTotal'])) {
                $model->bpsTotal = $map['BpsTotal'];
            }
        }

        return $model;
    }
}
