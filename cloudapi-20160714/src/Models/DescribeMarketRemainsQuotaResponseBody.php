<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\Tea\Model;

class DescribeMarketRemainsQuotaResponseBody extends Model
{
    /**
     * @description The remaining quota.
     *
     * @example 1000
     *
     * @var int
     */
    public $remainsQuota;

    /**
     * @description The ID of the request.
     *
     * @example E7FE7172-AA75-5880-B6F7-C00893E9BC06
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'remainsQuota' => 'RemainsQuota',
        'requestId'    => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->remainsQuota) {
            $res['RemainsQuota'] = $this->remainsQuota;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeMarketRemainsQuotaResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RemainsQuota'])) {
            $model->remainsQuota = $map['RemainsQuota'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
