<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ESA\V20240910\Models\CreateRoutineWithAssetsCodeVersionResponseBody\ossPostConfig;

class CreateRoutineWithAssetsCodeVersionResponseBody extends Model
{
    /**
     * @var string
     */
    public $codeVersion;

    /**
     * @var ossPostConfig
     */
    public $ossPostConfig;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'codeVersion' => 'CodeVersion',
        'ossPostConfig' => 'OssPostConfig',
        'requestId' => 'RequestId',
        'status' => 'Status',
    ];

    public function validate()
    {
        if (null !== $this->ossPostConfig) {
            $this->ossPostConfig->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->codeVersion) {
            $res['CodeVersion'] = $this->codeVersion;
        }

        if (null !== $this->ossPostConfig) {
            $res['OssPostConfig'] = null !== $this->ossPostConfig ? $this->ossPostConfig->toArray($noStream) : $this->ossPostConfig;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['CodeVersion'])) {
            $model->codeVersion = $map['CodeVersion'];
        }

        if (isset($map['OssPostConfig'])) {
            $model->ossPostConfig = ossPostConfig::fromMap($map['OssPostConfig']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
