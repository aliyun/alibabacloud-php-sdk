<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mssp\V20161228\Models;

use AlibabaCloud\Tea\Model;

class PageServiceCustomerRequest extends Model
{
    /**
     * @description Authorization status.
     *
     * @example 1
     *
     * @var int
     */
    public $authStatus;

    /**
     * @description Cloud Monitoring - Alert authorization status.
     *
     * @example 1
     *
     * @var int
     */
    public $cmAuthStatus;

    /**
     * @description The page number of the query result, default is 1.
     *
     * This parameter is required.
     * @example 1
     *
     * @var int
     */
    public $currentPage;

    /**
     * @description End time. The format is a Unix timestamp, which is the number of milliseconds since January 1, 1970.
     *
     * @example 1710641101123
     *
     * @var int
     */
    public $endTime;

    /**
     * @description Cloud Security - Alert authorization status.
     *
     * @example 1
     *
     * @var int
     */
    public $monitorAuthStatus;

    /**
     * @description Number of records per page.
     *
     * This parameter is required.
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description Start time. The format is a Unix timestamp, which is the number of milliseconds since January 1, 1970.
     *
     * @example 1710641101000
     *
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
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return PageServiceCustomerRequest
     */
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
