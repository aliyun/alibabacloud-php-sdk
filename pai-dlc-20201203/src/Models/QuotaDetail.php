<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidlc\V20201203\Models;

use AlibabaCloud\Dara\Model;

class QuotaDetail extends Model
{
    /**
     * @var string
     */
    public $CPU;

    /**
     * @var string
     */
    public $GPU;

    /**
     * @var GPUDetail[]
     */
    public $GPUDetails;

    /**
     * @var string
     */
    public $GPUType;

    /**
     * @var string
     */
    public $GPUTypeFullName;

    /**
     * @var string
     */
    public $memory;
    protected $_name = [
        'CPU' => 'CPU',
        'GPU' => 'GPU',
        'GPUDetails' => 'GPUDetails',
        'GPUType' => 'GPUType',
        'GPUTypeFullName' => 'GPUTypeFullName',
        'memory' => 'Memory',
    ];

    public function validate()
    {
        if (\is_array($this->GPUDetails)) {
            Model::validateArray($this->GPUDetails);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->CPU) {
            $res['CPU'] = $this->CPU;
        }

        if (null !== $this->GPU) {
            $res['GPU'] = $this->GPU;
        }

        if (null !== $this->GPUDetails) {
            if (\is_array($this->GPUDetails)) {
                $res['GPUDetails'] = [];
                $n1 = 0;
                foreach ($this->GPUDetails as $item1) {
                    $res['GPUDetails'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->GPUType) {
            $res['GPUType'] = $this->GPUType;
        }

        if (null !== $this->GPUTypeFullName) {
            $res['GPUTypeFullName'] = $this->GPUTypeFullName;
        }

        if (null !== $this->memory) {
            $res['Memory'] = $this->memory;
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
        if (isset($map['CPU'])) {
            $model->CPU = $map['CPU'];
        }

        if (isset($map['GPU'])) {
            $model->GPU = $map['GPU'];
        }

        if (isset($map['GPUDetails'])) {
            if (!empty($map['GPUDetails'])) {
                $model->GPUDetails = [];
                $n1 = 0;
                foreach ($map['GPUDetails'] as $item1) {
                    $model->GPUDetails[$n1] = GPUDetail::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['GPUType'])) {
            $model->GPUType = $map['GPUType'];
        }

        if (isset($map['GPUTypeFullName'])) {
            $model->GPUTypeFullName = $map['GPUTypeFullName'];
        }

        if (isset($map['Memory'])) {
            $model->memory = $map['Memory'];
        }

        return $model;
    }
}
