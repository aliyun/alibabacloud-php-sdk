<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Chatbot\V20171011\Models;

use AlibabaCloud\Tea\Model;

class CreateCoreWordResponseBody extends Model
{
    /**
     * @example ceb9d68c-dbb5-32c9-a02c-eca56b782ff7
     *
     * @var string
     */
    public $coreWordCode;

    /**
     * @example E3E5C779-A630-45AC-B0F2-A4506A4212F1
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'coreWordCode' => 'CoreWordCode',
        'requestId'    => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->coreWordCode) {
            $res['CoreWordCode'] = $this->coreWordCode;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['CoreWordCode'])) {
            $model->coreWordCode = $map['CoreWordCode'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
