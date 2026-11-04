<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20170705\Models\CheckNumberAvaliableResponseBody;

use AlibabaCloud\Dara\Model;

class callerAvaliable extends Model
{
    /**
     * @var bool
     */
    public $avaliable;

    /**
     * @var string
     */
    public $reason;
    protected $_name = [
        'avaliable' => 'Avaliable',
        'reason' => 'Reason',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->avaliable) {
            $res['Avaliable'] = $this->avaliable;
        }

        if (null !== $this->reason) {
            $res['Reason'] = $this->reason;
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
        if (isset($map['Avaliable'])) {
            $model->avaliable = $map['Avaliable'];
        }

        if (isset($map['Reason'])) {
            $model->reason = $map['Reason'];
        }

        return $model;
    }
}
