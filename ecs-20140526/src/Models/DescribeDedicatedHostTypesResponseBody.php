<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeDedicatedHostTypesResponseBody\dedicatedHostTypes;

class DescribeDedicatedHostTypesResponseBody extends Model
{
    /**
     * @var dedicatedHostTypes
     */
    public $dedicatedHostTypes;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'dedicatedHostTypes' => 'DedicatedHostTypes',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->dedicatedHostTypes) {
            $this->dedicatedHostTypes->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dedicatedHostTypes) {
            $res['DedicatedHostTypes'] = null !== $this->dedicatedHostTypes ? $this->dedicatedHostTypes->toArray($noStream) : $this->dedicatedHostTypes;
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
        if (isset($map['DedicatedHostTypes'])) {
            $model->dedicatedHostTypes = dedicatedHostTypes::fromMap($map['DedicatedHostTypes']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
