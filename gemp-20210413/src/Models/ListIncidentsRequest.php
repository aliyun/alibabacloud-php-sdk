<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\GEMP\V20210413\Models;

use AlibabaCloud\Tea\Model;

class ListIncidentsRequest extends Model
{
    /**
     * @example FD200FAE-E98F-496E-BFE6-4CE61E59A2E1
     *
     * @var string
     */
    public $clientToken;

    /**
     * @example 2021-11-10 00:00:00
     *
     * @var string
     */
    public $createEndTime;

    /**
     * @example 2021-11-01 00:00:00
     *
     * @var string
     */
    public $createStartTime;

    /**
     * @example LOW
     *
     * @var string
     */
    public $effect;

    /**
     * @example P1
     *
     * @var string
     */
    public $incidentLevel;

    /**
     * @example ASSIGNED
     *
     * @var string
     */
    public $incidentStatus;

    /**
     * @example true
     *
     * @var int
     */
    public $me;

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
     * @example 12312
     *
     * @var int
     */
    public $relationServiceId;

    /**
     * @example sa
     *
     * @var string
     */
    public $ruleName;
    protected $_name = [
        'clientToken'       => 'clientToken',
        'createEndTime'     => 'createEndTime',
        'createStartTime'   => 'createStartTime',
        'effect'            => 'effect',
        'incidentLevel'     => 'incidentLevel',
        'incidentStatus'    => 'incidentStatus',
        'me'                => 'me',
        'pageNumber'        => 'pageNumber',
        'pageSize'          => 'pageSize',
        'relationServiceId' => 'relationServiceId',
        'ruleName'          => 'ruleName',
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
        if (null !== $this->createEndTime) {
            $res['createEndTime'] = $this->createEndTime;
        }
        if (null !== $this->createStartTime) {
            $res['createStartTime'] = $this->createStartTime;
        }
        if (null !== $this->effect) {
            $res['effect'] = $this->effect;
        }
        if (null !== $this->incidentLevel) {
            $res['incidentLevel'] = $this->incidentLevel;
        }
        if (null !== $this->incidentStatus) {
            $res['incidentStatus'] = $this->incidentStatus;
        }
        if (null !== $this->me) {
            $res['me'] = $this->me;
        }
        if (null !== $this->pageNumber) {
            $res['pageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['pageSize'] = $this->pageSize;
        }
        if (null !== $this->relationServiceId) {
            $res['relationServiceId'] = $this->relationServiceId;
        }
        if (null !== $this->ruleName) {
            $res['ruleName'] = $this->ruleName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListIncidentsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['clientToken'])) {
            $model->clientToken = $map['clientToken'];
        }
        if (isset($map['createEndTime'])) {
            $model->createEndTime = $map['createEndTime'];
        }
        if (isset($map['createStartTime'])) {
            $model->createStartTime = $map['createStartTime'];
        }
        if (isset($map['effect'])) {
            $model->effect = $map['effect'];
        }
        if (isset($map['incidentLevel'])) {
            $model->incidentLevel = $map['incidentLevel'];
        }
        if (isset($map['incidentStatus'])) {
            $model->incidentStatus = $map['incidentStatus'];
        }
        if (isset($map['me'])) {
            $model->me = $map['me'];
        }
        if (isset($map['pageNumber'])) {
            $model->pageNumber = $map['pageNumber'];
        }
        if (isset($map['pageSize'])) {
            $model->pageSize = $map['pageSize'];
        }
        if (isset($map['relationServiceId'])) {
            $model->relationServiceId = $map['relationServiceId'];
        }
        if (isset($map['ruleName'])) {
            $model->ruleName = $map['ruleName'];
        }

        return $model;
    }
}
