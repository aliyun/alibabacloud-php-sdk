<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iovcc\V20180501\Models;

use AlibabaCloud\Tea\Model;

class CreateCustomizedPropertyResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $customizedPropertyId;
    protected $_name = [
        'requestId'            => 'RequestId',
        'customizedPropertyId' => 'CustomizedPropertyId',
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
        if (null !== $this->customizedPropertyId) {
            $res['CustomizedPropertyId'] = $this->customizedPropertyId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateCustomizedPropertyResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['CustomizedPropertyId'])) {
            $model->customizedPropertyId = $map['CustomizedPropertyId'];
        }

        return $model;
    }
}
