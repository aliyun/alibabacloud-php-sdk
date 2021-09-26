<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundundbaudit\V20181029\Models;

use AlibabaCloud\Tea\Model;

class DescribeAuditLogsRequest extends Model
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
    public $queryString;

    /**
     * @var string
     */
    public $payload;

    /**
     * @var string
     */
    public $loginUser;

    /**
     * @var string
     */
    public $opType;

    /**
     * @var string
     */
    public $sip;

    /**
     * @var string
     */
    public $dip;

    /**
     * @var string
     */
    public $result;

    /**
     * @var string
     */
    public $accessid;

    /**
     * @var string
     */
    public $sessionid;

    /**
     * @var string
     */
    public $sqlid;

    /**
     * @var string
     */
    public $dbType;

    /**
     * @var string
     */
    public $sport;

    /**
     * @var string
     */
    public $dport;

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
    public $dbName;

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
    public $sqlLen;

    /**
     * @var string
     */
    public $effectRow;

    /**
     * @var string
     */
    public $cost;

    /**
     * @var string
     */
    public $resultDesc;

    /**
     * @var string
     */
    public $dataSet;

    /**
     * @var string
     */
    public $alarmName;

    /**
     * @var string
     */
    public $alarmLevel;
    protected $_name = [
        'instanceId'  => 'InstanceId',
        'regionId'    => 'RegionId',
        'startTime'   => 'StartTime',
        'endTime'     => 'EndTime',
        'currentPage' => 'CurrentPage',
        'pageSize'    => 'PageSize',
        'sort'        => 'Sort',
        'dir'         => 'Dir',
        'dbId'        => 'DbId',
        'queryString' => 'QueryString',
        'payload'     => 'Payload',
        'loginUser'   => 'LoginUser',
        'opType'      => 'OpType',
        'sip'         => 'Sip',
        'dip'         => 'Dip',
        'result'      => 'Result',
        'accessid'    => 'Accessid',
        'sessionid'   => 'Sessionid',
        'sqlid'       => 'Sqlid',
        'dbType'      => 'DbType',
        'sport'       => 'Sport',
        'dport'       => 'Dport',
        'smac'        => 'Smac',
        'dmac'        => 'Dmac',
        'dbName'      => 'DbName',
        'clientPrg'   => 'ClientPrg',
        'hostName'    => 'HostName',
        'clientUser'  => 'ClientUser',
        'sqlLen'      => 'SqlLen',
        'effectRow'   => 'EffectRow',
        'cost'        => 'Cost',
        'resultDesc'  => 'ResultDesc',
        'dataSet'     => 'DataSet',
        'alarmName'   => 'AlarmName',
        'alarmLevel'  => 'AlarmLevel',
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
        if (null !== $this->queryString) {
            $res['QueryString'] = $this->queryString;
        }
        if (null !== $this->payload) {
            $res['Payload'] = $this->payload;
        }
        if (null !== $this->loginUser) {
            $res['LoginUser'] = $this->loginUser;
        }
        if (null !== $this->opType) {
            $res['OpType'] = $this->opType;
        }
        if (null !== $this->sip) {
            $res['Sip'] = $this->sip;
        }
        if (null !== $this->dip) {
            $res['Dip'] = $this->dip;
        }
        if (null !== $this->result) {
            $res['Result'] = $this->result;
        }
        if (null !== $this->accessid) {
            $res['Accessid'] = $this->accessid;
        }
        if (null !== $this->sessionid) {
            $res['Sessionid'] = $this->sessionid;
        }
        if (null !== $this->sqlid) {
            $res['Sqlid'] = $this->sqlid;
        }
        if (null !== $this->dbType) {
            $res['DbType'] = $this->dbType;
        }
        if (null !== $this->sport) {
            $res['Sport'] = $this->sport;
        }
        if (null !== $this->dport) {
            $res['Dport'] = $this->dport;
        }
        if (null !== $this->smac) {
            $res['Smac'] = $this->smac;
        }
        if (null !== $this->dmac) {
            $res['Dmac'] = $this->dmac;
        }
        if (null !== $this->dbName) {
            $res['DbName'] = $this->dbName;
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
        if (null !== $this->sqlLen) {
            $res['SqlLen'] = $this->sqlLen;
        }
        if (null !== $this->effectRow) {
            $res['EffectRow'] = $this->effectRow;
        }
        if (null !== $this->cost) {
            $res['Cost'] = $this->cost;
        }
        if (null !== $this->resultDesc) {
            $res['ResultDesc'] = $this->resultDesc;
        }
        if (null !== $this->dataSet) {
            $res['DataSet'] = $this->dataSet;
        }
        if (null !== $this->alarmName) {
            $res['AlarmName'] = $this->alarmName;
        }
        if (null !== $this->alarmLevel) {
            $res['AlarmLevel'] = $this->alarmLevel;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeAuditLogsRequest
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
        if (isset($map['QueryString'])) {
            $model->queryString = $map['QueryString'];
        }
        if (isset($map['Payload'])) {
            $model->payload = $map['Payload'];
        }
        if (isset($map['LoginUser'])) {
            $model->loginUser = $map['LoginUser'];
        }
        if (isset($map['OpType'])) {
            $model->opType = $map['OpType'];
        }
        if (isset($map['Sip'])) {
            $model->sip = $map['Sip'];
        }
        if (isset($map['Dip'])) {
            $model->dip = $map['Dip'];
        }
        if (isset($map['Result'])) {
            $model->result = $map['Result'];
        }
        if (isset($map['Accessid'])) {
            $model->accessid = $map['Accessid'];
        }
        if (isset($map['Sessionid'])) {
            $model->sessionid = $map['Sessionid'];
        }
        if (isset($map['Sqlid'])) {
            $model->sqlid = $map['Sqlid'];
        }
        if (isset($map['DbType'])) {
            $model->dbType = $map['DbType'];
        }
        if (isset($map['Sport'])) {
            $model->sport = $map['Sport'];
        }
        if (isset($map['Dport'])) {
            $model->dport = $map['Dport'];
        }
        if (isset($map['Smac'])) {
            $model->smac = $map['Smac'];
        }
        if (isset($map['Dmac'])) {
            $model->dmac = $map['Dmac'];
        }
        if (isset($map['DbName'])) {
            $model->dbName = $map['DbName'];
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
        if (isset($map['SqlLen'])) {
            $model->sqlLen = $map['SqlLen'];
        }
        if (isset($map['EffectRow'])) {
            $model->effectRow = $map['EffectRow'];
        }
        if (isset($map['Cost'])) {
            $model->cost = $map['Cost'];
        }
        if (isset($map['ResultDesc'])) {
            $model->resultDesc = $map['ResultDesc'];
        }
        if (isset($map['DataSet'])) {
            $model->dataSet = $map['DataSet'];
        }
        if (isset($map['AlarmName'])) {
            $model->alarmName = $map['AlarmName'];
        }
        if (isset($map['AlarmLevel'])) {
            $model->alarmLevel = $map['AlarmLevel'];
        }

        return $model;
    }
}
