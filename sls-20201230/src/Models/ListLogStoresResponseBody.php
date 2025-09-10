<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models;

use AlibabaCloud\Dara\Model;

class ListLogStoresResponseBody extends Model
{
    /**
     * @var int
     */
    public $count;

    /**
     * @var string[]
     */
    public $logstores;

    /**
     * @var int
     */
    public $total;
    protected $_name = [
        'count' => 'count',
        'logstores' => 'logstores',
        'total' => 'total',
    ];

    public function validate()
    {
        if (\is_array($this->logstores)) {
            Model::validateArray($this->logstores);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->count) {
            $res['count'] = $this->count;
        }

        if (null !== $this->logstores) {
            if (\is_array($this->logstores)) {
                $res['logstores'] = [];
                $n1 = 0;
                foreach ($this->logstores as $item1) {
                    $res['logstores'][$n1] = $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['count'])) {
            $model->count = $map['count'];
        }

        if (isset($map['logstores'])) {
            if (!empty($map['logstores'])) {
                $model->logstores = [];
                $n1 = 0;
                foreach ($map['logstores'] as $item1) {
                    $model->logstores[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['total'])) {
            $model->total = $map['total'];
        }

        return $model;
    }
}
