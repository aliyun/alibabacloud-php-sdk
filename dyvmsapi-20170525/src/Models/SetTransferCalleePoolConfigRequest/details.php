<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\SetTransferCalleePoolConfigRequest;

use AlibabaCloud\Dara\Model;

class details extends Model
{
    /**
     * @var string
     */
    public $called;

    /**
     * @var string
     */
    public $caller;
    protected $_name = [
        'called' => 'Called',
        'caller' => 'Caller',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->called) {
            $res['Called'] = $this->called;
        }

        if (null !== $this->caller) {
            $res['Caller'] = $this->caller;
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
        if (isset($map['Called'])) {
            $model->called = $map['Called'];
        }

        if (isset($map['Caller'])) {
            $model->caller = $map['Caller'];
        }

        return $model;
    }
}
