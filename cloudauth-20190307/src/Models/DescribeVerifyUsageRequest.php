<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauth\V20190307\Models;

use AlibabaCloud\Tea\Model;

class DescribeVerifyUsageRequest extends Model
{
    /**
     * @var string
     */
    public $sourceIp;

    /**
     * @var string
     */
    public $bizType;

    /**
     * @var string
     */
    public $startDate;

    /**
     * @var string
     */
    public $endDate;
    protected $_name = [
        'sourceIp'  => 'SourceIp',
        'bizType'   => 'BizType',
        'startDate' => 'StartDate',
        'endDate'   => 'EndDate',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->sourceIp) {
            $res['SourceIp'] = $this->sourceIp;
        }
        if (null !== $this->bizType) {
            $res['BizType'] = $this->bizType;
        }
        if (null !== $this->startDate) {
            $res['StartDate'] = $this->startDate;
        }
        if (null !== $this->endDate) {
            $res['EndDate'] = $this->endDate;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeVerifyUsageRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SourceIp'])) {
            $model->sourceIp = $map['SourceIp'];
        }
        if (isset($map['BizType'])) {
            $model->bizType = $map['BizType'];
        }
        if (isset($map['StartDate'])) {
            $model->startDate = $map['StartDate'];
        }
        if (isset($map['EndDate'])) {
            $model->endDate = $map['EndDate'];
        }

        return $model;
    }
}
