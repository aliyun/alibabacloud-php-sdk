<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20190315\Models\DescribeConnectionCountRecordsResponseBody;

use AlibabaCloud\Dara\Model;

class userRecords extends Model
{
    /**
     * @var int
     */
    public $count;

    /**
     * @var string
     */
    public $user;
    protected $_name = [
        'count' => 'Count',
        'user' => 'User',
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

        if (null !== $this->user) {
            $res['User'] = $this->user;
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

        if (isset($map['User'])) {
            $model->user = $map['User'];
        }

        return $model;
    }
}
