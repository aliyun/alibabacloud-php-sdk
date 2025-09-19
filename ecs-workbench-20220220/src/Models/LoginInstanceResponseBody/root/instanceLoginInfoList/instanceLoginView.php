<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecsworkbench\V20220220\Models\LoginInstanceResponseBody\root\instanceLoginInfoList;

use AlibabaCloud\Dara\Model;

class instanceLoginView extends Model
{
    /**
     * @var string
     */
    public $defaultViewUrl;
    protected $_name = [
        'defaultViewUrl' => 'DefaultViewUrl',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->defaultViewUrl) {
            $res['DefaultViewUrl'] = $this->defaultViewUrl;
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
        if (isset($map['DefaultViewUrl'])) {
            $model->defaultViewUrl = $map['DefaultViewUrl'];
        }

        return $model;
    }
}
