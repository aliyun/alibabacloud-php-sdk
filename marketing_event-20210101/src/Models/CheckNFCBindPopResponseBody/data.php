<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Marketing_event\V20210101\Models\CheckNFCBindPopResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 0
     *
     * @var int
     */
    public $isGlobal;

    /**
     * @example true
     *
     * @var bool
     */
    public $isSign;
    protected $_name = [
        'isGlobal' => 'IsGlobal',
        'isSign'   => 'IsSign',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return data
     */
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
