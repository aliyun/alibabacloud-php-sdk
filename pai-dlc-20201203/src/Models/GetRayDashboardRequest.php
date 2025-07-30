<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidlc\V20201203\Models;

use AlibabaCloud\Tea\Model;

class GetRayDashboardRequest extends Model
{
    /**
     * @description Specifies whether the link is a sharing link. If yes, a token is required.
     *
     * Valid values:
     *
     *   true
     *   false
     *
     * @example false
     *
     * @var bool
     */
    public $isShared;

    /**
     * @description The token obtained from GetToken
     *
     * @example some_token_value
     *
     * @var string
     */
    public $token;
    protected $_name = [
        'isShared' => 'isShared',
        'token' => 'token',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->isShared) {
            $res['isShared'] = $this->isShared;
        }
        if (null !== $this->token) {
            $res['token'] = $this->token;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetRayDashboardRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['isShared'])) {
            $model->isShared = $map['isShared'];
        }
        if (isset($map['token'])) {
            $model->token = $map['token'];
        }

        return $model;
    }
}
