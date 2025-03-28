<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\TopTenErrorTimesInstanceResponseBody\instanceErrorRank;

class TopTenErrorTimesInstanceResponseBody extends Model
{
    /**
     * @var instanceErrorRank
     */
    public $instanceErrorRank;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'instanceErrorRank' => 'InstanceErrorRank',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->instanceErrorRank) {
            $this->instanceErrorRank->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->instanceErrorRank) {
            $res['InstanceErrorRank'] = null !== $this->instanceErrorRank ? $this->instanceErrorRank->toArray($noStream) : $this->instanceErrorRank;
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
        if (isset($map['InstanceErrorRank'])) {
            $model->instanceErrorRank = instanceErrorRank::fromMap($map['InstanceErrorRank']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
