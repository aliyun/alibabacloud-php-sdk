<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnWafUsageDataResponseBody\wafUsageData;

use AlibabaCloud\Tea\Model;

class wafUsageDataItem extends Model
{
    /**
     * @description The number of blocked requests.
     *
     * @example 600
     *
     * @var int
     */
    public $accessCnt;

    /**
     * @description The number of allowed requests.
     *
     * @example 300
     *
     * @var int
     */
    public $blockCnt;

    /**
     * @description The domain name that you want to query. If you do not specify an accelerated domain name, all accelerated domain names are queried by default.
     *
     * @example example.com
     *
     * @var string
     */
    public $domain;

    /**
     * @description The end of the time range during which data was queried.
     *
     * @example 300
     *
     * @var int
     */
    public $observeCnt;

    /**
     * @description The time granularity for a query. Unit: seconds.
     *
     * The time granularity varies with the maximum time range per query. Valid values: 300 (5 minutes), 3600 (1 hour), and 86400 (1 day).
     * @example 50
     *
     * @var int
     */
    public $secCu;

    /**
     * @description The beginning of the time range during which data was queried.
     *
     * @example 2018-09-30T16:00:00Z
     *
     * @var string
     */
    public $timeStamp;
    protected $_name = [
        'accessCnt'  => 'AccessCnt',
        'blockCnt'   => 'BlockCnt',
        'domain'     => 'Domain',
        'observeCnt' => 'ObserveCnt',
        'secCu'      => 'SecCu',
        'timeStamp'  => 'TimeStamp',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessCnt) {
            $res['AccessCnt'] = $this->accessCnt;
        }
        if (null !== $this->blockCnt) {
            $res['BlockCnt'] = $this->blockCnt;
        }
        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }
        if (null !== $this->observeCnt) {
            $res['ObserveCnt'] = $this->observeCnt;
        }
        if (null !== $this->secCu) {
            $res['SecCu'] = $this->secCu;
        }
        if (null !== $this->timeStamp) {
            $res['TimeStamp'] = $this->timeStamp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return wafUsageDataItem
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccessCnt'])) {
            $model->accessCnt = $map['AccessCnt'];
        }
        if (isset($map['BlockCnt'])) {
            $model->blockCnt = $map['BlockCnt'];
        }
        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }
        if (isset($map['ObserveCnt'])) {
            $model->observeCnt = $map['ObserveCnt'];
        }
        if (isset($map['SecCu'])) {
            $model->secCu = $map['SecCu'];
        }
        if (isset($map['TimeStamp'])) {
            $model->timeStamp = $map['TimeStamp'];
        }

        return $model;
    }
}
