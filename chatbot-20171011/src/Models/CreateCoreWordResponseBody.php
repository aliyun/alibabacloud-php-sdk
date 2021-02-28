<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Chatbot\V20171011\Models;

use AlibabaCloud\Tea\Model;

class CreateCoreWordResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $coreWordCode;
    protected $_name = [
        'requestId'    => 'RequestId',
        'coreWordCode' => 'CoreWordCode',
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
        if (null !== $this->coreWordCode) {
            $res['CoreWordCode'] = $this->coreWordCode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateCoreWordResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['CoreWordCode'])) {
            $model->coreWordCode = $map['CoreWordCode'];
        }

        return $model;
    }
}
