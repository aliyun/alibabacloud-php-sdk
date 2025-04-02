<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidlc\V20201203\Models;

use AlibabaCloud\Dara\Model;

class GetTensorboardSharedUrlRequest extends Model
{
    /**
     * @var string
     */
    public $expireTimeSeconds;
    protected $_name = [
        'expireTimeSeconds' => 'ExpireTimeSeconds',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->expireTimeSeconds) {
            $res['ExpireTimeSeconds'] = $this->expireTimeSeconds;
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
        if (isset($map['ExpireTimeSeconds'])) {
            $model->expireTimeSeconds = $map['ExpireTimeSeconds'];
        }

        return $model;
    }
}
