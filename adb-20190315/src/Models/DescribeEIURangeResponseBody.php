<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20190315\Models;

use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeEIURangeResponseBody\EIUInfo;
use AlibabaCloud\Tea\Model;

class DescribeEIURangeResponseBody extends Model
{
    /**
     * @description The queried information about the number of EIUs.
     *
     * @var EIUInfo
     */
    public $EIUInfo;

    /**
     * @description The request ID.
     *
     * @example D65A809F-34CE-4550-9BC1-0ED21ETG380
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'EIUInfo'   => 'EIUInfo',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->EIUInfo) {
            $res['EIUInfo'] = null !== $this->EIUInfo ? $this->EIUInfo->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeEIURangeResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EIUInfo'])) {
            $model->EIUInfo = EIUInfo::fromMap($map['EIUInfo']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
