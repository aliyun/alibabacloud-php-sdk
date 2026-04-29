<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Polardb\V20170801\Models\ListPolarClawBindingsResponseBody\bindings;

class ListPolarClawBindingsResponseBody extends Model
{
    /**
     * @var string
     */
    public $applicationId;

    /**
     * @var bindings[]
     */
    public $bindings;

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
    protected $_name = [
        'applicationId' => 'ApplicationId',
        'bindings' => 'Bindings',
        'code' => 'Code',
        'message' => 'Message',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->bindings)) {
            Model::validateArray($this->bindings);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->applicationId) {
            $res['ApplicationId'] = $this->applicationId;
        }

        if (null !== $this->bindings) {
            if (\is_array($this->bindings)) {
                $res['Bindings'] = [];
                $n1 = 0;
                foreach ($this->bindings as $item1) {
                    $res['Bindings'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->code) {
            $res['Code'] = $this->code;
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
        if (isset($map['ApplicationId'])) {
            $model->applicationId = $map['ApplicationId'];
        }

        if (isset($map['Bindings'])) {
            if (!empty($map['Bindings'])) {
                $model->bindings = [];
                $n1 = 0;
                foreach ($map['Bindings'] as $item1) {
                    $model->bindings[$n1] = bindings::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Code'])) {
            $model->code = $map['Code'];
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
