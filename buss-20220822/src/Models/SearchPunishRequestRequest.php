<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Buss\V20220822\Models;

use AlibabaCloud\Tea\Model;

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
        'antiStatuses'   => 'AntiStatuses',
        'bussinessCodes' => 'BussinessCodes',
        'class'          => 'Class',
        'endDate'        => 'EndDate',
        'eventCodes'     => 'EventCodes',
        'extRequestId'   => 'ExtRequestId',
        'id'             => 'Id',
        'idType'         => 'IdType',
        'instanceId'     => 'InstanceId',
        'page'           => 'Page',
        'pageSize'       => 'PageSize',
        'punishDomain'   => 'PunishDomain',
        'punishIp'       => 'PunishIp',
        'punishStatuses' => 'PunishStatuses',
        'punishUrl'      => 'PunishUrl',
        'punishUrlFull'  => 'PunishUrlFull',
        'sourceCodes'    => 'SourceCodes',
        'startDate'      => 'StartDate',
        'userIds'        => 'UserIds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->antiStatuses) {
            $res['AntiStatuses'] = $this->antiStatuses;
        }
        if (null !== $this->bussinessCodes) {
            $res['BussinessCodes'] = $this->bussinessCodes;
        }
        if (null !== $this->class) {
            $res['Class'] = $this->class;
        }
        if (null !== $this->endDate) {
            $res['EndDate'] = $this->endDate;
        }
        if (null !== $this->eventCodes) {
            $res['EventCodes'] = $this->eventCodes;
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
            $res['PunishStatuses'] = $this->punishStatuses;
        }
        if (null !== $this->punishUrl) {
            $res['PunishUrl'] = $this->punishUrl;
        }
        if (null !== $this->punishUrlFull) {
            $res['PunishUrlFull'] = $this->punishUrlFull;
        }
        if (null !== $this->sourceCodes) {
            $res['SourceCodes'] = $this->sourceCodes;
        }
        if (null !== $this->startDate) {
            $res['StartDate'] = $this->startDate;
        }
        if (null !== $this->userIds) {
            $res['UserIds'] = $this->userIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SearchPunishRequestRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AntiStatuses'])) {
            if (!empty($map['AntiStatuses'])) {
                $model->antiStatuses = $map['AntiStatuses'];
            }
        }
        if (isset($map['BussinessCodes'])) {
            if (!empty($map['BussinessCodes'])) {
                $model->bussinessCodes = $map['BussinessCodes'];
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
                $model->eventCodes = $map['EventCodes'];
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
                $model->punishStatuses = $map['PunishStatuses'];
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
                $model->sourceCodes = $map['SourceCodes'];
            }
        }
        if (isset($map['StartDate'])) {
            $model->startDate = $map['StartDate'];
        }
        if (isset($map['UserIds'])) {
            if (!empty($map['UserIds'])) {
                $model->userIds = $map['UserIds'];
            }
        }

        return $model;
    }
}
