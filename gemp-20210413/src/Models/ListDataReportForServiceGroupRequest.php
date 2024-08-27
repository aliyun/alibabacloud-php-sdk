<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\GEMP\V20210413\Models;

use AlibabaCloud\Tea\Model;

class ListDataReportForServiceGroupRequest extends Model
{
    /**
     * @example 2021-09-30
     *
     * @var string
     */
    public $endTime;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @example A服务组
     *
     * @var string
     */
    public $serviceGroupName;

    /**
     * @example 2021-09-09
     *
     * @var string
     */
    public $startTime;
    protected $_name = [
        'endTime'          => 'endTime',
        'pageNumber'       => 'pageNumber',
        'pageSize'         => 'pageSize',
        'serviceGroupName' => 'serviceGroupName',
        'startTime'        => 'startTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->endTime) {
            $res['endTime'] = $this->endTime;
        }
        if (null !== $this->pageNumber) {
            $res['pageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['pageSize'] = $this->pageSize;
        }
        if (null !== $this->serviceGroupName) {
            $res['serviceGroupName'] = $this->serviceGroupName;
        }
        if (null !== $this->startTime) {
            $res['startTime'] = $this->startTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListDataReportForServiceGroupRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['endTime'])) {
            $model->endTime = $map['endTime'];
        }
        if (isset($map['pageNumber'])) {
            $model->pageNumber = $map['pageNumber'];
        }
        if (isset($map['pageSize'])) {
            $model->pageSize = $map['pageSize'];
        }
        if (isset($map['serviceGroupName'])) {
            $model->serviceGroupName = $map['serviceGroupName'];
        }
        if (isset($map['startTime'])) {
            $model->startTime = $map['startTime'];
        }

        return $model;
    }
}
