<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\GEMP\V20210413\Models;

use AlibabaCloud\Tea\Model;

class ListAlertsRequest extends Model
{
    /**
     * @example P1
     *
     * @var string
     */
    public $alertLevel;

    /**
     * @example 报警
     *
     * @var string
     */
    public $alertName;

    /**
     * @example 流转规则A
     *
     * @var string
     */
    public $alertSourceName;

    /**
     * @description 2020-09-10 21:00:00
     *
     * @example 2020-10-01 23:59:59
     *
     * @var string
     */
    public $endTime;

    /**
     * @var string
     */
    public $monitorSourceId;

    /**
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @example 1
     *
     * @var int
     */
    public $relatedServiceId;

    /**
     * @example zabbix
     *
     * @var string
     */
    public $ruleName;

    /**
     * @description 2020-09-10 13:00:00
     *
     * @example 2020-10-01 00:00:00
     *
     * @var string
     */
    public $startTime;
    protected $_name = [
        'alertLevel'       => 'alertLevel',
        'alertName'        => 'alertName',
        'alertSourceName'  => 'alertSourceName',
        'endTime'          => 'endTime',
        'monitorSourceId'  => 'monitorSourceId',
        'pageNumber'       => 'pageNumber',
        'pageSize'         => 'pageSize',
        'relatedServiceId' => 'relatedServiceId',
        'ruleName'         => 'ruleName',
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
        if (null !== $this->monitorSourceId) {
            $res['monitorSourceId'] = $this->monitorSourceId;
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
        if (null !== $this->ruleName) {
            $res['ruleName'] = $this->ruleName;
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
        if (isset($map['monitorSourceId'])) {
            $model->monitorSourceId = $map['monitorSourceId'];
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
        if (isset($map['ruleName'])) {
            $model->ruleName = $map['ruleName'];
        }
        if (isset($map['startTime'])) {
            $model->startTime = $map['startTime'];
        }

        return $model;
    }
}
