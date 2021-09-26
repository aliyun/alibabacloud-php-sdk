<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundundbaudit\V20180320\Models;

use AlibabaCloud\Tea\Model;

class GetSessionListRequest extends Model
{
    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var int
     */
    public $dbId;

    /**
     * @var string
     */
    public $beginDate;

    /**
     * @var string
     */
    public $endDate;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $sessionId;

    /**
     * @var string[]
     */
    public $actionList;

    /**
     * @var string[]
     */
    public $clientIpList;

    /**
     * @var string[]
     */
    public $dbUserList;

    /**
     * @var string[]
     */
    public $dbHostList;

    /**
     * @var string[]
     */
    public $clientProgramList;
    protected $_name = [
        'regionId'          => 'RegionId',
        'instanceId'        => 'InstanceId',
        'dbId'              => 'DbId',
        'beginDate'         => 'BeginDate',
        'endDate'           => 'EndDate',
        'pageNumber'        => 'PageNumber',
        'pageSize'          => 'PageSize',
        'sessionId'         => 'SessionId',
        'actionList'        => 'ActionList',
        'clientIpList'      => 'ClientIpList',
        'dbUserList'        => 'DbUserList',
        'dbHostList'        => 'DbHostList',
        'clientProgramList' => 'ClientProgramList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->dbId) {
            $res['DbId'] = $this->dbId;
        }
        if (null !== $this->beginDate) {
            $res['BeginDate'] = $this->beginDate;
        }
        if (null !== $this->endDate) {
            $res['EndDate'] = $this->endDate;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->sessionId) {
            $res['SessionId'] = $this->sessionId;
        }
        if (null !== $this->actionList) {
            $res['ActionList'] = $this->actionList;
        }
        if (null !== $this->clientIpList) {
            $res['ClientIpList'] = $this->clientIpList;
        }
        if (null !== $this->dbUserList) {
            $res['DbUserList'] = $this->dbUserList;
        }
        if (null !== $this->dbHostList) {
            $res['DbHostList'] = $this->dbHostList;
        }
        if (null !== $this->clientProgramList) {
            $res['ClientProgramList'] = $this->clientProgramList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetSessionListRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['DbId'])) {
            $model->dbId = $map['DbId'];
        }
        if (isset($map['BeginDate'])) {
            $model->beginDate = $map['BeginDate'];
        }
        if (isset($map['EndDate'])) {
            $model->endDate = $map['EndDate'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['SessionId'])) {
            $model->sessionId = $map['SessionId'];
        }
        if (isset($map['ActionList'])) {
            if (!empty($map['ActionList'])) {
                $model->actionList = $map['ActionList'];
            }
        }
        if (isset($map['ClientIpList'])) {
            if (!empty($map['ClientIpList'])) {
                $model->clientIpList = $map['ClientIpList'];
            }
        }
        if (isset($map['DbUserList'])) {
            if (!empty($map['DbUserList'])) {
                $model->dbUserList = $map['DbUserList'];
            }
        }
        if (isset($map['DbHostList'])) {
            if (!empty($map['DbHostList'])) {
                $model->dbHostList = $map['DbHostList'];
            }
        }
        if (isset($map['ClientProgramList'])) {
            if (!empty($map['ClientProgramList'])) {
                $model->clientProgramList = $map['ClientProgramList'];
            }
        }

        return $model;
    }
}
