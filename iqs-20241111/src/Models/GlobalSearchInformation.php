<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IQS\V20241111\Models;

use AlibabaCloud\Dara\Model;

class GlobalSearchInformation extends Model
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
        'total' => 'total',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
