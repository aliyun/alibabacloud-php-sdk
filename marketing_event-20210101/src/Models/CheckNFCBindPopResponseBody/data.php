<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Marketing_event\V20210101\Models\CheckNFCBindPopResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $isGlobal;

    /**
     * @var bool
     */
    public $isSign;
    protected $_name = [
        'isGlobal' => 'IsGlobal',
        'isSign' => 'IsSign',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->isGlobal) {
            $res['IsGlobal'] = $this->isGlobal;
        }

        if (null !== $this->isSign) {
            $res['IsSign'] = $this->isSign;
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
        if (isset($map['IsGlobal'])) {
            $model->isGlobal = $map['IsGlobal'];
        }

        if (isset($map['IsSign'])) {
            $model->isSign = $map['IsSign'];
        }

        return $model;
    }
}
