<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Agency\V20221216\Models;

use AlibabaCloud\Tea\Model;

class SetCreditLineRequest extends Model
{
    /**
     * @example 100
     *
     * @var string
     */
    public $creditLine;

    /**
     * @example 1263644979775567
     *
     * @var int
     */
    public $uid;
    protected $_name = [
        'creditLine' => 'CreditLine',
        'uid'        => 'Uid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->creditLine) {
            $res['CreditLine'] = $this->creditLine;
        }
        if (null !== $this->uid) {
            $res['Uid'] = $this->uid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SetCreditLineRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreditLine'])) {
            $model->creditLine = $map['CreditLine'];
        }
        if (isset($map['Uid'])) {
            $model->uid = $map['Uid'];
        }

        return $model;
    }
}
