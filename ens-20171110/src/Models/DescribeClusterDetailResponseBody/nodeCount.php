<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DescribeClusterDetailResponseBody;

use AlibabaCloud\Dara\Model;

class nodeCount extends Model
{
    /**
     * @var int
     */
    public $ready;

    /**
     * @var int
     */
    public $total;
    protected $_name = [
        'ready' => 'Ready',
        'total' => 'Total',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->ready) {
            $res['Ready'] = $this->ready;
        }

        if (null !== $this->total) {
            $res['Total'] = $this->total;
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
        if (isset($map['Ready'])) {
            $model->ready = $map['Ready'];
        }

        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }

        return $model;
    }
}
