<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Xtrace\V20190808\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Xtrace\V20190808\Models\GetTraceResponseBody\spans;

class GetTraceResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var spans
     */
    public $spans;
    protected $_name = [
        'requestId' => 'RequestId',
        'spans' => 'Spans',
    ];

    public function validate()
    {
        if (null !== $this->spans) {
            $this->spans->validate();
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
            $res['Spans'] = null !== $this->spans ? $this->spans->toArray($noStream) : $this->spans;
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
            $model->spans = spans::fromMap($map['Spans']);
        }

        return $model;
    }
}
