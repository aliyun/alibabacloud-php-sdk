<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Tea\Model;

class DescribeSuspEventOverviewResponseBody extends Model
{
    /**
     * @description The total number of alerts at the remind level.
     *
     * @example 3
     *
     * @var int
     */
    public $remindCount;

    /**
     * @description The ID of the request.
     *
     * @example 1CBAFFAB-B697-4049-A9B1-67E1FC5F****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The total number of alerts at the serious level.
     *
     * @example 0
     *
     * @var int
     */
    public $seriousCount;

    /**
     * @description The total number of alerts at the suspicious level.
     *
     * @example 3
     *
     * @var int
     */
    public $suspiciousCount;
    protected $_name = [
        'remindCount'     => 'RemindCount',
        'requestId'       => 'RequestId',
        'seriousCount'    => 'SeriousCount',
        'suspiciousCount' => 'SuspiciousCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->remindCount) {
            $res['RemindCount'] = $this->remindCount;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->seriousCount) {
            $res['SeriousCount'] = $this->seriousCount;
        }
        if (null !== $this->suspiciousCount) {
            $res['SuspiciousCount'] = $this->suspiciousCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeSuspEventOverviewResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RemindCount'])) {
            $model->remindCount = $map['RemindCount'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SeriousCount'])) {
            $model->seriousCount = $map['SeriousCount'];
        }
        if (isset($map['SuspiciousCount'])) {
            $model->suspiciousCount = $map['SuspiciousCount'];
        }

        return $model;
    }
}
