<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models;

use AlibabaCloud\Tea\Model;

class DescribeIntranetAttributeResponseBody extends Model
{
    /**
     * @var int
     */
    public $intranetBandwidth;

    /**
     * @var string
     */
    public $bandwidthExpireTime;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $expireTime;
    protected $_name = [
        'intranetBandwidth'   => 'IntranetBandwidth',
        'bandwidthExpireTime' => 'BandwidthExpireTime',
        'requestId'           => 'RequestId',
        'expireTime'          => 'ExpireTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->intranetBandwidth) {
            $res['IntranetBandwidth'] = $this->intranetBandwidth;
        }
        if (null !== $this->bandwidthExpireTime) {
            $res['BandwidthExpireTime'] = $this->bandwidthExpireTime;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->expireTime) {
            $res['ExpireTime'] = $this->expireTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeIntranetAttributeResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IntranetBandwidth'])) {
            $model->intranetBandwidth = $map['IntranetBandwidth'];
        }
        if (isset($map['BandwidthExpireTime'])) {
            $model->bandwidthExpireTime = $map['BandwidthExpireTime'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ExpireTime'])) {
            $model->expireTime = $map['ExpireTime'];
        }

        return $model;
    }
}
