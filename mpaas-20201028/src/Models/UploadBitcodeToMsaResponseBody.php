<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MPaaS\V20201028\Models;

use AlibabaCloud\SDK\MPaaS\V20201028\Models\UploadBitcodeToMsaResponseBody\resultContent;
use AlibabaCloud\Tea\Model;

class UploadBitcodeToMsaResponseBody extends Model
{
    /**
     * @example 11E66B29-9E5E-5C10-B64E-B5A0E0F26355
     *
     * @var string
     */
    public $requestId;

    /**
     * @example OK
     *
     * @var string
     */
    public $resultCode;

    /**
     * @var resultContent
     */
    public $resultContent;

    /**
     * @example SYSTEM_ERROR
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
     * @return UploadBitcodeToMsaResponseBody
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
