<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiRecService\V20221213\Models;

use AlibabaCloud\Dara\Model;

class GenerateAlgorithmCustomizationScriptResponseBody extends Model
{
    /**
     * @var string
     */
    public $logId;

    /**
     * @var string
     */
    public $ossAddress;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'logId' => 'LogId',
        'ossAddress' => 'OssAddress',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->logId) {
            $res['LogId'] = $this->logId;
        }

        if (null !== $this->ossAddress) {
            $res['OssAddress'] = $this->ossAddress;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['LogId'])) {
            $model->logId = $map['LogId'];
        }

        if (isset($map['OssAddress'])) {
            $model->ossAddress = $map['OssAddress'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
