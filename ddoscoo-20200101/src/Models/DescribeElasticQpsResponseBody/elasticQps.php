<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeElasticQpsResponseBody;

use AlibabaCloud\Dara\Model;

class elasticQps extends Model
{
    /**
     * @var int
     */
    public $index;

    /**
     * @var int
     */
    public $maxNormalQps;

    /**
     * @var int
     */
    public $maxQps;

    /**
     * @var int
     */
    public $pv;

    /**
     * @var int
     */
    public $status2;

    /**
     * @var int
     */
    public $status3;

    /**
     * @var int
     */
    public $status4;

    /**
     * @var int
     */
    public $status5;

    /**
     * @var int
     */
    public $ups;
    protected $_name = [
        'index' => 'Index',
        'maxNormalQps' => 'MaxNormalQps',
        'maxQps' => 'MaxQps',
        'pv' => 'Pv',
        'status2' => 'Status2',
        'status3' => 'Status3',
        'status4' => 'Status4',
        'status5' => 'Status5',
        'ups' => 'Ups',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->index) {
            $res['Index'] = $this->index;
        }

        if (null !== $this->maxNormalQps) {
            $res['MaxNormalQps'] = $this->maxNormalQps;
        }

        if (null !== $this->maxQps) {
            $res['MaxQps'] = $this->maxQps;
        }

        if (null !== $this->pv) {
            $res['Pv'] = $this->pv;
        }

        if (null !== $this->status2) {
            $res['Status2'] = $this->status2;
        }

        if (null !== $this->status3) {
            $res['Status3'] = $this->status3;
        }

        if (null !== $this->status4) {
            $res['Status4'] = $this->status4;
        }

        if (null !== $this->status5) {
            $res['Status5'] = $this->status5;
        }

        if (null !== $this->ups) {
            $res['Ups'] = $this->ups;
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
        if (isset($map['Index'])) {
            $model->index = $map['Index'];
        }

        if (isset($map['MaxNormalQps'])) {
            $model->maxNormalQps = $map['MaxNormalQps'];
        }

        if (isset($map['MaxQps'])) {
            $model->maxQps = $map['MaxQps'];
        }

        if (isset($map['Pv'])) {
            $model->pv = $map['Pv'];
        }

        if (isset($map['Status2'])) {
            $model->status2 = $map['Status2'];
        }

        if (isset($map['Status3'])) {
            $model->status3 = $map['Status3'];
        }

        if (isset($map['Status4'])) {
            $model->status4 = $map['Status4'];
        }

        if (isset($map['Status5'])) {
            $model->status5 = $map['Status5'];
        }

        if (isset($map['Ups'])) {
            $model->ups = $map['Ups'];
        }

        return $model;
    }
}
