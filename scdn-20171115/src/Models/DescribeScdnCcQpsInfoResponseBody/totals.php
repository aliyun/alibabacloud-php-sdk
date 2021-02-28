<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Scdn\V20171115\Models\DescribeScdnCcQpsInfoResponseBody;

use AlibabaCloud\Tea\Model;

class totals extends Model
{
    /**
     * @var string[]
     */
    public $total;
    protected $_name = [
        'total' => 'Total',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->total) {
            $res['Total'] = $this->total;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return totals
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Total'])) {
            if (!empty($map['Total'])) {
                $model->total = $map['Total'];
            }
        }

        return $model;
    }
}
