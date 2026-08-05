<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ESA\V20240910\Models\TraceSiteResponseBody\trace;

class TraceSiteResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $statusCode;

    /**
     * @var bool
     */
    public $success;

    /**
     * @var trace[]
     */
    public $trace;
    protected $_name = [
        'requestId' => 'RequestId',
        'statusCode' => 'StatusCode',
        'success' => 'Success',
        'trace' => 'Trace',
    ];

    public function validate()
    {
        if (\is_array($this->trace)) {
            Model::validateArray($this->trace);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->statusCode) {
            $res['StatusCode'] = $this->statusCode;
        }

        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        if (null !== $this->trace) {
            if (\is_array($this->trace)) {
                $res['Trace'] = [];
                $n1 = 0;
                foreach ($this->trace as $item1) {
                    $res['Trace'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['StatusCode'])) {
            $model->statusCode = $map['StatusCode'];
        }

        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        if (isset($map['Trace'])) {
            if (!empty($map['Trace'])) {
                $model->trace = [];
                $n1 = 0;
                foreach ($map['Trace'] as $item1) {
                    $model->trace[$n1] = trace::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
