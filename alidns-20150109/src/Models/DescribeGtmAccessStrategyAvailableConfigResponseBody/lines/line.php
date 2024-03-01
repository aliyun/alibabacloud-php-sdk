<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeGtmAccessStrategyAvailableConfigResponseBody\lines;

use AlibabaCloud\Tea\Model;

class line extends Model
{
    /**
     * @description The code of the parent line. No value is returned if no parent line exists.
     *
     * @example telecom
     *
     * @var string
     */
    public $fatherCode;

    /**
     * @description The group number of the DNS request source.
     *
     * @example ISP
     *
     * @var string
     */
    public $groupCode;

    /**
     * @description The group name of the DNS request source.
     *
     * @example Mainland China
     *
     * @var string
     */
    public $groupName;

    /**
     * @description The code of the DNS request source.
     *
     * @example cn_telecom_hubei
     *
     * @var string
     */
    public $lineCode;

    /**
     * @description The name of the DNS request source.
     *
     * @example South China
     *
     * @var string
     */
    public $lineName;

    /**
     * @description The state of the line. Valid values:
     *
     *   **FORBIDDEN**: The line is unavailable.
     *   **OPTIONAL**: The line is available.
     *
     * @example FORBIDDEN
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'fatherCode' => 'FatherCode',
        'groupCode'  => 'GroupCode',
        'groupName'  => 'GroupName',
        'lineCode'   => 'LineCode',
        'lineName'   => 'LineName',
        'status'     => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->fatherCode) {
            $res['FatherCode'] = $this->fatherCode;
        }
        if (null !== $this->groupCode) {
            $res['GroupCode'] = $this->groupCode;
        }
        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }
        if (null !== $this->lineCode) {
            $res['LineCode'] = $this->lineCode;
        }
        if (null !== $this->lineName) {
            $res['LineName'] = $this->lineName;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return line
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FatherCode'])) {
            $model->fatherCode = $map['FatherCode'];
        }
        if (isset($map['GroupCode'])) {
            $model->groupCode = $map['GroupCode'];
        }
        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }
        if (isset($map['LineCode'])) {
            $model->lineCode = $map['LineCode'];
        }
        if (isset($map['LineName'])) {
            $model->lineName = $map['LineName'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
