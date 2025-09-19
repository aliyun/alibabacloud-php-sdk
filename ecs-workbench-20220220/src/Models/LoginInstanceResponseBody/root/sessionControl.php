<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecsworkbench\V20220220\Models\LoginInstanceResponseBody\root;

use AlibabaCloud\Dara\Model;

class sessionControl extends Model
{
    /**
     * @var string
     */
    public $baseUrl;
    protected $_name = [
        'baseUrl' => 'BaseUrl',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->baseUrl) {
            $res['BaseUrl'] = $this->baseUrl;
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
        if (isset($map['BaseUrl'])) {
            $model->baseUrl = $map['BaseUrl'];
        }

        return $model;
    }
}
