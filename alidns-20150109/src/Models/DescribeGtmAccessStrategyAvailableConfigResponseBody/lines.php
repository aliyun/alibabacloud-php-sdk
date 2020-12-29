<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeGtmAccessStrategyAvailableConfigResponseBody;

use AlibabaCloud\Tea\Model;

class lines extends Model
{
    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $fatherCode;

    /**
     * @var string
     */
    public $lineCode;

    /**
     * @var string
     */
    public $groupName;

    /**
     * @var string
     */
    public $lineName;

    /**
     * @var string
     */
    public $groupCode;
    protected $_name = [
        'status'     => 'Status',
        'fatherCode' => 'FatherCode',
        'lineCode'   => 'LineCode',
        'groupName'  => 'GroupName',
        'lineName'   => 'LineName',
        'groupCode'  => 'GroupCode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->fatherCode) {
            $res['FatherCode'] = $this->fatherCode;
        }
        if (null !== $this->lineCode) {
            $res['LineCode'] = $this->lineCode;
        }
        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }
        if (null !== $this->lineName) {
            $res['LineName'] = $this->lineName;
        }
        if (null !== $this->groupCode) {
            $res['GroupCode'] = $this->groupCode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return lines
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['FatherCode'])) {
            $model->fatherCode = $map['FatherCode'];
        }
        if (isset($map['LineCode'])) {
            $model->lineCode = $map['LineCode'];
        }
        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }
        if (isset($map['LineName'])) {
            $model->lineName = $map['LineName'];
        }
        if (isset($map['GroupCode'])) {
            $model->groupCode = $map['GroupCode'];
        }

        return $model;
    }
}
