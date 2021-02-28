<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Scdn\V20171115\Models\DescribeScdnDDoSTrafficInfoResponseBody;

use AlibabaCloud\Tea\Model;

class ppsTotals extends Model
{
    /**
     * @var string[]
     */
    public $ppsTotal;
    protected $_name = [
        'ppsTotal' => 'PpsTotal',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ppsTotal) {
            $res['PpsTotal'] = $this->ppsTotal;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ppsTotals
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PpsTotal'])) {
            if (!empty($map['PpsTotal'])) {
                $model->ppsTotal = $map['PpsTotal'];
            }
        }

        return $model;
    }
}
