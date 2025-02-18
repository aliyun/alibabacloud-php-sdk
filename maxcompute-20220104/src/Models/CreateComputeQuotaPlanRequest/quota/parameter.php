<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaxCompute\V20220104\Models\CreateComputeQuotaPlanRequest\quota;

use AlibabaCloud\Dara\Model;

class parameter extends Model
{
    /**
     * @var int
     */
    public $elasticReservedCU;
    protected $_name = [
        'elasticReservedCU' => 'elasticReservedCU',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->elasticReservedCU) {
            $res['elasticReservedCU'] = $this->elasticReservedCU;
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
        if (isset($map['elasticReservedCU'])) {
            $model->elasticReservedCU = $map['elasticReservedCU'];
        }

        return $model;
    }
}
