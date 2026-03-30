<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BailianControl\V20240816\Models\ListApiKeysResponseBody\apiKeys;

use AlibabaCloud\Dara\Model;

class authSetModel extends Model
{
    /**
     * @var string
     */
    public $authSetMode;
    protected $_name = [
        'authSetMode' => 'authSetMode',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->authSetMode) {
            $res['authSetMode'] = $this->authSetMode;
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
        if (isset($map['authSetMode'])) {
            $model->authSetMode = $map['authSetMode'];
        }

        return $model;
    }
}
