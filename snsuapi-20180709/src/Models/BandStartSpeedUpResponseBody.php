<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Snsuapi\V20180709\Models;

use AlibabaCloud\Tea\Model;

class BandStartSpeedUpResponseBody extends Model
{
    /**
     * @var bool
     */
    public $resultModule;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $resultMessage;

    /**
     * @var string
     */
    public $resultCode;
    protected $_name = [
        'resultModule'  => 'ResultModule',
        'requestId'     => 'RequestId',
        'resultMessage' => 'ResultMessage',
        'resultCode'    => 'ResultCode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->resultModule) {
            $res['ResultModule'] = $this->resultModule;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->resultMessage) {
            $res['ResultMessage'] = $this->resultMessage;
        }
        if (null !== $this->resultCode) {
            $res['ResultCode'] = $this->resultCode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return BandStartSpeedUpResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ResultModule'])) {
            $model->resultModule = $map['ResultModule'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ResultMessage'])) {
            $model->resultMessage = $map['ResultMessage'];
        }
        if (isset($map['ResultCode'])) {
            $model->resultCode = $map['ResultCode'];
        }

        return $model;
    }
}
