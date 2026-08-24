<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models;

use AlibabaCloud\Dara\Model;

class ListVulnerabilitiesRequest extends Model
{
    /**
     * @var int
     */
    public $currentPage;

    /**
     * @var string
     */
    public $department;

    /**
     * @var string
     */
    public $devTag;

    /**
     * @var string
     */
    public $devType;

    /**
     * @var string
     */
    public $hostname;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $saseUserId;

    /**
     * @var string
     */
    public $scanTaskId;

    /**
     * @var string
     */
    public $title;

    /**
     * @var string[]
     */
    public $updateIds;

    /**
     * @var string
     */
    public $username;

    /**
     * @var string
     */
    public $vulLevel;

    /**
     * @var string
     */
    public $vulType;
    protected $_name = [
        'currentPage' => 'CurrentPage',
        'department' => 'Department',
        'devTag' => 'DevTag',
        'devType' => 'DevType',
        'hostname' => 'Hostname',
        'pageSize' => 'PageSize',
        'saseUserId' => 'SaseUserId',
        'scanTaskId' => 'ScanTaskId',
        'title' => 'Title',
        'updateIds' => 'UpdateIds',
        'username' => 'Username',
        'vulLevel' => 'VulLevel',
        'vulType' => 'VulType',
    ];

    public function validate()
    {
        if (\is_array($this->updateIds)) {
            Model::validateArray($this->updateIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }

        if (null !== $this->department) {
            $res['Department'] = $this->department;
        }

        if (null !== $this->devTag) {
            $res['DevTag'] = $this->devTag;
        }

        if (null !== $this->devType) {
            $res['DevType'] = $this->devType;
        }

        if (null !== $this->hostname) {
            $res['Hostname'] = $this->hostname;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->saseUserId) {
            $res['SaseUserId'] = $this->saseUserId;
        }

        if (null !== $this->scanTaskId) {
            $res['ScanTaskId'] = $this->scanTaskId;
        }

        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }

        if (null !== $this->updateIds) {
            if (\is_array($this->updateIds)) {
                $res['UpdateIds'] = [];
                $n1 = 0;
                foreach ($this->updateIds as $item1) {
                    $res['UpdateIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->username) {
            $res['Username'] = $this->username;
        }

        if (null !== $this->vulLevel) {
            $res['VulLevel'] = $this->vulLevel;
        }

        if (null !== $this->vulType) {
            $res['VulType'] = $this->vulType;
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
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }

        if (isset($map['Department'])) {
            $model->department = $map['Department'];
        }

        if (isset($map['DevTag'])) {
            $model->devTag = $map['DevTag'];
        }

        if (isset($map['DevType'])) {
            $model->devType = $map['DevType'];
        }

        if (isset($map['Hostname'])) {
            $model->hostname = $map['Hostname'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['SaseUserId'])) {
            $model->saseUserId = $map['SaseUserId'];
        }

        if (isset($map['ScanTaskId'])) {
            $model->scanTaskId = $map['ScanTaskId'];
        }

        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }

        if (isset($map['UpdateIds'])) {
            if (!empty($map['UpdateIds'])) {
                $model->updateIds = [];
                $n1 = 0;
                foreach ($map['UpdateIds'] as $item1) {
                    $model->updateIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Username'])) {
            $model->username = $map['Username'];
        }

        if (isset($map['VulLevel'])) {
            $model->vulLevel = $map['VulLevel'];
        }

        if (isset($map['VulType'])) {
            $model->vulType = $map['VulType'];
        }

        return $model;
    }
}
