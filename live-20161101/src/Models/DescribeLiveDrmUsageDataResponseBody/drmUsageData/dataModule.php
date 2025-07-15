<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveDrmUsageDataResponseBody\drmUsageData;

use AlibabaCloud\Tea\Model;

class dataModule extends Model
{
    /**
     * @description The number of times DRM-encrypted live streams are requested.
     *
     * @example 1
     *
     * @var int
     */
    public $count;

    /**
     * @description The domain name. If the value of SplitBy includes domain, the returned data is grouped by domain name.
     *
     * @example example.com
     *
     * @var string
     */
    public $domain;

    /**
     * @description The DRM type. If the value of SplitBy includes drm_type, the returned data is grouped by DRM type.
     *
     * @example Widevine
     *
     * @var string
     */
    public $drmType;

    /**
     * @description The ID of the region. If the value of SplitBy includes region, the returned data is grouped by region.
     *
     * @example cn-beijing
     *
     * @var string
     */
    public $region;

    /**
     * @description The timestamp of the returned data.
     *
     * @example 2021-05-01T16:00:00Z
     *
     * @var string
     */
    public $timeStamp;
    protected $_name = [
        'count' => 'Count',
        'domain' => 'Domain',
        'drmType' => 'DrmType',
        'region' => 'Region',
        'timeStamp' => 'TimeStamp',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }
        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }
        if (null !== $this->drmType) {
            $res['DrmType'] = $this->drmType;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->timeStamp) {
            $res['TimeStamp'] = $this->timeStamp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dataModule
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }
        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }
        if (isset($map['DrmType'])) {
            $model->drmType = $map['DrmType'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['TimeStamp'])) {
            $model->timeStamp = $map['TimeStamp'];
        }

        return $model;
    }
}
