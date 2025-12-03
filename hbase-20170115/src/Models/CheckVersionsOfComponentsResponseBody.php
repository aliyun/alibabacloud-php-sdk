<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\HBase\V20170115\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\HBase\V20170115\Models\CheckVersionsOfComponentsResponseBody\components;

class CheckVersionsOfComponentsResponseBody extends Model
{
    /**
     * @var components
     */
    public $components;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'components' => 'Components',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->components) {
            $this->components->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->components) {
            $res['Components'] = null !== $this->components ? $this->components->toArray($noStream) : $this->components;
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
        if (isset($map['Components'])) {
            $model->components = components::fromMap($map['Components']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
