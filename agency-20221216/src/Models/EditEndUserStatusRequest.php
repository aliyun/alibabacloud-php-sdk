<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Agency\V20221216\Models;

use AlibabaCloud\Tea\Model;

class EditEndUserStatusRequest extends Model
{
    /**
     * @example postPayFreeze
     *
     * @var string
     */
    public $creditStatus;

    /**
     * @description uid
     *
     * @example 1792155717328010
     *
     * @var int
     */
    public $uid;
    protected $_name = [
        'creditStatus' => 'CreditStatus',
        'uid'          => 'Uid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->creditStatus) {
            $res['CreditStatus'] = $this->creditStatus;
        }
        if (null !== $this->uid) {
            $res['Uid'] = $this->uid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return EditEndUserStatusRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreditStatus'])) {
            $model->creditStatus = $map['CreditStatus'];
        }
        if (isset($map['Uid'])) {
            $model->uid = $map['Uid'];
        }

        return $model;
    }
}
