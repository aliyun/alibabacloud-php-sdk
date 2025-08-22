<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ARMS\V20190808\Models\GetTraceResponseBody\spans;

class GetTraceResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var spans[]
     */
    public $spans;
    protected $_name = [
        'requestId' => 'RequestId',
        'spans' => 'Spans',
    ];

    public function validate()
    {
        if (\is_array($this->spans)) {
            Model::validateArray($this->spans);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->spans) {
            if (\is_array($this->spans)) {
                $res['Spans'] = [];
                $n1 = 0;
                foreach ($this->spans as $item1) {
                    $res['Spans'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

        if (isset($map['Spans'])) {
            if (!empty($map['Spans'])) {
                $model->spans = [];
                $n1 = 0;
                foreach ($map['Spans'] as $item1) {
                    $model->spans[$n1] = spans::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
