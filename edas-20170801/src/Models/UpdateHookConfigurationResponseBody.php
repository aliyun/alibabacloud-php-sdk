<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models;

use AlibabaCloud\SDK\Edas\V20170801\Models\UpdateHookConfigurationResponseBody\hooksConfiguration;
use AlibabaCloud\Tea\Model;

class UpdateHookConfigurationResponseBody extends Model
{
    /**
     * @var int
     */
    public $code;

    /**
     * @var hooksConfiguration[]
     */
    public $hooksConfiguration;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'code'               => 'Code',
        'hooksConfiguration' => 'HooksConfiguration',
        'message'            => 'Message',
        'requestId'          => 'RequestId',
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
        if (null !== $this->hooksConfiguration) {
            $res['HooksConfiguration'] = [];
            if (null !== $this->hooksConfiguration && \is_array($this->hooksConfiguration)) {
                $n = 0;
                foreach ($this->hooksConfiguration as $item) {
                    $res['HooksConfiguration'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateHookConfigurationResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['HooksConfiguration'])) {
            if (!empty($map['HooksConfiguration'])) {
                $model->hooksConfiguration = [];
                $n                         = 0;
                foreach ($map['HooksConfiguration'] as $item) {
                    $model->hooksConfiguration[$n++] = null !== $item ? hooksConfiguration::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
