<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Dara\Model;

class QueryHistoryActiveUserCountRequest extends Model
{
    /**
     * @var string
     */
    public $dataDate;
    protected $_name = [
        'dataDate' => 'DataDate',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dataDate) {
            $res['DataDate'] = $this->dataDate;
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
        if (isset($map['DataDate'])) {
            $model->dataDate = $map['DataDate'];
        }

        return $model;
    }
}
