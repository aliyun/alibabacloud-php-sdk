<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\Dara\Model;

class GetPolarClawConfigResponseBody extends Model
{
    /**
     * @var string
     */
    public $applicationId;

    /**
     * @var int
     */
    public $code;

    /**
     * @var mixed[]
     */
    public $config;

    /**
     * @var string
     */
    public $hash;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $openclawVersion;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'applicationId' => 'ApplicationId',
        'code' => 'Code',
        'config' => 'Config',
        'hash' => 'Hash',
        'message' => 'Message',
        'openclawVersion' => 'OpenclawVersion',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->config)) {
            Model::validateArray($this->config);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->applicationId) {
            $res['ApplicationId'] = $this->applicationId;
        }

        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }

        if (null !== $this->config) {
            if (\is_array($this->config)) {
                $res['Config'] = [];
                foreach ($this->config as $key1 => $value1) {
                    $res['Config'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->hash) {
            $res['Hash'] = $this->hash;
        }

        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }

        if (null !== $this->openclawVersion) {
            $res['OpenclawVersion'] = $this->openclawVersion;
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
        if (isset($map['ApplicationId'])) {
            $model->applicationId = $map['ApplicationId'];
        }

        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }

        if (isset($map['Config'])) {
            if (!empty($map['Config'])) {
                $model->config = [];
                foreach ($map['Config'] as $key1 => $value1) {
                    $model->config[$key1] = $value1;
                }
            }
        }

        if (isset($map['Hash'])) {
            $model->hash = $map['Hash'];
        }

        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }

        if (isset($map['OpenclawVersion'])) {
            $model->openclawVersion = $map['OpenclawVersion'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
