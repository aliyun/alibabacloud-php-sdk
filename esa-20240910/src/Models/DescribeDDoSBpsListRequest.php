<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Tea\Model;

class DescribeDDoSBpsListRequest extends Model
{
    /**
     * @description Protection area, defaulting to global if not filled. When specified, the values are as follows:
     *
     * - domestic: Mainland China.
     *
     * - overseas: Global (excluding Mainland China).
     *
     * - global: Global.
     *
     * @example global
     *
     * @var string
     */
    public $coverage;

    /**
     * @description The end time for fetching data. In ISO8601 format, using UTC+0, formatted as: yyyy-MM-ddTHH:mm:ssZ.
     *
     * The end time must be later than the start time, and the span between start and end times should not exceed 31 days.
     *
     * @example 2023-05-18T06:19:42Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @description Site ID, which can be obtained by calling the [ListSites](~~ListSites~~) API.
     *
     * This parameter is required.
     *
     * @example 70966210986912
     *
     * @var int
     */
    public $siteId;

    /**
     * @description The start time for fetching data, in ISO8601 format, using UTC+0, formatted as: yyyy-MM-ddTHH:mm:ssZ.
     *
     * This parameter is required.
     *
     * @example 2023-05-14T17:00:00Z
     *
     * @var string
     */
    public $startTime;
    protected $_name = [
        'coverage' => 'Coverage',
        'endTime' => 'EndTime',
        'siteId' => 'SiteId',
        'startTime' => 'StartTime',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->coverage) {
            $res['Coverage'] = $this->coverage;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->siteId) {
            $res['SiteId'] = $this->siteId;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDDoSBpsListRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Coverage'])) {
            $model->coverage = $map['Coverage'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['SiteId'])) {
            $model->siteId = $map['SiteId'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
