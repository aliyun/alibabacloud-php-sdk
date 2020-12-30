<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models;

use AlibabaCloud\SDK\Emr\V20160408\Models\ListClusterServiceComponentHealthInfoResponseBody\healthInfoList;
use AlibabaCloud\Tea\Model;

class ListClusterServiceComponentHealthInfoResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var healthInfoList
     */
    public $healthInfoList;
    protected $_name = [
        'requestId'      => 'RequestId',
        'clusterId'      => 'ClusterId',
        'healthInfoList' => 'HealthInfoList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->healthInfoList) {
            $res['HealthInfoList'] = null !== $this->healthInfoList ? $this->healthInfoList->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListClusterServiceComponentHealthInfoResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['HealthInfoList'])) {
            $model->healthInfoList = healthInfoList::fromMap($map['HealthInfoList']);
        }

        return $model;
    }
}
