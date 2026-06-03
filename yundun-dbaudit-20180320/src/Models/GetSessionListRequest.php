<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundundbaudit\V20180320\Models;

use AlibabaCloud\Dara\Model;

class GetSessionListRequest extends Model
{
    /**
     * @var string[]
     */
    public $actionList;

    /**
     * @var string
     */
    public $beginDate;

    /**
     * @var string[]
     */
    public $clientIpList;

    /**
     * @var string[]
     */
    public $clientProgramList;

    /**
     * @var string[]
     */
    public $dbHostList;

    /**
     * @var int
     */
    public $dbId;

    /**
     * @var string[]
     */
    public $dbUserList;

    /**
     * @var string
     */
    public $endDate;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $lang;

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
    public $regionId;

    /**
     * @var string
     */
    public $sessionId;
    protected $_name = [
        'actionList' => 'ActionList',
        'beginDate' => 'BeginDate',
        'clientIpList' => 'ClientIpList',
        'clientProgramList' => 'ClientProgramList',
        'dbHostList' => 'DbHostList',
        'dbId' => 'DbId',
        'dbUserList' => 'DbUserList',
        'endDate' => 'EndDate',
        'instanceId' => 'InstanceId',
        'lang' => 'Lang',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'regionId' => 'RegionId',
        'sessionId' => 'SessionId',
    ];

    public function validate()
    {
        if (\is_array($this->actionList)) {
            Model::validateArray($this->actionList);
        }
        if (\is_array($this->clientIpList)) {
            Model::validateArray($this->clientIpList);
        }
        if (\is_array($this->clientProgramList)) {
            Model::validateArray($this->clientProgramList);
        }
        if (\is_array($this->dbHostList)) {
            Model::validateArray($this->dbHostList);
        }
        if (\is_array($this->dbUserList)) {
            Model::validateArray($this->dbUserList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->actionList) {
            if (\is_array($this->actionList)) {
                $res['ActionList'] = [];
                $n1 = 0;
                foreach ($this->actionList as $item1) {
                    $res['ActionList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->beginDate) {
            $res['BeginDate'] = $this->beginDate;
        }

        if (null !== $this->clientIpList) {
            if (\is_array($this->clientIpList)) {
                $res['ClientIpList'] = [];
                $n1 = 0;
                foreach ($this->clientIpList as $item1) {
                    $res['ClientIpList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->clientProgramList) {
            if (\is_array($this->clientProgramList)) {
                $res['ClientProgramList'] = [];
                $n1 = 0;
                foreach ($this->clientProgramList as $item1) {
                    $res['ClientProgramList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->dbHostList) {
            if (\is_array($this->dbHostList)) {
                $res['DbHostList'] = [];
                $n1 = 0;
                foreach ($this->dbHostList as $item1) {
                    $res['DbHostList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->dbId) {
            $res['DbId'] = $this->dbId;
        }

        if (null !== $this->dbUserList) {
            if (\is_array($this->dbUserList)) {
                $res['DbUserList'] = [];
                $n1 = 0;
                foreach ($this->dbUserList as $item1) {
                    $res['DbUserList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->endDate) {
            $res['EndDate'] = $this->endDate;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }

        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->sessionId) {
            $res['SessionId'] = $this->sessionId;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ActionList'])) {
            if (!empty($map['ActionList'])) {
                $model->actionList = [];
                $n1 = 0;
                foreach ($map['ActionList'] as $item1) {
                    $model->actionList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['BeginDate'])) {
            $model->beginDate = $map['BeginDate'];
        }

        if (isset($map['ClientIpList'])) {
            if (!empty($map['ClientIpList'])) {
                $model->clientIpList = [];
                $n1 = 0;
                foreach ($map['ClientIpList'] as $item1) {
                    $model->clientIpList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['ClientProgramList'])) {
            if (!empty($map['ClientProgramList'])) {
                $model->clientProgramList = [];
                $n1 = 0;
                foreach ($map['ClientProgramList'] as $item1) {
                    $model->clientProgramList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['DbHostList'])) {
            if (!empty($map['DbHostList'])) {
                $model->dbHostList = [];
                $n1 = 0;
                foreach ($map['DbHostList'] as $item1) {
                    $model->dbHostList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['DbId'])) {
            $model->dbId = $map['DbId'];
        }

        if (isset($map['DbUserList'])) {
            if (!empty($map['DbUserList'])) {
                $model->dbUserList = [];
                $n1 = 0;
                foreach ($map['DbUserList'] as $item1) {
                    $model->dbUserList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['EndDate'])) {
            $model->endDate = $map['EndDate'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }

        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['SessionId'])) {
            $model->sessionId = $map['SessionId'];
        }

        return $model;
    }
}
