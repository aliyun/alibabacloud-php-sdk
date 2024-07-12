<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Buss\V20220822\Models;

use AlibabaCloud\Tea\Model;

class SearchPunishRequestShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $antiStatusesShrink;

    /**
     * @var string
     */
    public $bussinessCodesShrink;

    /**
     * @var string
     */
    public $class;

    /**
     * @var int
     */
    public $endDate;

    /**
     * @var string
     */
    public $eventCodesShrink;

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
     * @var string
     */
    public $punishStatusesShrink;

    /**
     * @var string
     */
    public $punishUrl;

    /**
     * @var string
     */
    public $punishUrlFull;

    /**
     * @var string
     */
    public $sourceCodesShrink;

    /**
     * @var int
     */
    public $startDate;

    /**
     * @var string
     */
    public $userIdsShrink;
    protected $_name = [
        'antiStatusesShrink'   => 'AntiStatuses',
        'bussinessCodesShrink' => 'BussinessCodes',
        'class'                => 'Class',
        'endDate'              => 'EndDate',
        'eventCodesShrink'     => 'EventCodes',
        'extRequestId'         => 'ExtRequestId',
        'id'                   => 'Id',
        'idType'               => 'IdType',
        'instanceId'           => 'InstanceId',
        'page'                 => 'Page',
        'pageSize'             => 'PageSize',
        'punishDomain'         => 'PunishDomain',
        'punishIp'             => 'PunishIp',
        'punishStatusesShrink' => 'PunishStatuses',
        'punishUrl'            => 'PunishUrl',
        'punishUrlFull'        => 'PunishUrlFull',
        'sourceCodesShrink'    => 'SourceCodes',
        'startDate'            => 'StartDate',
        'userIdsShrink'        => 'UserIds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->antiStatusesShrink) {
            $res['AntiStatuses'] = $this->antiStatusesShrink;
        }
        if (null !== $this->bussinessCodesShrink) {
            $res['BussinessCodes'] = $this->bussinessCodesShrink;
        }
        if (null !== $this->class) {
            $res['Class'] = $this->class;
        }
        if (null !== $this->endDate) {
            $res['EndDate'] = $this->endDate;
        }
        if (null !== $this->eventCodesShrink) {
            $res['EventCodes'] = $this->eventCodesShrink;
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
        if (null !== $this->punishStatusesShrink) {
            $res['PunishStatuses'] = $this->punishStatusesShrink;
        }
        if (null !== $this->punishUrl) {
            $res['PunishUrl'] = $this->punishUrl;
        }
        if (null !== $this->punishUrlFull) {
            $res['PunishUrlFull'] = $this->punishUrlFull;
        }
        if (null !== $this->sourceCodesShrink) {
            $res['SourceCodes'] = $this->sourceCodesShrink;
        }
        if (null !== $this->startDate) {
            $res['StartDate'] = $this->startDate;
        }
        if (null !== $this->userIdsShrink) {
            $res['UserIds'] = $this->userIdsShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SearchPunishRequestShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AntiStatuses'])) {
            $model->antiStatusesShrink = $map['AntiStatuses'];
        }
        if (isset($map['BussinessCodes'])) {
            $model->bussinessCodesShrink = $map['BussinessCodes'];
        }
        if (isset($map['Class'])) {
            $model->class = $map['Class'];
        }
        if (isset($map['EndDate'])) {
            $model->endDate = $map['EndDate'];
        }
        if (isset($map['EventCodes'])) {
            $model->eventCodesShrink = $map['EventCodes'];
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
            $model->punishStatusesShrink = $map['PunishStatuses'];
        }
        if (isset($map['PunishUrl'])) {
            $model->punishUrl = $map['PunishUrl'];
        }
        if (isset($map['PunishUrlFull'])) {
            $model->punishUrlFull = $map['PunishUrlFull'];
        }
        if (isset($map['SourceCodes'])) {
            $model->sourceCodesShrink = $map['SourceCodes'];
        }
        if (isset($map['StartDate'])) {
            $model->startDate = $map['StartDate'];
        }
        if (isset($map['UserIds'])) {
            $model->userIdsShrink = $map['UserIds'];
        }

        return $model;
    }
}
