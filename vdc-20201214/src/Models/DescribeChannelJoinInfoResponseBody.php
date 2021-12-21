<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vdc\V20201214\Models;

use AlibabaCloud\Tea\Model;

class DescribeChannelJoinInfoResponseBody extends Model
{
    /**
     * @description 在入会慢时间阈值内的入会成功率
     *
     * @var string
     */
    public $joinFastSuccessRate;

    /**
     * @description 入会慢时间阈值
     *
     * @var int
     */
    public $joinSlowThreshold;

    /**
     * @description 请求ID
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'joinFastSuccessRate' => 'JoinFastSuccessRate',
        'joinSlowThreshold'   => 'JoinSlowThreshold',
        'requestId'           => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->joinFastSuccessRate) {
            $res['JoinFastSuccessRate'] = $this->joinFastSuccessRate;
        }
        if (null !== $this->joinSlowThreshold) {
            $res['JoinSlowThreshold'] = $this->joinSlowThreshold;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeChannelJoinInfoResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['JoinFastSuccessRate'])) {
            $model->joinFastSuccessRate = $map['JoinFastSuccessRate'];
        }
        if (isset($map['JoinSlowThreshold'])) {
            $model->joinSlowThreshold = $map['JoinSlowThreshold'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
