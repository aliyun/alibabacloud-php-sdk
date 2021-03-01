<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models;

use AlibabaCloud\SDK\Edas\V20170801\Models\UpdateJvmConfigurationResponseBody\jvmConfiguration;
use AlibabaCloud\Tea\Model;

class UpdateJvmConfigurationResponseBody extends Model
{
    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var jvmConfiguration
     */
    public $jvmConfiguration;

    /**
     * @var int
     */
    public $code;
    protected $_name = [
        'message'          => 'Message',
        'requestId'        => 'RequestId',
        'jvmConfiguration' => 'JvmConfiguration',
        'code'             => 'Code',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->jvmConfiguration) {
            $res['JvmConfiguration'] = null !== $this->jvmConfiguration ? $this->jvmConfiguration->toMap() : null;
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateJvmConfigurationResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['JvmConfiguration'])) {
            $model->jvmConfiguration = jvmConfiguration::fromMap($map['JvmConfiguration']);
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }

        return $model;
    }
}
