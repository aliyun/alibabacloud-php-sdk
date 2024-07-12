<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Buss\V20220822\Models;

use AlibabaCloud\Tea\Model;

class PunishResourceSearchShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $actionCodesShrink;

    /**
     * @var string
     */
    public $bussinessCodesShrink;

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
    public $status;

    /**
     * @var string
     */
    public $url;

    /**
     * @var string
     */
    public $userIdsShrink;
    protected $_name = [
        'actionCodesShrink'    => 'ActionCodes',
        'bussinessCodesShrink' => 'BussinessCodes',
        'class'                => 'Class',
        'domain'               => 'Domain',
        'endDate'              => 'EndDate',
        'instanceId'           => 'InstanceId',
        'ip'                   => 'Ip',
        'page'                 => 'Page',
        'pageSize'             => 'PageSize',
        'sourceCodesShrink'    => 'SourceCodes',
        'startDate'            => 'StartDate',
        'status'               => 'Status',
        'url'                  => 'Url',
        'userIdsShrink'        => 'UserIds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->actionCodesShrink) {
            $res['ActionCodes'] = $this->actionCodesShrink;
        }
        if (null !== $this->bussinessCodesShrink) {
            $res['BussinessCodes'] = $this->bussinessCodesShrink;
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
        if (null !== $this->sourceCodesShrink) {
            $res['SourceCodes'] = $this->sourceCodesShrink;
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
        if (null !== $this->userIdsShrink) {
            $res['UserIds'] = $this->userIdsShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PunishResourceSearchShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ActionCodes'])) {
            $model->actionCodesShrink = $map['ActionCodes'];
        }
        if (isset($map['BussinessCodes'])) {
            $model->bussinessCodesShrink = $map['BussinessCodes'];
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
            $model->sourceCodesShrink = $map['SourceCodes'];
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
            $model->userIdsShrink = $map['UserIds'];
        }

        return $model;
    }
}
