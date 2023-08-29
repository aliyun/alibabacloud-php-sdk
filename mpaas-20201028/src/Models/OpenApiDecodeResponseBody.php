<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MPaaS\V20201028\Models;

use AlibabaCloud\Tea\Model;

class OpenApiDecodeResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $resultCode;

    /**
     * @var string
     */
    public $resultContent;
    protected $_name = [
        'requestId'     => 'RequestId',
        'resultCode'    => 'ResultCode',
        'resultContent' => 'ResultContent',
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
        if (null !== $this->resultCode) {
            $res['ResultCode'] = $this->resultCode;
        }
        if (null !== $this->resultContent) {
            $res['ResultContent'] = $this->resultContent;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return OpenApiDecodeResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ResultCode'])) {
            $model->resultCode = $map['ResultCode'];
        }
        if (isset($map['ResultContent'])) {
            $model->resultContent = $map['ResultContent'];
        }

        return $model;
    }
}
