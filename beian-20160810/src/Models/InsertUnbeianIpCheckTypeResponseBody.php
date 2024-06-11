<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Beian\V20160810\Models;

use AlibabaCloud\SDK\Beian\V20160810\Models\InsertUnbeianIpCheckTypeResponseBody\huntressIpCheckTypeResultDO;
use AlibabaCloud\Tea\Model;

class InsertUnbeianIpCheckTypeResponseBody extends Model
{
    /**
     * @var int
     */
    public $errorCode;

    /**
     * @var string
     */
    public $errorMessage;

    /**
     * @var huntressIpCheckTypeResultDO
     */
    public $huntressIpCheckTypeResultDO;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var bool
     */
    public $success;
    protected $_name = [
        'errorCode'                   => 'ErrorCode',
        'errorMessage'                => 'ErrorMessage',
        'huntressIpCheckTypeResultDO' => 'HuntressIpCheckTypeResultDO',
        'requestId'                   => 'RequestId',
        'success'                     => 'Success',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->errorCode) {
            $res['ErrorCode'] = $this->errorCode;
        }
        if (null !== $this->errorMessage) {
            $res['ErrorMessage'] = $this->errorMessage;
        }
        if (null !== $this->huntressIpCheckTypeResultDO) {
            $res['HuntressIpCheckTypeResultDO'] = null !== $this->huntressIpCheckTypeResultDO ? $this->huntressIpCheckTypeResultDO->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return InsertUnbeianIpCheckTypeResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ErrorCode'])) {
            $model->errorCode = $map['ErrorCode'];
        }
        if (isset($map['ErrorMessage'])) {
            $model->errorMessage = $map['ErrorMessage'];
        }
        if (isset($map['HuntressIpCheckTypeResultDO'])) {
            $model->huntressIpCheckTypeResultDO = huntressIpCheckTypeResultDO::fromMap($map['HuntressIpCheckTypeResultDO']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
