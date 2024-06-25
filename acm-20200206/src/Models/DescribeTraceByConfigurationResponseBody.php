<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Acm\V20200206\Models;

use AlibabaCloud\SDK\Acm\V20200206\Models\DescribeTraceByConfigurationResponseBody\traces;
use AlibabaCloud\Tea\Model;

class DescribeTraceByConfigurationResponseBody extends Model
{
    /**
     * @var string
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
     * @var traces[]
     */
    public $traces;
    protected $_name = [
        'code'      => 'Code',
        'message'   => 'Message',
        'requestId' => 'RequestId',
        'traces'    => 'Traces',
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
        if (null !== $this->traces) {
            $res['Traces'] = [];
            if (null !== $this->traces && \is_array($this->traces)) {
                $n = 0;
                foreach ($this->traces as $item) {
                    $res['Traces'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeTraceByConfigurationResponseBody
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
        if (isset($map['Traces'])) {
            if (!empty($map['Traces'])) {
                $model->traces = [];
                $n             = 0;
                foreach ($map['Traces'] as $item) {
                    $model->traces[$n++] = null !== $item ? traces::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
