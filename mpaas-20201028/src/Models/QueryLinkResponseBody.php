<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MPaaS\V20201028\Models;

use AlibabaCloud\SDK\MPaaS\V20201028\Models\QueryLinkResponseBody\resultContent;
use AlibabaCloud\Tea\Model;

class QueryLinkResponseBody extends Model
{
    /**
     * @description Id of the request
     *
     * @example D9B3C4E7-BEC7-1E2C-86A3-EA985B4FFD73
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 100
     *
     * @var string
     */
    public $resultCode;

    /**
     * @var resultContent
     */
    public $resultContent;

    /**
     * @example success
     *
     * @var string
     */
    public $resultMessage;
    protected $_name = [
        'requestId'     => 'RequestId',
        'resultCode'    => 'ResultCode',
        'resultContent' => 'ResultContent',
        'resultMessage' => 'ResultMessage',
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
            $res['ResultContent'] = null !== $this->resultContent ? $this->resultContent->toMap() : null;
        }
        if (null !== $this->resultMessage) {
            $res['ResultMessage'] = $this->resultMessage;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryLinkResponseBody
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
            $model->resultContent = resultContent::fromMap($map['ResultContent']);
        }
        if (isset($map['ResultMessage'])) {
            $model->resultMessage = $map['ResultMessage'];
        }

        return $model;
    }
}
