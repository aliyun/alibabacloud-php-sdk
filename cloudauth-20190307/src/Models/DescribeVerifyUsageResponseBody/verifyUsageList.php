<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauth\V20190307\Models\DescribeVerifyUsageResponseBody;

use AlibabaCloud\Tea\Model;

class verifyUsageList extends Model
{
    /**
     * @var string
     */
    public $bizType;

    /**
     * @var string
     */
    public $date;

    /**
     * @var int
     */
    public $failCount;

    /**
     * @var int
     */
    public $passCount;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'bizType'    => 'BizType',
        'date'       => 'Date',
        'failCount'  => 'FailCount',
        'passCount'  => 'PassCount',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bizType) {
            $res['BizType'] = $this->bizType;
        }
        if (null !== $this->date) {
            $res['Date'] = $this->date;
        }
        if (null !== $this->failCount) {
            $res['FailCount'] = $this->failCount;
        }
        if (null !== $this->passCount) {
            $res['PassCount'] = $this->passCount;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
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
        if (isset($map['BizType'])) {
            $model->bizType = $map['BizType'];
        }
        if (isset($map['Date'])) {
            $model->date = $map['Date'];
        }
        if (isset($map['FailCount'])) {
            $model->failCount = $map['FailCount'];
        }
        if (isset($map['PassCount'])) {
            $model->passCount = $map['PassCount'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
