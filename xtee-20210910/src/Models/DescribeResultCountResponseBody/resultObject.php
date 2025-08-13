<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeResultCountResponseBody;

use AlibabaCloud\Dara\Model;

class resultObject extends Model
{
    /**
     * @var string
     */
    public $result;

    /**
     * @var string
     */
    public $total;
    protected $_name = [
        'result' => 'result',
        'total' => 'total',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->result) {
            $res['result'] = $this->result;
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
        if (isset($map['result'])) {
            $model->result = $map['result'];
        }

        if (isset($map['total'])) {
            $model->total = $map['total'];
        }

        return $model;
    }
}
