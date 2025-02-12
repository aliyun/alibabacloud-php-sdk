<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribePortViewSourceIspsResponseBody;

use AlibabaCloud\Dara\Model;

class isps extends Model
{
    /**
     * @var int
     */
    public $count;
    /**
     * @var string
     */
    public $ispId;
    protected $_name = [
        'count' => 'Count',
        'ispId' => 'IspId',
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

        if (null !== $this->ispId) {
            $res['IspId'] = $this->ispId;
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

        if (isset($map['IspId'])) {
            $model->ispId = $map['IspId'];
        }

        return $model;
    }
}
