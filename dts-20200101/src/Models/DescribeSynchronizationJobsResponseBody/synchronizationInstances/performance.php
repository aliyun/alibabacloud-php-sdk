<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models\DescribeSynchronizationJobsResponseBody\synchronizationInstances;

use AlibabaCloud\Dara\Model;

class performance extends Model
{
    /**
     * @var string
     */
    public $FLOW;
    /**
     * @var string
     */
    public $RPS;
    protected $_name = [
        'FLOW' => 'FLOW',
        'RPS'  => 'RPS',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->FLOW) {
            $res['FLOW'] = $this->FLOW;
        }

        if (null !== $this->RPS) {
            $res['RPS'] = $this->RPS;
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
        if (isset($map['FLOW'])) {
            $model->FLOW = $map['FLOW'];
        }

        if (isset($map['RPS'])) {
            $model->RPS = $map['RPS'];
        }

        return $model;
    }
}
