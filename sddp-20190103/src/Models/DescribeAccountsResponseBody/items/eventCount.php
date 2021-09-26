<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sddp\V20190103\Models\DescribeAccountsResponseBody\items;

use AlibabaCloud\SDK\Sddp\V20190103\Models\DescribeAccountsResponseBody\items\eventCount\total;
use AlibabaCloud\Tea\Model;

class eventCount extends Model
{
    /**
     * @var total
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
            $res['Total'] = null !== $this->total ? $this->total->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return eventCount
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Total'])) {
            $model->total = total::fromMap($map['Total']);
        }

        return $model;
    }
}
