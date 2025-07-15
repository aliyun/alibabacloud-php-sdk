<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeLivePushProxyUsageDataResponseBody\pushProxyData;

use AlibabaCloud\Tea\Model;

class pushProxyDataItem extends Model
{
    /**
     * @description The domain name. If the value of SplitBy includes domain, the returned data is grouped by domain name.
     *
     * @example example.com
     *
     * @var string
     */
    public $domainName;

    /**
     * @description The ID of the region. If the value of SplitBy includes region, the returned data is grouped by region.
     *
     * @example cn-beijing
     *
     * @var string
     */
    public $region;

    /**
     * @description The peak number of live center stream relay channels.
     *
     * @example 8
     *
     * @var int
     */
    public $streamCount;

    /**
     * @description The timestamp of the returned data.
     *
     * @example 2022-10-10T20:00:00Z
     *
     * @var string
     */
    public $timeStamp;
    protected $_name = [
        'domainName' => 'DomainName',
        'region' => 'Region',
        'streamCount' => 'StreamCount',
        'timeStamp' => 'TimeStamp',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->streamCount) {
            $res['StreamCount'] = $this->streamCount;
        }
        if (null !== $this->timeStamp) {
            $res['TimeStamp'] = $this->timeStamp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return pushProxyDataItem
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['StreamCount'])) {
            $model->streamCount = $map['StreamCount'];
        }
        if (isset($map['TimeStamp'])) {
            $model->timeStamp = $map['TimeStamp'];
        }

        return $model;
    }
}
