<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauth\V20190307\Models\DescribeVerifyUsageResponseBody;

use AlibabaCloud\Tea\Model;

class verifyUsageList extends Model
{
    /**
     * @var int
     */
    public $passCount;

    /**
     * @var int
     */
    public $failCount;

    /**
     * @var string
     */
    public $date;

    /**
     * @var int
     */
    public $totalCount;

    /**
     * @var string
     */
    public $bizType;
    protected $_name = [
        'passCount'  => 'PassCount',
        'failCount'  => 'FailCount',
        'date'       => 'Date',
        'totalCount' => 'TotalCount',
        'bizType'    => 'BizType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->passCount) {
            $res['PassCount'] = $this->passCount;
        }
        if (null !== $this->failCount) {
            $res['FailCount'] = $this->failCount;
        }
        if (null !== $this->date) {
            $res['Date'] = $this->date;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }
        if (null !== $this->bizType) {
            $res['BizType'] = $this->bizType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return verifyUsageList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PassCount'])) {
            $model->passCount = $map['PassCount'];
        }
        if (isset($map['FailCount'])) {
            $model->failCount = $map['FailCount'];
        }
        if (isset($map['Date'])) {
            $model->date = $map['Date'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['BizType'])) {
            $model->bizType = $map['BizType'];
        }

        return $model;
    }
}
