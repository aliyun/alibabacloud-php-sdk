<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundundbaudit\V20181029\Models;

use AlibabaCloud\Tea\Model;

class DescribeSessionLogsRequest extends Model
{
    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var string
     */
    public $endTime;

    /**
     * @var int
     */
    public $currentPage;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $sort;

    /**
     * @var string
     */
    public $dir;

    /**
     * @var string
     */
    public $dbId;

    /**
     * @var string
     */
    public $sip;

    /**
     * @var string
     */
    public $sport;

    /**
     * @var string
     */
    public $loginUser;

    /**
     * @var string
     */
    public $dip;

    /**
     * @var string
     */
    public $dport;

    /**
     * @var string
     */
    public $sessionid;

    /**
     * @var string
     */
    public $dbType;

    /**
     * @var string
     */
    public $smac;

    /**
     * @var string
     */
    public $dmac;

    /**
     * @var string
     */
    public $clientPrg;

    /**
     * @var string
     */
    public $hostName;

    /**
     * @var string
     */
    public $clientUser;

    /**
     * @var string
     */
    public $dbName;

    /**
     * @var string
     */
    public $sessionStatus;

    /**
     * @var string
     */
    public $sqlCount;

    /**
     * @var string
     */
    public $reqFlow;

    /**
     * @var string
     */
    public $rspFlow;
    protected $_name = [
        'instanceId'    => 'InstanceId',
        'regionId'      => 'RegionId',
        'startTime'     => 'StartTime',
        'endTime'       => 'EndTime',
        'currentPage'   => 'CurrentPage',
        'pageSize'      => 'PageSize',
        'sort'          => 'Sort',
        'dir'           => 'Dir',
        'dbId'          => 'DbId',
        'sip'           => 'Sip',
        'sport'         => 'Sport',
        'loginUser'     => 'LoginUser',
        'dip'           => 'Dip',
        'dport'         => 'Dport',
        'sessionid'     => 'Sessionid',
        'dbType'        => 'DbType',
        'smac'          => 'Smac',
        'dmac'          => 'Dmac',
        'clientPrg'     => 'ClientPrg',
        'hostName'      => 'HostName',
        'clientUser'    => 'ClientUser',
        'dbName'        => 'DbName',
        'sessionStatus' => 'SessionStatus',
        'sqlCount'      => 'SqlCount',
        'reqFlow'       => 'ReqFlow',
        'rspFlow'       => 'RspFlow',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->sort) {
            $res['Sort'] = $this->sort;
        }
        if (null !== $this->dir) {
            $res['Dir'] = $this->dir;
        }
        if (null !== $this->dbId) {
            $res['DbId'] = $this->dbId;
        }
        if (null !== $this->sip) {
            $res['Sip'] = $this->sip;
        }
        if (null !== $this->sport) {
            $res['Sport'] = $this->sport;
        }
        if (null !== $this->loginUser) {
            $res['LoginUser'] = $this->loginUser;
        }
        if (null !== $this->dip) {
            $res['Dip'] = $this->dip;
        }
        if (null !== $this->dport) {
            $res['Dport'] = $this->dport;
        }
        if (null !== $this->sessionid) {
            $res['Sessionid'] = $this->sessionid;
        }
        if (null !== $this->dbType) {
            $res['DbType'] = $this->dbType;
        }
        if (null !== $this->smac) {
            $res['Smac'] = $this->smac;
        }
        if (null !== $this->dmac) {
            $res['Dmac'] = $this->dmac;
        }
        if (null !== $this->clientPrg) {
            $res['ClientPrg'] = $this->clientPrg;
        }
        if (null !== $this->hostName) {
            $res['HostName'] = $this->hostName;
        }
        if (null !== $this->clientUser) {
            $res['ClientUser'] = $this->clientUser;
        }
        if (null !== $this->dbName) {
            $res['DbName'] = $this->dbName;
        }
        if (null !== $this->sessionStatus) {
            $res['SessionStatus'] = $this->sessionStatus;
        }
        if (null !== $this->sqlCount) {
            $res['SqlCount'] = $this->sqlCount;
        }
        if (null !== $this->reqFlow) {
            $res['ReqFlow'] = $this->reqFlow;
        }
        if (null !== $this->rspFlow) {
            $res['RspFlow'] = $this->rspFlow;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeSessionLogsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['Sort'])) {
            $model->sort = $map['Sort'];
        }
        if (isset($map['Dir'])) {
            $model->dir = $map['Dir'];
        }
        if (isset($map['DbId'])) {
            $model->dbId = $map['DbId'];
        }
        if (isset($map['Sip'])) {
            $model->sip = $map['Sip'];
        }
        if (isset($map['Sport'])) {
            $model->sport = $map['Sport'];
        }
        if (isset($map['LoginUser'])) {
            $model->loginUser = $map['LoginUser'];
        }
        if (isset($map['Dip'])) {
            $model->dip = $map['Dip'];
        }
        if (isset($map['Dport'])) {
            $model->dport = $map['Dport'];
        }
        if (isset($map['Sessionid'])) {
            $model->sessionid = $map['Sessionid'];
        }
        if (isset($map['DbType'])) {
            $model->dbType = $map['DbType'];
        }
        if (isset($map['Smac'])) {
            $model->smac = $map['Smac'];
        }
        if (isset($map['Dmac'])) {
            $model->dmac = $map['Dmac'];
        }
        if (isset($map['ClientPrg'])) {
            $model->clientPrg = $map['ClientPrg'];
        }
        if (isset($map['HostName'])) {
            $model->hostName = $map['HostName'];
        }
        if (isset($map['ClientUser'])) {
            $model->clientUser = $map['ClientUser'];
        }
        if (isset($map['DbName'])) {
            $model->dbName = $map['DbName'];
        }
        if (isset($map['SessionStatus'])) {
            $model->sessionStatus = $map['SessionStatus'];
        }
        if (isset($map['SqlCount'])) {
            $model->sqlCount = $map['SqlCount'];
        }
        if (isset($map['ReqFlow'])) {
            $model->reqFlow = $map['ReqFlow'];
        }
        if (isset($map['RspFlow'])) {
            $model->rspFlow = $map['RspFlow'];
        }

        return $model;
    }
}
