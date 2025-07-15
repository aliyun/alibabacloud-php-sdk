<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveDomainRecordUsageDataResponseBody\recordUsageData;

use AlibabaCloud\Tea\Model;

class dataModule extends Model
{
    /**
     * @description The number of peak channels.
     *
     * @example 1
     *
     * @var int
     */
    public $count;

    /**
     * @description The main streaming domain. This parameter is returned if the value of the request parameter SplitBy contains `domain`.
     *
     * @example example.com
     *
     * @var string
     */
    public $domain;

    /**
     * @description The recording length. Unit: seconds.
     *
     * @example 3560
     *
     * @var int
     */
    public $duration;

    /**
     * @description The region ID.
     *
     * @example cn-shanghai
     *
     * @var string
     */
    public $region;

    /**
     * @description The time when recording started.
     *
     * @example 2021-05-10T20:00:00Z
     *
     * @var string
     */
    public $timeStamp;

    /**
     * @description The recording file type. This parameter is returned if the value of the request parameter SplitBy contains `record_fmt`.
     *
     * @example MP4
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'count' => 'Count',
        'domain' => 'Domain',
        'duration' => 'Duration',
        'region' => 'Region',
        'timeStamp' => 'TimeStamp',
        'type' => 'Type',
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
        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->timeStamp) {
            $res['TimeStamp'] = $this->timeStamp;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
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
        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['TimeStamp'])) {
            $model->timeStamp = $map['TimeStamp'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
