<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsuser\V20210308\Models;

use AlibabaCloud\SDK\Edsuser\V20210308\Models\CreatePropertyResponseBody\createResult;
use AlibabaCloud\Tea\Model;

class CreatePropertyResponseBody extends Model
{
    /**
     * @description The result of creating the property.
     *
     * @var createResult
     */
    public $createResult;

    /**
     * @description The ID of the request.
     *
     * @example 1CBAFFAB-B697-4049-A9B1-67E1FC5F****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'createResult' => 'CreateResult',
        'requestId' => 'RequestId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->createResult) {
            $res['CreateResult'] = null !== $this->createResult ? $this->createResult->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreatePropertyResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateResult'])) {
            $model->createResult = createResult::fromMap($map['CreateResult']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
