<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\GEMP\V20210413\Models;

use AlibabaCloud\Tea\Model;

class ListSourceEventsRequest extends Model
{
    /**
     * @example C4BE3837-1A13-413B-A225-2C88188E8A43
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description 2020-09-18 13:00:00
     *
     * @example 2020-10-01 23:59:59
     *
     * @var string
     */
    public $endTime;

    /**
     * @example 1
     *
     * @var int
     */
    public $instanceId;

    /**
     * @example INCIDENT
     *
     * @var string
     */
    public $instanceType;

    /**
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @example 20
     *
     * @var int
     */
    public $pageSize;

    /**
     * @example 9223370410626682599-1344383-78954515-1-0a6e01a1701447fd9ef18b079edd2c6d
     *
     * @var string
     */
    public $startRowKey;

    /**
     * @description 2020-09-10 13:00:00
     *
     * @example 2020-10-01 00:00:00
     *
     * @var string
     */
    public $startTime;

    /**
     * @example 9223370410626682599-1344383-78954515-1-0a6e01a1701447fd9ef18b079edd2c6d
     *
     * @var string
     */
    public $stopRowKey;
    protected $_name = [
        'clientToken'  => 'clientToken',
        'endTime'      => 'endTime',
        'instanceId'   => 'instanceId',
        'instanceType' => 'instanceType',
        'pageNumber'   => 'pageNumber',
        'pageSize'     => 'pageSize',
        'startRowKey'  => 'startRowKey',
        'startTime'    => 'startTime',
        'stopRowKey'   => 'stopRowKey',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['clientToken'] = $this->clientToken;
        }
        if (null !== $this->endTime) {
            $res['endTime'] = $this->endTime;
        }
        if (null !== $this->instanceId) {
            $res['instanceId'] = $this->instanceId;
        }
        if (null !== $this->instanceType) {
            $res['instanceType'] = $this->instanceType;
        }
        if (null !== $this->pageNumber) {
            $res['pageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['pageSize'] = $this->pageSize;
        }
        if (null !== $this->startRowKey) {
            $res['startRowKey'] = $this->startRowKey;
        }
        if (null !== $this->startTime) {
            $res['startTime'] = $this->startTime;
        }
        if (null !== $this->stopRowKey) {
            $res['stopRowKey'] = $this->stopRowKey;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListSourceEventsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['clientToken'])) {
            $model->clientToken = $map['clientToken'];
        }
        if (isset($map['endTime'])) {
            $model->endTime = $map['endTime'];
        }
        if (isset($map['instanceId'])) {
            $model->instanceId = $map['instanceId'];
        }
        if (isset($map['instanceType'])) {
            $model->instanceType = $map['instanceType'];
        }
        if (isset($map['pageNumber'])) {
            $model->pageNumber = $map['pageNumber'];
        }
        if (isset($map['pageSize'])) {
            $model->pageSize = $map['pageSize'];
        }
        if (isset($map['startRowKey'])) {
            $model->startRowKey = $map['startRowKey'];
        }
        if (isset($map['startTime'])) {
            $model->startTime = $map['startTime'];
        }
        if (isset($map['stopRowKey'])) {
            $model->stopRowKey = $map['stopRowKey'];
        }

        return $model;
    }
}
