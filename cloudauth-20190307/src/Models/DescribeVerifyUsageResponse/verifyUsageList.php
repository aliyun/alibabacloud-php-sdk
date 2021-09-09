<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauth\V20190307\Models\DescribeVerifyUsageResponse;

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
    public $totalCount;

    /**
     * @var int
     */
    public $passCount;

    /**
     * @var int
     */
    public $failCount;
    protected $_name = [
        'bizType'    => 'BizType',
        'date'       => 'Date',
        'totalCount' => 'TotalCount',
        'passCount'  => 'PassCount',
        'failCount'  => 'FailCount',
    ];

    public function validate()
    {
        Model::validateRequired('bizType', $this->bizType, true);
        Model::validateRequired('date', $this->date, true);
        Model::validateRequired('totalCount', $this->totalCount, true);
        Model::validateRequired('passCount', $this->passCount, true);
        Model::validateRequired('failCount', $this->failCount, true);
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
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }
        if (null !== $this->passCount) {
            $res['PassCount'] = $this->passCount;
        }
        if (null !== $this->failCount) {
            $res['FailCount'] = $this->failCount;
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
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['PassCount'])) {
            $model->passCount = $map['PassCount'];
        }
        if (isset($map['FailCount'])) {
            $model->failCount = $map['FailCount'];
        }

        return $model;
    }
}
