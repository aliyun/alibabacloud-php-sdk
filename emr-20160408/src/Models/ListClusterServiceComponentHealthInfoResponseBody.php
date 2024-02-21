<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models;

use AlibabaCloud\SDK\Emr\V20160408\Models\ListClusterServiceComponentHealthInfoResponseBody\healthInfoList;
use AlibabaCloud\Tea\Model;

class ListClusterServiceComponentHealthInfoResponseBody extends Model
{
    /**
     * @example C-F32FB31D8295****
     *
     * @var string
     */
    public $clusterId;

    /**
     * @var healthInfoList
     */
    public $healthInfoList;

    /**
     * @example DF202AC2-5D5D-4288-B608-B7B1595B5C7C
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'clusterId'      => 'ClusterId',
        'healthInfoList' => 'HealthInfoList',
        'requestId'      => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->healthInfoList) {
            $res['HealthInfoList'] = null !== $this->healthInfoList ? $this->healthInfoList->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['HealthInfoList'])) {
            $model->healthInfoList = healthInfoList::fromMap($map['HealthInfoList']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
