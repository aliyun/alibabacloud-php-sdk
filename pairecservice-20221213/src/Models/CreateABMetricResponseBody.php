<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiRecService\V20221213\Models;

use AlibabaCloud\Dara\Model;

class CreateABMetricResponseBody extends Model
{
    /**
     * @var string
     */
    public $ABMetricId;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'ABMetricId' => 'ABMetricId',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->ABMetricId) {
            $res['ABMetricId'] = $this->ABMetricId;
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
        if (isset($map['ABMetricId'])) {
            $model->ABMetricId = $map['ABMetricId'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
