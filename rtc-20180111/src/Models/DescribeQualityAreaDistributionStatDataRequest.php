<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models;

use AlibabaCloud\Tea\Model;

class DescribeQualityAreaDistributionStatDataRequest extends Model
{
    /**
     * @description APP ID
     *
     * This parameter is required.
     *
     * @example 0rbd****
     *
     * @var string
     */
    public $appId;

    /**
     * @description This parameter is required.
     *
     * @example 1615910399
     *
     * @var int
     */
    public $endDate;

    /**
     * @example 中国
     *
     * @var string
     */
    public $parentArea;

    /**
     * @description This parameter is required.
     *
     * @example 1615824000
     *
     * @var int
     */
    public $startDate;
    protected $_name = [
        'appId' => 'AppId',
        'endDate' => 'EndDate',
        'parentArea' => 'ParentArea',
        'startDate' => 'StartDate',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->endDate) {
            $res['EndDate'] = $this->endDate;
        }
        if (null !== $this->parentArea) {
            $res['ParentArea'] = $this->parentArea;
        }
        if (null !== $this->startDate) {
            $res['StartDate'] = $this->startDate;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeQualityAreaDistributionStatDataRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['EndDate'])) {
            $model->endDate = $map['EndDate'];
        }
        if (isset($map['ParentArea'])) {
            $model->parentArea = $map['ParentArea'];
        }
        if (isset($map['StartDate'])) {
            $model->startDate = $map['StartDate'];
        }

        return $model;
    }
}
