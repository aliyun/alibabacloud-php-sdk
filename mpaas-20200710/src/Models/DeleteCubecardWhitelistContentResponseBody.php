<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MPaaS\V20200710\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\MPaaS\V20200710\Models\DeleteCubecardWhitelistContentResponseBody\resultContent;

class DeleteCubecardWhitelistContentResponseBody extends Model
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
     * @var resultContent
     */
    public $resultContent;

    /**
     * @var string
     */
    public $resultMessage;
    protected $_name = [
        'requestId' => 'RequestId',
        'resultCode' => 'ResultCode',
        'resultContent' => 'ResultContent',
        'resultMessage' => 'ResultMessage',
    ];

    public function validate()
    {
        if (null !== $this->resultContent) {
            $this->resultContent->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->resultCode) {
            $res['ResultCode'] = $this->resultCode;
        }

        if (null !== $this->resultContent) {
            $res['ResultContent'] = null !== $this->resultContent ? $this->resultContent->toArray($noStream) : $this->resultContent;
        }

        if (null !== $this->resultMessage) {
            $res['ResultMessage'] = $this->resultMessage;
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
