<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\GetCheckSummaryResponseBody;

use AlibabaCloud\Tea\Model;

class overallItemStatistic extends Model
{
    /**
     * @description The number of check items supported by the system.
     *
     * @example 620
     *
     * @var int
     */
    public $releaseCount;

    /**
     * @description The number of check items available to you.
     *
     * @example 25
     *
     * @var int
     */
    public $resultCount;
    protected $_name = [
        'releaseCount' => 'ReleaseCount',
        'resultCount'  => 'ResultCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->releaseCount) {
            $res['ReleaseCount'] = $this->releaseCount;
        }
        if (null !== $this->resultCount) {
            $res['ResultCount'] = $this->resultCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return overallItemStatistic
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ReleaseCount'])) {
            $model->releaseCount = $map['ReleaseCount'];
        }
        if (isset($map['ResultCount'])) {
            $model->resultCount = $map['ResultCount'];
        }

        return $model;
    }
}
