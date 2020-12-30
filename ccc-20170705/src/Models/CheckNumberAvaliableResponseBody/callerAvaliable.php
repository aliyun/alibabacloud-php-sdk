<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20170705\Models\CheckNumberAvaliableResponseBody;

use AlibabaCloud\Tea\Model;

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
        'reason'    => 'Reason',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return callerAvaliable
     */
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
