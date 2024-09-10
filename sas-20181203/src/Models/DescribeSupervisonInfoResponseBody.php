<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DescribeSupervisonInfoResponseBody extends Model
{
    /**
     * @description The time of the last system vulnerability scan. The value is a UNIX timestamp. Unit: milliseconds.
     *
     * @example 1721134553000
     *
     * @var int
     */
    public $latestScanTime;

    /**
     * @description The request ID.
     *
     * @example E10BAF1C-A6C5-51E2-866C-76D5922E****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'latestScanTime' => 'LatestScanTime',
        'requestId'      => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->latestScanTime) {
            $res['LatestScanTime'] = $this->latestScanTime;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeSupervisonInfoResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LatestScanTime'])) {
            $model->latestScanTime = $map['LatestScanTime'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
