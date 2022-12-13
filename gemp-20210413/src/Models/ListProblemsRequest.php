<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\GEMP\V20210413\Models;

use AlibabaCloud\Tea\Model;

class ListProblemsRequest extends Model
{
    /**
     * @example 1
     *
     * @var int
     */
    public $affectServiceId;

    /**
     * @example C4BE3837-1A13-413B-A225-2C88188E8A43
     *
     * @var string
     */
    public $clientToken;

    /**
     * @example 2020-03-05 15:50:59
     *
     * @var string
     */
    public $discoveryEndTime;

    /**
     * @example 2020-03-05 15:50:59
     *
     * @var string
     */
    public $discoveryStartTime;

    /**
     * @example 1
     *
     * @var int
     */
    public $mainHandlerId;

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
     * @example P2
     *
     * @var string
     */
    public $problemLevel;

    /**
     * @example HANDLING
     *
     * @var string
     */
    public $problemStatus;

    /**
     * @example RESPONSIBLE
     *
     * @var string
     */
    public $queryType;

    /**
     * @example 1
     *
     * @var int
     */
    public $repeaterId;

    /**
     * @example 2020-03-05 15:50:59
     *
     * @var string
     */
    public $restoreEndTime;

    /**
     * @example 2020-03-05 15:50:59
     *
     * @var string
     */
    public $restoreStartTime;

    /**
     * @example 1
     *
     * @var int
     */
    public $serviceGroupId;
    protected $_name = [
        'affectServiceId'    => 'affectServiceId',
        'clientToken'        => 'clientToken',
        'discoveryEndTime'   => 'discoveryEndTime',
        'discoveryStartTime' => 'discoveryStartTime',
        'mainHandlerId'      => 'mainHandlerId',
        'pageNumber'         => 'pageNumber',
        'pageSize'           => 'pageSize',
        'problemLevel'       => 'problemLevel',
        'problemStatus'      => 'problemStatus',
        'queryType'          => 'queryType',
        'repeaterId'         => 'repeaterId',
        'restoreEndTime'     => 'restoreEndTime',
        'restoreStartTime'   => 'restoreStartTime',
        'serviceGroupId'     => 'serviceGroupId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->affectServiceId) {
            $res['affectServiceId'] = $this->affectServiceId;
        }
        if (null !== $this->clientToken) {
            $res['clientToken'] = $this->clientToken;
        }
        if (null !== $this->discoveryEndTime) {
            $res['discoveryEndTime'] = $this->discoveryEndTime;
        }
        if (null !== $this->discoveryStartTime) {
            $res['discoveryStartTime'] = $this->discoveryStartTime;
        }
        if (null !== $this->mainHandlerId) {
            $res['mainHandlerId'] = $this->mainHandlerId;
        }
        if (null !== $this->pageNumber) {
            $res['pageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['pageSize'] = $this->pageSize;
        }
        if (null !== $this->problemLevel) {
            $res['problemLevel'] = $this->problemLevel;
        }
        if (null !== $this->problemStatus) {
            $res['problemStatus'] = $this->problemStatus;
        }
        if (null !== $this->queryType) {
            $res['queryType'] = $this->queryType;
        }
        if (null !== $this->repeaterId) {
            $res['repeaterId'] = $this->repeaterId;
        }
        if (null !== $this->restoreEndTime) {
            $res['restoreEndTime'] = $this->restoreEndTime;
        }
        if (null !== $this->restoreStartTime) {
            $res['restoreStartTime'] = $this->restoreStartTime;
        }
        if (null !== $this->serviceGroupId) {
            $res['serviceGroupId'] = $this->serviceGroupId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListProblemsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['affectServiceId'])) {
            $model->affectServiceId = $map['affectServiceId'];
        }
        if (isset($map['clientToken'])) {
            $model->clientToken = $map['clientToken'];
        }
        if (isset($map['discoveryEndTime'])) {
            $model->discoveryEndTime = $map['discoveryEndTime'];
        }
        if (isset($map['discoveryStartTime'])) {
            $model->discoveryStartTime = $map['discoveryStartTime'];
        }
        if (isset($map['mainHandlerId'])) {
            $model->mainHandlerId = $map['mainHandlerId'];
        }
        if (isset($map['pageNumber'])) {
            $model->pageNumber = $map['pageNumber'];
        }
        if (isset($map['pageSize'])) {
            $model->pageSize = $map['pageSize'];
        }
        if (isset($map['problemLevel'])) {
            $model->problemLevel = $map['problemLevel'];
        }
        if (isset($map['problemStatus'])) {
            $model->problemStatus = $map['problemStatus'];
        }
        if (isset($map['queryType'])) {
            $model->queryType = $map['queryType'];
        }
        if (isset($map['repeaterId'])) {
            $model->repeaterId = $map['repeaterId'];
        }
        if (isset($map['restoreEndTime'])) {
            $model->restoreEndTime = $map['restoreEndTime'];
        }
        if (isset($map['restoreStartTime'])) {
            $model->restoreStartTime = $map['restoreStartTime'];
        }
        if (isset($map['serviceGroupId'])) {
            $model->serviceGroupId = $map['serviceGroupId'];
        }

        return $model;
    }
}
