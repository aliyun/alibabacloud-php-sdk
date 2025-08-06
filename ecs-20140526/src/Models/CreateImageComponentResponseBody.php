<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\Dara\Model;

class CreateImageComponentResponseBody extends Model
{
    /**
     * @var string
     */
    public $imageComponentId;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'imageComponentId' => 'ImageComponentId',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->imageComponentId) {
            $res['ImageComponentId'] = $this->imageComponentId;
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
        if (isset($map['ImageComponentId'])) {
            $model->imageComponentId = $map['ImageComponentId'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
