<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Buss\V20220822\Models;

use AlibabaCloud\Dara\Model;

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
        'actionCodes' => 'ActionCodes',
        'bussinessCodes' => 'BussinessCodes',
        'class' => 'Class',
        'domain' => 'Domain',
        'endDate' => 'EndDate',
        'instanceId' => 'InstanceId',
        'ip' => 'Ip',
        'page' => 'Page',
        'pageSize' => 'PageSize',
        'sourceCodes' => 'SourceCodes',
        'startDate' => 'StartDate',
        'status' => 'Status',
        'url' => 'Url',
        'userIds' => 'UserIds',
    ];

    public function validate()
    {
        if (\is_array($this->actionCodes)) {
            Model::validateArray($this->actionCodes);
        }
        if (\is_array($this->bussinessCodes)) {
            Model::validateArray($this->bussinessCodes);
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
        if (null !== $this->actionCodes) {
            if (\is_array($this->actionCodes)) {
                $res['ActionCodes'] = [];
                $n1 = 0;
                foreach ($this->actionCodes as $item1) {
                    $res['ActionCodes'][$n1++] = $item1;
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

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->url) {
            $res['Url'] = $this->url;
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
        if (isset($map['ActionCodes'])) {
            if (!empty($map['ActionCodes'])) {
                $model->actionCodes = [];
                $n1 = 0;
                foreach ($map['ActionCodes'] as $item1) {
                    $model->actionCodes[$n1++] = $item1;
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

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['Url'])) {
            $model->url = $map['Url'];
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
