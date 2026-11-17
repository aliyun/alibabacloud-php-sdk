<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WinNexo\V20260512\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\QuerySourceUsageTrendResponseBody\trend;

class QuerySourceUsageTrendResponseBody extends Model
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
     * @var trend[]
     */
    public $trend;
    protected $_name = [
        'code' => 'code',
        'message' => 'message',
        'requestId' => 'requestId',
        'trend' => 'trend',
    ];

    public function validate()
    {
        if (\is_array($this->trend)) {
            Model::validateArray($this->trend);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->code) {
            $res['code'] = $this->code;
        }

        if (null !== $this->message) {
            $res['message'] = $this->message;
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        if (null !== $this->trend) {
            if (\is_array($this->trend)) {
                $res['trend'] = [];
                $n1 = 0;
                foreach ($this->trend as $item1) {
                    $res['trend'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['code'])) {
            $model->code = $map['code'];
        }

        if (isset($map['message'])) {
            $model->message = $map['message'];
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        if (isset($map['trend'])) {
            if (!empty($map['trend'])) {
                $model->trend = [];
                $n1 = 0;
                foreach ($map['trend'] as $item1) {
                    $model->trend[$n1] = trend::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
