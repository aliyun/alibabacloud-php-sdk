<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models;

use AlibabaCloud\Dara\Model;

class CreateCustomEntityResponseBody extends Model
{
    /**
     * @var string
     */
    public $customEntityId;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'customEntityId' => 'CustomEntityId',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->customEntityId) {
            $res['CustomEntityId'] = $this->customEntityId;
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
        if (isset($map['CustomEntityId'])) {
            $model->customEntityId = $map['CustomEntityId'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
