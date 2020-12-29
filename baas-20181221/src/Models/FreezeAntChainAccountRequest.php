<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Baas\V20181221\Models;

use AlibabaCloud\Tea\Model;

class FreezeAntChainAccountRequest extends Model
{
    /**
     * @var string
     */
    public $antChainId;

    /**
     * @var string
     */
    public $account;
    protected $_name = [
        'antChainId' => 'AntChainId',
        'account'    => 'Account',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->antChainId) {
            $res['AntChainId'] = $this->antChainId;
        }
        if (null !== $this->account) {
            $res['Account'] = $this->account;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return FreezeAntChainAccountRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AntChainId'])) {
            $model->antChainId = $map['AntChainId'];
        }
        if (isset($map['Account'])) {
            $model->account = $map['Account'];
        }

        return $model;
    }
}
