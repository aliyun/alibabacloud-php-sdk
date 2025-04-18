<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Nis\V20211216\Models;

use AlibabaCloud\Dara\Model;

class CreateNetworkPathResponseBody extends Model
{
    /**
     * @var string
     */
    public $networkPathId;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'networkPathId' => 'NetworkPathId',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->networkPathId) {
            $res['NetworkPathId'] = $this->networkPathId;
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
        if (isset($map['NetworkPathId'])) {
            $model->networkPathId = $map['NetworkPathId'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
