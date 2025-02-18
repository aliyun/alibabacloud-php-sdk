<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaxCompute\V20220104\Models\UpdateComputeQuotaScheduleRequest\body;

use AlibabaCloud\Dara\Model;

class condition extends Model
{
    /**
     * @var string
     */
    public $at;
    protected $_name = [
        'at' => 'at',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->at) {
            $res['at'] = $this->at;
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
        if (isset($map['at'])) {
            $model->at = $map['at'];
        }

        return $model;
    }
}
