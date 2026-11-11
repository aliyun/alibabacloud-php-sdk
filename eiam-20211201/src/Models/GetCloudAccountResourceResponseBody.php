<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eiam\V20211201\Models\GetCloudAccountResourceResponseBody\cloudAccountResource;

class GetCloudAccountResourceResponseBody extends Model
{
    /**
     * @var cloudAccountResource
     */
    public $cloudAccountResource;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'cloudAccountResource' => 'CloudAccountResource',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->cloudAccountResource) {
            $this->cloudAccountResource->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cloudAccountResource) {
            $res['CloudAccountResource'] = null !== $this->cloudAccountResource ? $this->cloudAccountResource->toArray($noStream) : $this->cloudAccountResource;
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
        if (isset($map['CloudAccountResource'])) {
            $model->cloudAccountResource = cloudAccountResource::fromMap($map['CloudAccountResource']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
