<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models;

use AlibabaCloud\SDK\Edas\V20170801\Models\GetWebContainerConfigResponseBody\webContainerConfig;
use AlibabaCloud\Tea\Model;

class GetWebContainerConfigResponseBody extends Model
{
    /**
     * @var int
     */
    public $code;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var webContainerConfig
     */
    public $webContainerConfig;
    protected $_name = [
        'code'               => 'Code',
        'message'            => 'Message',
        'requestId'          => 'RequestId',
        'webContainerConfig' => 'WebContainerConfig',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->webContainerConfig) {
            $res['WebContainerConfig'] = null !== $this->webContainerConfig ? $this->webContainerConfig->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetWebContainerConfigResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['WebContainerConfig'])) {
            $model->webContainerConfig = webContainerConfig::fromMap($map['WebContainerConfig']);
        }

        return $model;
    }
}
