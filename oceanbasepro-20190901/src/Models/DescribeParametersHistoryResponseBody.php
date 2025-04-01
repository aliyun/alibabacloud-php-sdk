<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeParametersHistoryResponseBody\respond;

class DescribeParametersHistoryResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var respond
     */
    public $respond;
    protected $_name = [
        'requestId' => 'RequestId',
        'respond' => 'Respond',
    ];

    public function validate()
    {
        if (null !== $this->respond) {
            $this->respond->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->respond) {
            $res['Respond'] = null !== $this->respond ? $this->respond->toArray($noStream) : $this->respond;
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

        if (isset($map['Respond'])) {
            $model->respond = respond::fromMap($map['Respond']);
        }

        return $model;
    }
}
