<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116\Models\DescribeSlowLogHistogramAsyncResponseBody\data\data\item;

use AlibabaCloud\Tea\Model;

class insItems extends Model
{
    /**
     * @var int[]
     */
    public $count;

    /**
     * @example 2492
     *
     * @var string
     */
    public $insId;

    /**
     * @example userAdmin
     *
     * @var string
     */
    public $insRole;
    protected $_name = [
        'count' => 'Count',
        'insId' => 'InsId',
        'insRole' => 'InsRole',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }
        if (null !== $this->insId) {
            $res['InsId'] = $this->insId;
        }
        if (null !== $this->insRole) {
            $res['InsRole'] = $this->insRole;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return insItems
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Count'])) {
            if (!empty($map['Count'])) {
                $model->count = $map['Count'];
            }
        }
        if (isset($map['InsId'])) {
            $model->insId = $map['InsId'];
        }
        if (isset($map['InsRole'])) {
            $model->insRole = $map['InsRole'];
        }

        return $model;
    }
}
