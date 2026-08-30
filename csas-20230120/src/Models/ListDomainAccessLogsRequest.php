<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models;

use AlibabaCloud\Dara\Model;

class ListDomainAccessLogsRequest extends Model
{
    /**
     * @var string
     */
    public $blockAction;

    /**
     * @var int
     */
    public $currentPage;

    /**
     * @var string
     */
    public $department;

    /**
     * @var int
     */
    public $endTime;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $policyType;

    /**
     * @var string
     */
    public $remoteHost;

    /**
     * @var int
     */
    public $startTime;

    /**
     * @var string
     */
    public $userName;
    protected $_name = [
        'blockAction' => 'BlockAction',
        'currentPage' => 'CurrentPage',
        'department' => 'Department',
        'endTime' => 'EndTime',
        'pageSize' => 'PageSize',
        'policyType' => 'PolicyType',
        'remoteHost' => 'RemoteHost',
        'startTime' => 'StartTime',
        'userName' => 'UserName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->blockAction) {
            $res['BlockAction'] = $this->blockAction;
        }

        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }

        if (null !== $this->department) {
            $res['Department'] = $this->department;
        }

        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->policyType) {
            $res['PolicyType'] = $this->policyType;
        }

        if (null !== $this->remoteHost) {
            $res['RemoteHost'] = $this->remoteHost;
        }

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        if (null !== $this->userName) {
            $res['UserName'] = $this->userName;
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
        if (isset($map['BlockAction'])) {
            $model->blockAction = $map['BlockAction'];
        }

        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }

        if (isset($map['Department'])) {
            $model->department = $map['Department'];
        }

        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['PolicyType'])) {
            $model->policyType = $map['PolicyType'];
        }

        if (isset($map['RemoteHost'])) {
            $model->remoteHost = $map['RemoteHost'];
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        if (isset($map['UserName'])) {
            $model->userName = $map['UserName'];
        }

        return $model;
    }
}
