<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Dara\Model;

class GetRoutineStagingCodeUploadInfoResponseBody extends Model
{
    /**
     * @var string
     */
    public $codeVersion;
    /**
     * @var mixed[]
     */
    public $ossPostConfig;
    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'codeVersion'   => 'CodeVersion',
        'ossPostConfig' => 'OssPostConfig',
        'requestId'     => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->ossPostConfig)) {
            Model::validateArray($this->ossPostConfig);
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
            if (\is_array($this->ossPostConfig)) {
                $res['OssPostConfig'] = [];
                foreach ($this->ossPostConfig as $key1 => $value1) {
                    $res['OssPostConfig'][$key1] = $value1;
                }
            }
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
        if (isset($map['CodeVersion'])) {
            $model->codeVersion = $map['CodeVersion'];
        }

        if (isset($map['OssPostConfig'])) {
            if (!empty($map['OssPostConfig'])) {
                $model->ossPostConfig = [];
                foreach ($map['OssPostConfig'] as $key1 => $value1) {
                    $model->ossPostConfig[$key1] = $value1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
