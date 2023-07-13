<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\Tea\Model;

class QuerySolutionDeviceGroupPageRequest extends Model
{
    /**
     * @example test
     *
     * @var string
     */
    public $fuzzyGroupName;

    /**
     * @example iot_instc_pu****_c*-v64********
     *
     * @var string
     */
    public $iotInstanceId;

    /**
     * @example 1
     *
     * @var int
     */
    public $pageId;

    /**
     * @example 20
     *
     * @var int
     */
    public $pageSize;

    /**
     * @example 4de2c367****8c585e5992**
     *
     * @var string
     */
    public $projectCode;
    protected $_name = [
        'fuzzyGroupName' => 'FuzzyGroupName',
        'iotInstanceId'  => 'IotInstanceId',
        'pageId'         => 'PageId',
        'pageSize'       => 'PageSize',
        'projectCode'    => 'ProjectCode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->fuzzyGroupName) {
            $res['FuzzyGroupName'] = $this->fuzzyGroupName;
        }
        if (null !== $this->iotInstanceId) {
            $res['IotInstanceId'] = $this->iotInstanceId;
        }
        if (null !== $this->pageId) {
            $res['PageId'] = $this->pageId;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->projectCode) {
            $res['ProjectCode'] = $this->projectCode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QuerySolutionDeviceGroupPageRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FuzzyGroupName'])) {
            $model->fuzzyGroupName = $map['FuzzyGroupName'];
        }
        if (isset($map['IotInstanceId'])) {
            $model->iotInstanceId = $map['IotInstanceId'];
        }
        if (isset($map['PageId'])) {
            $model->pageId = $map['PageId'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['ProjectCode'])) {
            $model->projectCode = $map['ProjectCode'];
        }

        return $model;
    }
}
