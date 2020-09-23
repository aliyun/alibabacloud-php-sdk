<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetInstanceStatusCountResponse\statusCount;
use AlibabaCloud\Tea\Model;

class GetInstanceStatusCountResponse extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var statusCount
     */
    public $statusCount;
    protected $_name = [
        'requestId'   => 'RequestId',
        'statusCount' => 'StatusCount',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('statusCount', $this->statusCount, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->statusCount) {
            $res['StatusCount'] = null !== $this->statusCount ? $this->statusCount->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetInstanceStatusCountResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['StatusCount'])) {
            $model->statusCount = statusCount::fromMap($map['StatusCount']);
        }

        return $model;
    }
}
