<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\NAS\V20170626\Models\CreateAccessPointResponseBody\accessPoint;

class CreateAccessPointResponseBody extends Model
{
    /**
     * @var accessPoint
     */
    public $accessPoint;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'accessPoint' => 'AccessPoint',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->accessPoint) {
            $this->accessPoint->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accessPoint) {
            $res['AccessPoint'] = null !== $this->accessPoint ? $this->accessPoint->toArray($noStream) : $this->accessPoint;
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
        if (isset($map['AccessPoint'])) {
            $model->accessPoint = accessPoint::fromMap($map['AccessPoint']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
