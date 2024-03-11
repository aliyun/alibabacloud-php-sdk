<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vdc\V20201214\Models;

use AlibabaCloud\Tea\Model;

class DescribeUsageAreaDistributionStatDataRequest extends Model
{
    /**
     * @example 0rbd****
     *
     * @var string
     */
    public $appId;

    /**
     * @example 1615910399
     *
     * @var string
     */
    public $endDate;

    /**
     * @var string
     */
    public $parentArea;

    /**
     * @example 1615824000
     *
     * @var string
     */
    public $startDate;
    protected $_name = [
        'appId'      => 'AppId',
        'endDate'    => 'EndDate',
        'parentArea' => 'ParentArea',
        'startDate'  => 'StartDate',
    ];

    public function validate()
    {
    }

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
     * @return DescribeUsageAreaDistributionStatDataRequest
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
