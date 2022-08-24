<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnWafUsageDataResponseBody\wafUsageData;

use AlibabaCloud\Tea\Model;

class wafUsageDataItem extends Model
{
    /**
     * @var int
     */
    public $accessCnt;

    /**
     * @var int
     */
    public $blockCnt;

    /**
     * @var string
     */
    public $domain;

    /**
     * @var int
     */
    public $observeCnt;

    /**
     * @var int
     */
    public $secCu;

    /**
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
