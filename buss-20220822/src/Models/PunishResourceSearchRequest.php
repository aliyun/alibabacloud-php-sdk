<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Buss\V20220822\Models;

use AlibabaCloud\Tea\Model;

class PunishResourceSearchRequest extends Model
{
    /**
     * @var string[]
     */
    public $actionCodes;

    /**
     * @var string[]
     */
    public $bussinessCodes;

    /**
     * @var string
     */
    public $class;

    /**
     * @var string
     */
    public $domain;

    /**
     * @var int
     */
    public $endDate;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $ip;

    /**
     * @var int
     */
    public $page;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string[]
     */
    public $sourceCodes;

    /**
     * @var int
     */
    public $startDate;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $url;

    /**
     * @var string[]
     */
    public $userIds;
    protected $_name = [
        'actionCodes'    => 'ActionCodes',
        'bussinessCodes' => 'BussinessCodes',
        'class'          => 'Class',
        'domain'         => 'Domain',
        'endDate'        => 'EndDate',
        'instanceId'     => 'InstanceId',
        'ip'             => 'Ip',
        'page'           => 'Page',
        'pageSize'       => 'PageSize',
        'sourceCodes'    => 'SourceCodes',
        'startDate'      => 'StartDate',
        'status'         => 'Status',
        'url'            => 'Url',
        'userIds'        => 'UserIds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->actionCodes) {
            $res['ActionCodes'] = $this->actionCodes;
        }
        if (null !== $this->bussinessCodes) {
            $res['BussinessCodes'] = $this->bussinessCodes;
        }
        if (null !== $this->class) {
            $res['Class'] = $this->class;
        }
        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }
        if (null !== $this->endDate) {
            $res['EndDate'] = $this->endDate;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->ip) {
            $res['Ip'] = $this->ip;
        }
        if (null !== $this->page) {
            $res['Page'] = $this->page;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->sourceCodes) {
            $res['SourceCodes'] = $this->sourceCodes;
        }
        if (null !== $this->startDate) {
            $res['StartDate'] = $this->startDate;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->url) {
            $res['Url'] = $this->url;
        }
        if (null !== $this->userIds) {
            $res['UserIds'] = $this->userIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PunishResourceSearchRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ActionCodes'])) {
            if (!empty($map['ActionCodes'])) {
                $model->actionCodes = $map['ActionCodes'];
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
        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }
        if (isset($map['EndDate'])) {
            $model->endDate = $map['EndDate'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Ip'])) {
            $model->ip = $map['Ip'];
        }
        if (isset($map['Page'])) {
            $model->page = $map['Page'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['SourceCodes'])) {
            if (!empty($map['SourceCodes'])) {
                $model->sourceCodes = $map['SourceCodes'];
            }
        }
        if (isset($map['StartDate'])) {
            $model->startDate = $map['StartDate'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Url'])) {
            $model->url = $map['Url'];
        }
        if (isset($map['UserIds'])) {
            if (!empty($map['UserIds'])) {
                $model->userIds = $map['UserIds'];
            }
        }

        return $model;
    }
}
