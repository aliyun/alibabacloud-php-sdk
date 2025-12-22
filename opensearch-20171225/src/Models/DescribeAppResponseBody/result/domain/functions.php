<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenSearch\V20171225\Models\DescribeAppResponseBody\result\domain;

use AlibabaCloud\Dara\Model;

class functions extends Model
{
    /**
     * @var string[]
     */
    public $algo;

    /**
     * @var string[]
     */
    public $qp;

    /**
     * @var string[]
     */
    public $service;
    protected $_name = [
        'algo' => 'algo',
        'qp' => 'qp',
        'service' => 'service',
    ];

    public function validate()
    {
        if (\is_array($this->algo)) {
            Model::validateArray($this->algo);
        }
        if (\is_array($this->qp)) {
            Model::validateArray($this->qp);
        }
        if (\is_array($this->service)) {
            Model::validateArray($this->service);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->algo) {
            if (\is_array($this->algo)) {
                $res['algo'] = [];
                $n1 = 0;
                foreach ($this->algo as $item1) {
                    $res['algo'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->qp) {
            if (\is_array($this->qp)) {
                $res['qp'] = [];
                $n1 = 0;
                foreach ($this->qp as $item1) {
                    $res['qp'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->service) {
            if (\is_array($this->service)) {
                $res['service'] = [];
                $n1 = 0;
                foreach ($this->service as $item1) {
                    $res['service'][$n1] = $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['algo'])) {
            if (!empty($map['algo'])) {
                $model->algo = [];
                $n1 = 0;
                foreach ($map['algo'] as $item1) {
                    $model->algo[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['qp'])) {
            if (!empty($map['qp'])) {
                $model->qp = [];
                $n1 = 0;
                foreach ($map['qp'] as $item1) {
                    $model->qp[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['service'])) {
            if (!empty($map['service'])) {
                $model->service = [];
                $n1 = 0;
                foreach ($map['service'] as $item1) {
                    $model->service[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
