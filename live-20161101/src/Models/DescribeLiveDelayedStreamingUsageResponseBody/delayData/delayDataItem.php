<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveDelayedStreamingUsageResponseBody\delayData;

use AlibabaCloud\Tea\Model;

class delayDataItem extends Model
{
    /**
     * @description The domain name. If SplitBy is set to domain, the data returned is grouped by domain name.
     *
     * @example example.com
     *
     * @var string
     */
    public $domainName;

    /**
     * @description The duration of stream delay.
     *
     * @example 84
     *
     * @var int
     */
    public $duration;

    /**
     * @description The ID of the region. If SplitBy is set to region, the data returned is grouped by region.
     *
     * @example cn-shanghai
     *
     * @var string
     */
    public $region;

    /**
     * @description The name of the stream. If SplitBy is set to stream, the data returned is grouped by stream.
     *
     * @example liveStream****
     *
     * @var string
     */
    public $streamName;

    /**
     * @description The timestamp of the data returned.
     *
     * @example 2022-10-10T20:00:00Z
     *
     * @var string
     */
    public $timeStamp;
    protected $_name = [
        'domainName' => 'DomainName',
        'duration' => 'Duration',
        'region' => 'Region',
        'streamName' => 'StreamName',
        'timeStamp' => 'TimeStamp',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->streamName) {
            $res['StreamName'] = $this->streamName;
        }
        if (null !== $this->timeStamp) {
            $res['TimeStamp'] = $this->timeStamp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return delayDataItem
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['StreamName'])) {
            $model->streamName = $map['StreamName'];
        }
        if (isset($map['TimeStamp'])) {
            $model->timeStamp = $map['TimeStamp'];
        }

        return $model;
    }
}
