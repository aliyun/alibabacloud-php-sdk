<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidlc\V20201203\Models;

use AlibabaCloud\Dara\Model;

class RLFlowWaste extends Model
{
    /**
     * @var int
     */
    public $usefulSec;
    protected $_name = [
        'usefulSec' => 'UsefulSec',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->usefulSec) {
            $res['UsefulSec'] = $this->usefulSec;
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
        if (isset($map['UsefulSec'])) {
            $model->usefulSec = $map['UsefulSec'];
        }

        return $model;
    }
}
