<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiContent\V20240611\Models\ModelRouterQueryNacosProvidersResponseBody\data\models;

use AlibabaCloud\Dara\Model;

class extensions extends Model
{
    /**
     * @var bool
     */
    public $async;
    protected $_name = [
        'async' => 'async',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->async) {
            $res['async'] = $this->async;
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
        if (isset($map['async'])) {
            $model->async = $map['async'];
        }

        return $model;
    }
}
