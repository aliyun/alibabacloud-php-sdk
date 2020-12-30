<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DDoSPro\V20170725\Models;

use AlibabaCloud\SDK\DDoSPro\V20170725\Models\DescribeDomainSecurityConfigResponseBody\ccInfo;
use AlibabaCloud\Tea\Model;

class DescribeDomainSecurityConfigResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var ccInfo
     */
    public $ccInfo;

    /**
     * @var bool
     */
    public $cnameEnable;

    /**
     * @var string
     */
    public $whiteList;

    /**
     * @var string
     */
    public $blackList;

    /**
     * @var int
     */
    public $cnameMode;
    protected $_name = [
        'requestId'   => 'RequestId',
        'ccInfo'      => 'CcInfo',
        'cnameEnable' => 'CnameEnable',
        'whiteList'   => 'WhiteList',
        'blackList'   => 'BlackList',
        'cnameMode'   => 'CnameMode',
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
        if (null !== $this->ccInfo) {
            $res['CcInfo'] = null !== $this->ccInfo ? $this->ccInfo->toMap() : null;
        }
        if (null !== $this->cnameEnable) {
            $res['CnameEnable'] = $this->cnameEnable;
        }
        if (null !== $this->whiteList) {
            $res['WhiteList'] = $this->whiteList;
        }
        if (null !== $this->blackList) {
            $res['BlackList'] = $this->blackList;
        }
        if (null !== $this->cnameMode) {
            $res['CnameMode'] = $this->cnameMode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDomainSecurityConfigResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['CcInfo'])) {
            $model->ccInfo = ccInfo::fromMap($map['CcInfo']);
        }
        if (isset($map['CnameEnable'])) {
            $model->cnameEnable = $map['CnameEnable'];
        }
        if (isset($map['WhiteList'])) {
            $model->whiteList = $map['WhiteList'];
        }
        if (isset($map['BlackList'])) {
            $model->blackList = $map['BlackList'];
        }
        if (isset($map['CnameMode'])) {
            $model->cnameMode = $map['CnameMode'];
        }

        return $model;
    }
}
