<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models;

use AlibabaCloud\SDK\Edas\V20170801\Models\UpdateContainerConfigurationResponseBody\containerConfiguration;
use AlibabaCloud\Tea\Model;

class UpdateContainerConfigurationResponseBody extends Model
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
     * @var int
     */
    public $code;

    /**
     * @var containerConfiguration
     */
    public $containerConfiguration;
    protected $_name = [
        'message'                => 'Message',
        'requestId'              => 'RequestId',
        'code'                   => 'Code',
        'containerConfiguration' => 'ContainerConfiguration',
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
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->containerConfiguration) {
            $res['ContainerConfiguration'] = null !== $this->containerConfiguration ? $this->containerConfiguration->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateContainerConfigurationResponseBody
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
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['ContainerConfiguration'])) {
            $model->containerConfiguration = containerConfiguration::fromMap($map['ContainerConfiguration']);
        }

        return $model;
    }
}
