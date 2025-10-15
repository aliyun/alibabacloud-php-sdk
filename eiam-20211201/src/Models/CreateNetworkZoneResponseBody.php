<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models;

use AlibabaCloud\Dara\Model;

class CreateNetworkZoneResponseBody extends Model
{
    /**
     * @var string
     */
    public $networkZoneId;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'networkZoneId' => 'NetworkZoneId',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->networkZoneId) {
            $res['NetworkZoneId'] = $this->networkZoneId;
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
        if (isset($map['NetworkZoneId'])) {
            $model->networkZoneId = $map['NetworkZoneId'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
