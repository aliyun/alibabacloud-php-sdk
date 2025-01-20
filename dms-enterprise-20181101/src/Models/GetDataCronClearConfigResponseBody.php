<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetDataCronClearConfigResponseBody\dataCronClearConfig;

class GetDataCronClearConfigResponseBody extends Model
{
    /**
     * @var dataCronClearConfig
     */
    public $dataCronClearConfig;
    /**
     * @var string
     */
    public $errorCode;
    /**
     * @var string
     */
    public $errorMessage;
    /**
     * @var string
     */
    public $requestId;
    /**
     * @var bool
     */
    public $success;
    protected $_name = [
        'dataCronClearConfig' => 'DataCronClearConfig',
        'errorCode'           => 'ErrorCode',
        'errorMessage'        => 'ErrorMessage',
        'requestId'           => 'RequestId',
        'success'             => 'Success',
    ];

    public function validate()
    {
        if (null !== $this->dataCronClearConfig) {
            $this->dataCronClearConfig->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dataCronClearConfig) {
            $res['DataCronClearConfig'] = null !== $this->dataCronClearConfig ? $this->dataCronClearConfig->toArray($noStream) : $this->dataCronClearConfig;
        }

        if (null !== $this->errorCode) {
            $res['ErrorCode'] = $this->errorCode;
        }

        if (null !== $this->errorMessage) {
            $res['ErrorMessage'] = $this->errorMessage;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->success) {
            $res['Success'] = $this->success;
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
        if (isset($map['DataCronClearConfig'])) {
            $model->dataCronClearConfig = dataCronClearConfig::fromMap($map['DataCronClearConfig']);
        }

        if (isset($map['ErrorCode'])) {
            $model->errorCode = $map['ErrorCode'];
        }

        if (isset($map['ErrorMessage'])) {
            $model->errorMessage = $map['ErrorMessage'];
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
