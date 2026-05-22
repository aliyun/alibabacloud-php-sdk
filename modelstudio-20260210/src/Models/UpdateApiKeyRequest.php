<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ModelStudio\V20260210\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ModelStudio\V20260210\Models\UpdateApiKeyRequest\auth;

class UpdateApiKeyRequest extends Model
{
    /**
     * @var auth
     */
    public $auth;

    /**
     * @var string
     */
    public $description;
    protected $_name = [
        'auth' => 'auth',
        'description' => 'description',
    ];

    public function validate()
    {
        if (null !== $this->auth) {
            $this->auth->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->auth) {
            $res['auth'] = null !== $this->auth ? $this->auth->toArray($noStream) : $this->auth;
        }

        if (null !== $this->description) {
            $res['description'] = $this->description;
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
        if (isset($map['auth'])) {
            $model->auth = auth::fromMap($map['auth']);
        }

        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        return $model;
    }
}
