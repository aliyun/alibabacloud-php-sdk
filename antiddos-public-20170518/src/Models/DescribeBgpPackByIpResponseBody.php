<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Antiddospublic\V20170518\Models;

use AlibabaCloud\SDK\Antiddospublic\V20170518\Models\DescribeBgpPackByIpResponseBody\ddosbgpInfo;
use AlibabaCloud\Tea\Model;

class DescribeBgpPackByIpResponseBody extends Model
{
    /**
     * @var ddosbgpInfo
     */
    public $ddosbgpInfo;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'ddosbgpInfo' => 'DdosbgpInfo',
        'requestId'   => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ddosbgpInfo) {
            $res['DdosbgpInfo'] = null !== $this->ddosbgpInfo ? $this->ddosbgpInfo->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeBgpPackByIpResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DdosbgpInfo'])) {
            $model->ddosbgpInfo = ddosbgpInfo::fromMap($map['DdosbgpInfo']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
