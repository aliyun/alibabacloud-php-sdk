<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20240730\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\EHPC\V20240730\Models\GetAddonResponseBody\addon;

class GetAddonResponseBody extends Model
{
    /**
     * @var addon
     */
    public $addon;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'addon' => 'Addon',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->addon) {
            $this->addon->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->addon) {
            $res['Addon'] = null !== $this->addon ? $this->addon->toArray($noStream) : $this->addon;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['Addon'])) {
            $model->addon = addon::fromMap($map['Addon']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
