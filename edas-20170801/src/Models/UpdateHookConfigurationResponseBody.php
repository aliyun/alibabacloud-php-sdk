<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Edas\V20170801\Models\UpdateHookConfigurationResponseBody\hooksConfiguration;

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
        'code' => 'Code',
        'hooksConfiguration' => 'HooksConfiguration',
        'message' => 'Message',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->hooksConfiguration)) {
            Model::validateArray($this->hooksConfiguration);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }

        if (null !== $this->hooksConfiguration) {
            if (\is_array($this->hooksConfiguration)) {
                $res['HooksConfiguration'] = [];
                $n1 = 0;
                foreach ($this->hooksConfiguration as $item1) {
                    $res['HooksConfiguration'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }

        if (isset($map['HooksConfiguration'])) {
            if (!empty($map['HooksConfiguration'])) {
                $model->hooksConfiguration = [];
                $n1 = 0;
                foreach ($map['HooksConfiguration'] as $item1) {
                    $model->hooksConfiguration[$n1] = hooksConfiguration::fromMap($item1);
                    ++$n1;
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
