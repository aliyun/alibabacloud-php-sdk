<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Market\V20151101\Models;

use AlibabaCloud\Tea\Model;

class CrossAccountVerifyTokenRequest extends Model
{
    /**
     * @example C19D103FEA2D50A584410267CE9FBA56
     *
     * @var string
     */
    public $token;
    protected $_name = [
        'token' => 'Token',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->token) {
            $res['Token'] = $this->token;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CrossAccountVerifyTokenRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Token'])) {
            $model->token = $map['Token'];
        }

        return $model;
    }
}
