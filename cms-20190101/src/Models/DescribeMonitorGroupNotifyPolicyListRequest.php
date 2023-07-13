<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models;

use AlibabaCloud\Tea\Model;

class DescribeMonitorGroupNotifyPolicyListRequest extends Model
{
    /**
     * @description The HTTP status code.
     *
     * >  The status code 200 indicates that the call was successful.
     * @example 6780****
     *
     * @var string
     */
    public $groupId;

    /**
     * @description The number of entries to return on each page. Default value: 10.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The timestamp that specifies the end of the time range to query.
     *
     * Unit: milliseconds.
     * @example 100
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The number of the page to return. Default value: 1.
     *
     * @example PauseNotify
     *
     * @var string
     */
    public $policyType;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'groupId'    => 'GroupId',
        'pageNumber' => 'PageNumber',
        'pageSize'   => 'PageSize',
        'policyType' => 'PolicyType',
        'regionId'   => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->policyType) {
            $res['PolicyType'] = $this->policyType;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeMonitorGroupNotifyPolicyListRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['PolicyType'])) {
            $model->policyType = $map['PolicyType'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
