<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\Tea\Model;

class ListCloudGtmInstanceConfigsRequest extends Model
{
    /**
     * @example en-US
     *
     * @var string
     */
    public $acceptLanguage;

    /**
     * @example 1ae05db4-10e7-11ef-b126-00163e24**22
     *
     * @var string
     */
    public $clientToken;

    /**
     * @example enable
     *
     * @var string
     */
    public $enableStatus;

    /**
     * @example gtm-cn-wwo3a3hbz**
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @example 20
     *
     * @var int
     */
    public $pageSize;

    /**
     * @example test
     *
     * @var string
     */
    public $remark;

    /**
     * @example www.example.com
     *
     * @var string
     */
    public $scheduleDomainName;

    /**
     * @example example.com
     *
     * @var string
     */
    public $scheduleZoneName;
    protected $_name = [
        'acceptLanguage'     => 'AcceptLanguage',
        'clientToken'        => 'ClientToken',
        'enableStatus'       => 'EnableStatus',
        'instanceId'         => 'InstanceId',
        'pageNumber'         => 'PageNumber',
        'pageSize'           => 'PageSize',
        'remark'             => 'Remark',
        'scheduleDomainName' => 'ScheduleDomainName',
        'scheduleZoneName'   => 'ScheduleZoneName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->acceptLanguage) {
            $res['AcceptLanguage'] = $this->acceptLanguage;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->enableStatus) {
            $res['EnableStatus'] = $this->enableStatus;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }
        if (null !== $this->scheduleDomainName) {
            $res['ScheduleDomainName'] = $this->scheduleDomainName;
        }
        if (null !== $this->scheduleZoneName) {
            $res['ScheduleZoneName'] = $this->scheduleZoneName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListCloudGtmInstanceConfigsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AcceptLanguage'])) {
            $model->acceptLanguage = $map['AcceptLanguage'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['EnableStatus'])) {
            $model->enableStatus = $map['EnableStatus'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }
        if (isset($map['ScheduleDomainName'])) {
            $model->scheduleDomainName = $map['ScheduleDomainName'];
        }
        if (isset($map['ScheduleZoneName'])) {
            $model->scheduleZoneName = $map['ScheduleZoneName'];
        }

        return $model;
    }
}
