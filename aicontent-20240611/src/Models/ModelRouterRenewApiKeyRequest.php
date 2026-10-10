<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiContent\V20240611\Models;

use AlibabaCloud\Dara\Model;

class ModelRouterRenewApiKeyRequest extends Model
{
    /**
     * @var string
     */
    public $expireAt;
    protected $_name = [
        'expireAt' => 'expireAt',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->expireAt) {
            $res['expireAt'] = $this->expireAt;
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
        if (isset($map['expireAt'])) {
            $model->expireAt = $map['expireAt'];
        }

        return $model;
    }
}
