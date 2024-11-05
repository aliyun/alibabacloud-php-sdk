<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IQS\V20241111\Models;

use AlibabaCloud\Tea\Model;

class SearchInformation extends Model
{
    /**
     * @var int
     */
    public $searchTime;

    /**
     * @var int
     */
    public $total;
    protected $_name = [
        'searchTime' => 'searchTime',
        'total'      => 'total',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->searchTime) {
            $res['searchTime'] = $this->searchTime;
        }
        if (null !== $this->total) {
            $res['total'] = $this->total;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SearchInformation
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['searchTime'])) {
            $model->searchTime = $map['searchTime'];
        }
        if (isset($map['total'])) {
            $model->total = $map['total'];
        }

        return $model;
    }
}
