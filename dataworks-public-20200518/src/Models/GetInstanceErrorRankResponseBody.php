<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetInstanceErrorRankResponseBody\instanceErrorRank;
use AlibabaCloud\Tea\Model;

class GetInstanceErrorRankResponseBody extends Model
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
        'requestId'         => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceErrorRank) {
            $res['InstanceErrorRank'] = null !== $this->instanceErrorRank ? $this->instanceErrorRank->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetInstanceErrorRankResponseBody
     */
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
