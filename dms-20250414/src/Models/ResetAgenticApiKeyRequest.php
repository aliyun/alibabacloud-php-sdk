<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dms\V20250414\Models;

use AlibabaCloud\Dara\Model;

class ResetAgenticApiKeyRequest extends Model
{
    /**
     * @var int
     */
    public $expireAfterSeconds;

    /**
     * @var int
     */
    public $id;
    protected $_name = [
        'expireAfterSeconds' => 'ExpireAfterSeconds',
        'id' => 'Id',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->expireAfterSeconds) {
            $res['ExpireAfterSeconds'] = $this->expireAfterSeconds;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
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
        if (isset($map['ExpireAfterSeconds'])) {
            $model->expireAfterSeconds = $map['ExpireAfterSeconds'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        return $model;
    }
}
