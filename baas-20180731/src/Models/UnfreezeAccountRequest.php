<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Baas\V20180731\Models;

use AlibabaCloud\Tea\Model;

class UnfreezeAccountRequest extends Model
{
    /**
     * @var string
     */
    public $account;

    /**
     * @var string
     */
    public $bizid;
    protected $_name = [
        'account' => 'Account',
        'bizid'   => 'Bizid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->account) {
            $res['Account'] = $this->account;
        }
        if (null !== $this->bizid) {
            $res['Bizid'] = $this->bizid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UnfreezeAccountRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Account'])) {
            $model->account = $map['Account'];
        }
        if (isset($map['Bizid'])) {
            $model->bizid = $map['Bizid'];
        }

        return $model;
    }
}
