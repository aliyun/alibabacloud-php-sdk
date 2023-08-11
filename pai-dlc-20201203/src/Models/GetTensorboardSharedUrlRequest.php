<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidlc\V20201203\Models;

use AlibabaCloud\Tea\Model;

class GetTensorboardSharedUrlRequest extends Model
{
    /**
     * @example 86400
     *
     * @var string
     */
    public $expireTimeSeconds;
    protected $_name = [
        'expireTimeSeconds' => 'ExpireTimeSeconds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->expireTimeSeconds) {
            $res['ExpireTimeSeconds'] = $this->expireTimeSeconds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetTensorboardSharedUrlRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ExpireTimeSeconds'])) {
            $model->expireTimeSeconds = $map['ExpireTimeSeconds'];
        }

        return $model;
    }
}
