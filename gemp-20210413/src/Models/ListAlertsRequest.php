<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\GEMP\V20210413\Models;

use AlibabaCloud\Tea\Model;

class ListAlertsRequest extends Model
{
    /**
     * @description 报警等级 P1 P2 P3 P4
     *
     * @var string
     */
    public $alertLevel;

    /**
     * @description 报警名称
     *
     * @var string
     */
    public $alertName;

    /**
     * @description 报警来源
     *
     * @var string
     */
    public $alertSourceName;

    /**
     * @description 结束时间
     *
     * @var string
     */
    public $endTime;

    /**
     * @description 当前页
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description 页大小
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description 服务id
     *
     * @var int
     */
    public $relatedServiceId;

    /**
     * @description 开始时间
     *
     * @var string
     */
    public $startTime;
    protected $_name = [
        'alertLevel'       => 'alertLevel',
        'alertName'        => 'alertName',
        'alertSourceName'  => 'alertSourceName',
        'endTime'          => 'endTime',
        'pageNumber'       => 'pageNumber',
        'pageSize'         => 'pageSize',
        'relatedServiceId' => 'relatedServiceId',
        'startTime'        => 'startTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->alertLevel) {
            $res['alertLevel'] = $this->alertLevel;
        }
        if (null !== $this->alertName) {
            $res['alertName'] = $this->alertName;
        }
        if (null !== $this->alertSourceName) {
            $res['alertSourceName'] = $this->alertSourceName;
        }
        if (null !== $this->endTime) {
            $res['endTime'] = $this->endTime;
        }
        if (null !== $this->pageNumber) {
            $res['pageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['pageSize'] = $this->pageSize;
        }
        if (null !== $this->relatedServiceId) {
            $res['relatedServiceId'] = $this->relatedServiceId;
        }
        if (null !== $this->startTime) {
            $res['startTime'] = $this->startTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListAlertsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['alertLevel'])) {
            $model->alertLevel = $map['alertLevel'];
        }
        if (isset($map['alertName'])) {
            $model->alertName = $map['alertName'];
        }
        if (isset($map['alertSourceName'])) {
            $model->alertSourceName = $map['alertSourceName'];
        }
        if (isset($map['endTime'])) {
            $model->endTime = $map['endTime'];
        }
        if (isset($map['pageNumber'])) {
            $model->pageNumber = $map['pageNumber'];
        }
        if (isset($map['pageSize'])) {
            $model->pageSize = $map['pageSize'];
        }
        if (isset($map['relatedServiceId'])) {
            $model->relatedServiceId = $map['relatedServiceId'];
        }
        if (isset($map['startTime'])) {
            $model->startTime = $map['startTime'];
        }

        return $model;
    }
}
