<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mssp\V20161228\Models;

use AlibabaCloud\Dara\Model;

class PageServiceCustomerRequest extends Model
{
    /**
     * @var int
     */
    public $authStatus;
    /**
     * @var int
     */
    public $cmAuthStatus;
    /**
     * @var int
     */
    public $currentPage;
    /**
     * @var int
     */
    public $endTime;
    /**
     * @var int
     */
    public $monitorAuthStatus;
    /**
     * @var int
     */
    public $pageSize;
    /**
     * @var int
     */
    public $startTime;
    protected $_name = [
        'authStatus'        => 'AuthStatus',
        'cmAuthStatus'      => 'CmAuthStatus',
        'currentPage'       => 'CurrentPage',
        'endTime'           => 'EndTime',
        'monitorAuthStatus' => 'MonitorAuthStatus',
        'pageSize'          => 'PageSize',
        'startTime'         => 'StartTime',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->authStatus) {
            $res['AuthStatus'] = $this->authStatus;
        }

        if (null !== $this->cmAuthStatus) {
            $res['CmAuthStatus'] = $this->cmAuthStatus;
        }

        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }

        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        if (null !== $this->monitorAuthStatus) {
            $res['MonitorAuthStatus'] = $this->monitorAuthStatus;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
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
        if (isset($map['AuthStatus'])) {
            $model->authStatus = $map['AuthStatus'];
        }

        if (isset($map['CmAuthStatus'])) {
            $model->cmAuthStatus = $map['CmAuthStatus'];
        }

        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }

        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        if (isset($map['MonitorAuthStatus'])) {
            $model->monitorAuthStatus = $map['MonitorAuthStatus'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
