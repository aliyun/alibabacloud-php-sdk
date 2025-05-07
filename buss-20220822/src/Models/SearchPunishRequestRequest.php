<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Buss\V20220822\Models;

use AlibabaCloud\Dara\Model;

class SearchPunishRequestRequest extends Model
{
    /**
     * @var string[]
     */
    public $antiStatuses;

    /**
     * @var string[]
     */
    public $bussinessCodes;

    /**
     * @var string
     */
    public $class;

    /**
     * @var int
     */
    public $endDate;

    /**
     * @var string[]
     */
    public $eventCodes;

    /**
     * @var string
     */
    public $extRequestId;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $idType;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var int
     */
    public $page;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $punishDomain;

    /**
     * @var string
     */
    public $punishIp;

    /**
     * @var string[]
     */
    public $punishStatuses;

    /**
     * @var string
     */
    public $punishUrl;

    /**
     * @var string
     */
    public $punishUrlFull;

    /**
     * @var string[]
     */
    public $sourceCodes;

    /**
     * @var int
     */
    public $startDate;

    /**
     * @var string[]
     */
    public $userIds;
    protected $_name = [
        'antiStatuses' => 'AntiStatuses',
        'bussinessCodes' => 'BussinessCodes',
        'class' => 'Class',
        'endDate' => 'EndDate',
        'eventCodes' => 'EventCodes',
        'extRequestId' => 'ExtRequestId',
        'id' => 'Id',
        'idType' => 'IdType',
        'instanceId' => 'InstanceId',
        'page' => 'Page',
        'pageSize' => 'PageSize',
        'punishDomain' => 'PunishDomain',
        'punishIp' => 'PunishIp',
        'punishStatuses' => 'PunishStatuses',
        'punishUrl' => 'PunishUrl',
        'punishUrlFull' => 'PunishUrlFull',
        'sourceCodes' => 'SourceCodes',
        'startDate' => 'StartDate',
        'userIds' => 'UserIds',
    ];

    public function validate()
    {
        if (\is_array($this->antiStatuses)) {
            Model::validateArray($this->antiStatuses);
        }
        if (\is_array($this->bussinessCodes)) {
            Model::validateArray($this->bussinessCodes);
        }
        if (\is_array($this->eventCodes)) {
            Model::validateArray($this->eventCodes);
        }
        if (\is_array($this->punishStatuses)) {
            Model::validateArray($this->punishStatuses);
        }
        if (\is_array($this->sourceCodes)) {
            Model::validateArray($this->sourceCodes);
        }
        if (\is_array($this->userIds)) {
            Model::validateArray($this->userIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->antiStatuses) {
            if (\is_array($this->antiStatuses)) {
                $res['AntiStatuses'] = [];
                $n1 = 0;
                foreach ($this->antiStatuses as $item1) {
                    $res['AntiStatuses'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->bussinessCodes) {
            if (\is_array($this->bussinessCodes)) {
                $res['BussinessCodes'] = [];
                $n1 = 0;
                foreach ($this->bussinessCodes as $item1) {
                    $res['BussinessCodes'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->class) {
            $res['Class'] = $this->class;
        }

        if (null !== $this->endDate) {
            $res['EndDate'] = $this->endDate;
        }

        if (null !== $this->eventCodes) {
            if (\is_array($this->eventCodes)) {
                $res['EventCodes'] = [];
                $n1 = 0;
                foreach ($this->eventCodes as $item1) {
                    $res['EventCodes'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->extRequestId) {
            $res['ExtRequestId'] = $this->extRequestId;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->idType) {
            $res['IdType'] = $this->idType;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->page) {
            $res['Page'] = $this->page;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->punishDomain) {
            $res['PunishDomain'] = $this->punishDomain;
        }

        if (null !== $this->punishIp) {
            $res['PunishIp'] = $this->punishIp;
        }

        if (null !== $this->punishStatuses) {
            if (\is_array($this->punishStatuses)) {
                $res['PunishStatuses'] = [];
                $n1 = 0;
                foreach ($this->punishStatuses as $item1) {
                    $res['PunishStatuses'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->punishUrl) {
            $res['PunishUrl'] = $this->punishUrl;
        }

        if (null !== $this->punishUrlFull) {
            $res['PunishUrlFull'] = $this->punishUrlFull;
        }

        if (null !== $this->sourceCodes) {
            if (\is_array($this->sourceCodes)) {
                $res['SourceCodes'] = [];
                $n1 = 0;
                foreach ($this->sourceCodes as $item1) {
                    $res['SourceCodes'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->startDate) {
            $res['StartDate'] = $this->startDate;
        }

        if (null !== $this->userIds) {
            if (\is_array($this->userIds)) {
                $res['UserIds'] = [];
                $n1 = 0;
                foreach ($this->userIds as $item1) {
                    $res['UserIds'][$n1++] = $item1;
                }
            }
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
        if (isset($map['AntiStatuses'])) {
            if (!empty($map['AntiStatuses'])) {
                $model->antiStatuses = [];
                $n1 = 0;
                foreach ($map['AntiStatuses'] as $item1) {
                    $model->antiStatuses[$n1++] = $item1;
                }
            }
        }

        if (isset($map['BussinessCodes'])) {
            if (!empty($map['BussinessCodes'])) {
                $model->bussinessCodes = [];
                $n1 = 0;
                foreach ($map['BussinessCodes'] as $item1) {
                    $model->bussinessCodes[$n1++] = $item1;
                }
            }
        }

        if (isset($map['Class'])) {
            $model->class = $map['Class'];
        }

        if (isset($map['EndDate'])) {
            $model->endDate = $map['EndDate'];
        }

        if (isset($map['EventCodes'])) {
            if (!empty($map['EventCodes'])) {
                $model->eventCodes = [];
                $n1 = 0;
                foreach ($map['EventCodes'] as $item1) {
                    $model->eventCodes[$n1++] = $item1;
                }
            }
        }

        if (isset($map['ExtRequestId'])) {
            $model->extRequestId = $map['ExtRequestId'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['IdType'])) {
            $model->idType = $map['IdType'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['Page'])) {
            $model->page = $map['Page'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['PunishDomain'])) {
            $model->punishDomain = $map['PunishDomain'];
        }

        if (isset($map['PunishIp'])) {
            $model->punishIp = $map['PunishIp'];
        }

        if (isset($map['PunishStatuses'])) {
            if (!empty($map['PunishStatuses'])) {
                $model->punishStatuses = [];
                $n1 = 0;
                foreach ($map['PunishStatuses'] as $item1) {
                    $model->punishStatuses[$n1++] = $item1;
                }
            }
        }

        if (isset($map['PunishUrl'])) {
            $model->punishUrl = $map['PunishUrl'];
        }

        if (isset($map['PunishUrlFull'])) {
            $model->punishUrlFull = $map['PunishUrlFull'];
        }

        if (isset($map['SourceCodes'])) {
            if (!empty($map['SourceCodes'])) {
                $model->sourceCodes = [];
                $n1 = 0;
                foreach ($map['SourceCodes'] as $item1) {
                    $model->sourceCodes[$n1++] = $item1;
                }
            }
        }

        if (isset($map['StartDate'])) {
            $model->startDate = $map['StartDate'];
        }

        if (isset($map['UserIds'])) {
            if (!empty($map['UserIds'])) {
                $model->userIds = [];
                $n1 = 0;
                foreach ($map['UserIds'] as $item1) {
                    $model->userIds[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
