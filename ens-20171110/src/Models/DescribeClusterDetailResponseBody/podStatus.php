<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DescribeClusterDetailResponseBody;

use AlibabaCloud\Dara\Model;

class podStatus extends Model
{
    /**
     * @var int
     */
    public $running;

    /**
     * @var int
     */
    public $total;
    protected $_name = [
        'running' => 'Running',
        'total' => 'Total',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->running) {
            $res['Running'] = $this->running;
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
        if (isset($map['Running'])) {
            $model->running = $map['Running'];
        }

        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }

        return $model;
    }
}
