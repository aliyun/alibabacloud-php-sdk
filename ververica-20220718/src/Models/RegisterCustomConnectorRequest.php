<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ververica\V20220718\Models;

use AlibabaCloud\Dara\Model;

class RegisterCustomConnectorRequest extends Model
{
    /**
     * @var string
     */
    public $jarUrl;
    protected $_name = [
        'jarUrl' => 'jarUrl',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->jarUrl) {
            $res['jarUrl'] = $this->jarUrl;
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
        if (isset($map['jarUrl'])) {
            $model->jarUrl = $map['jarUrl'];
        }

        return $model;
    }
}
