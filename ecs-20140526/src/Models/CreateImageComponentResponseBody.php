<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\Tea\Model;

class CreateImageComponentResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $imageComponentId;
    protected $_name = [
        'requestId'        => 'RequestId',
        'imageComponentId' => 'ImageComponentId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->imageComponentId) {
            $res['ImageComponentId'] = $this->imageComponentId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateImageComponentResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ImageComponentId'])) {
            $model->imageComponentId = $map['ImageComponentId'];
        }

        return $model;
    }
}
