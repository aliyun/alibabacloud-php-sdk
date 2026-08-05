<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Kms\V20160120\Models;

use AlibabaCloud\Dara\Model;

class BatchGetSecretValueShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $secretsListShrink;
    protected $_name = [
        'secretsListShrink' => 'SecretsList',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->secretsListShrink) {
            $res['SecretsList'] = $this->secretsListShrink;
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
        if (isset($map['SecretsList'])) {
            $model->secretsListShrink = $map['SecretsList'];
        }

        return $model;
    }
}
