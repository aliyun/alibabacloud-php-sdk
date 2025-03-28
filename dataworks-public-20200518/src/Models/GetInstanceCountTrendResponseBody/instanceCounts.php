<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetInstanceCountTrendResponseBody;

use AlibabaCloud\Dara\Model;

class instanceCounts extends Model
{
    /**
     * @var int
     */
    public $count;

    /**
     * @var int
     */
    public $date;
    protected $_name = [
        'count' => 'Count',
        'date' => 'Date',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }

        if (null !== $this->date) {
            $res['Date'] = $this->date;
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
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }

        if (isset($map['Date'])) {
            $model->date = $map['Date'];
        }

        return $model;
    }
}
