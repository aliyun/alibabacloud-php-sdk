<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundundbaudit\V20181029\Models\DescribeAuditLogsResponseBody;

use AlibabaCloud\Tea\Model;

class auditLogs extends Model
{
    /**
     * @var string
     */
    public $clientUser;

    /**
     * @var int
     */
    public $effectRow;

    /**
     * @var string
     */
    public $c5;

    /**
     * @var string
     */
    public $clientPrg;

    /**
     * @var string
     */
    public $accessid;

    /**
     * @var string
     */
    public $resultDesc;

    /**
     * @var int
     */
    public $sqlLen;

    /**
     * @var string
     */
    public $payload;

    /**
     * @var string
     */
    public $c4;

    /**
     * @var string
     */
    public $dateTime;

    /**
     * @var string
     */
    public $dbName;

    /**
     * @var string
     */
    public $dataSet;

    /**
     * @var string
     */
    public $sqlid;

    /**
     * @var string
     */
    public $relateIp;

    /**
     * @var int
     */
    public $alarmLevel;

    /**
     * @var string
     */
    public $c2;

    /**
     * @var string
     */
    public $dip;

    /**
     * @var int
     */
    public $result;

    /**
     * @var int
     */
    public $cost;

    /**
     * @var string
     */
    public $relateUser;

    /**
     * @var string
     */
    public $sip;

    /**
     * @var string
     */
    public $c3;

    /**
     * @var string
     */
    public $hostName;

    /**
     * @var string
     */
    public $alarmName;

    /**
     * @var string
     */
    public $pickIp;

    /**
     * @var string
     */
    public $relateInfo;

    /**
     * @var string
     */
    public $pickUser;

    /**
     * @var string
     */
    public $opType;

    /**
     * @var int
     */
    public $sport;

    /**
     * @var int
     */
    public $dataSetSize;

    /**
     * @var string
     */
    public $dbType;

    /**
     * @var int
     */
    public $alarmFlag;

    /**
     * @var int
     */
    public $smac;

    /**
     * @var int
     */
    public $dport;

    /**
     * @var string
     */
    public $c1;

    /**
     * @var int
     */
    public $dmac;

    /**
     * @var string
     */
    public $loginUser;

    /**
     * @var string
     */
    public $sessionid;
    protected $_name = [
        'clientUser'  => 'ClientUser',
        'effectRow'   => 'EffectRow',
        'c5'          => 'C5',
        'clientPrg'   => 'ClientPrg',
        'accessid'    => 'Accessid',
        'resultDesc'  => 'ResultDesc',
        'sqlLen'      => 'SqlLen',
        'payload'     => 'Payload',
        'c4'          => 'C4',
        'dateTime'    => 'DateTime',
        'dbName'      => 'DbName',
        'dataSet'     => 'DataSet',
        'sqlid'       => 'Sqlid',
        'relateIp'    => 'RelateIp',
        'alarmLevel'  => 'AlarmLevel',
        'c2'          => 'C2',
        'dip'         => 'Dip',
        'result'      => 'Result',
        'cost'        => 'Cost',
        'relateUser'  => 'RelateUser',
        'sip'         => 'Sip',
        'c3'          => 'C3',
        'hostName'    => 'HostName',
        'alarmName'   => 'AlarmName',
        'pickIp'      => 'PickIp',
        'relateInfo'  => 'RelateInfo',
        'pickUser'    => 'PickUser',
        'opType'      => 'OpType',
        'sport'       => 'Sport',
        'dataSetSize' => 'DataSetSize',
        'dbType'      => 'DbType',
        'alarmFlag'   => 'AlarmFlag',
        'smac'        => 'Smac',
        'dport'       => 'Dport',
        'c1'          => 'C1',
        'dmac'        => 'Dmac',
        'loginUser'   => 'LoginUser',
        'sessionid'   => 'Sessionid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientUser) {
            $res['ClientUser'] = $this->clientUser;
        }
        if (null !== $this->effectRow) {
            $res['EffectRow'] = $this->effectRow;
        }
        if (null !== $this->c5) {
            $res['C5'] = $this->c5;
        }
        if (null !== $this->clientPrg) {
            $res['ClientPrg'] = $this->clientPrg;
        }
        if (null !== $this->accessid) {
            $res['Accessid'] = $this->accessid;
        }
        if (null !== $this->resultDesc) {
            $res['ResultDesc'] = $this->resultDesc;
        }
        if (null !== $this->sqlLen) {
            $res['SqlLen'] = $this->sqlLen;
        }
        if (null !== $this->payload) {
            $res['Payload'] = $this->payload;
        }
        if (null !== $this->c4) {
            $res['C4'] = $this->c4;
        }
        if (null !== $this->dateTime) {
            $res['DateTime'] = $this->dateTime;
        }
        if (null !== $this->dbName) {
            $res['DbName'] = $this->dbName;
        }
        if (null !== $this->dataSet) {
            $res['DataSet'] = $this->dataSet;
        }
        if (null !== $this->sqlid) {
            $res['Sqlid'] = $this->sqlid;
        }
        if (null !== $this->relateIp) {
            $res['RelateIp'] = $this->relateIp;
        }
        if (null !== $this->alarmLevel) {
            $res['AlarmLevel'] = $this->alarmLevel;
        }
        if (null !== $this->c2) {
            $res['C2'] = $this->c2;
        }
        if (null !== $this->dip) {
            $res['Dip'] = $this->dip;
        }
        if (null !== $this->result) {
            $res['Result'] = $this->result;
        }
        if (null !== $this->cost) {
            $res['Cost'] = $this->cost;
        }
        if (null !== $this->relateUser) {
            $res['RelateUser'] = $this->relateUser;
        }
        if (null !== $this->sip) {
            $res['Sip'] = $this->sip;
        }
        if (null !== $this->c3) {
            $res['C3'] = $this->c3;
        }
        if (null !== $this->hostName) {
            $res['HostName'] = $this->hostName;
        }
        if (null !== $this->alarmName) {
            $res['AlarmName'] = $this->alarmName;
        }
        if (null !== $this->pickIp) {
            $res['PickIp'] = $this->pickIp;
        }
        if (null !== $this->relateInfo) {
            $res['RelateInfo'] = $this->relateInfo;
        }
        if (null !== $this->pickUser) {
            $res['PickUser'] = $this->pickUser;
        }
        if (null !== $this->opType) {
            $res['OpType'] = $this->opType;
        }
        if (null !== $this->sport) {
            $res['Sport'] = $this->sport;
        }
        if (null !== $this->dataSetSize) {
            $res['DataSetSize'] = $this->dataSetSize;
        }
        if (null !== $this->dbType) {
            $res['DbType'] = $this->dbType;
        }
        if (null !== $this->alarmFlag) {
            $res['AlarmFlag'] = $this->alarmFlag;
        }
        if (null !== $this->smac) {
            $res['Smac'] = $this->smac;
        }
        if (null !== $this->dport) {
            $res['Dport'] = $this->dport;
        }
        if (null !== $this->c1) {
            $res['C1'] = $this->c1;
        }
        if (null !== $this->dmac) {
            $res['Dmac'] = $this->dmac;
        }
        if (null !== $this->loginUser) {
            $res['LoginUser'] = $this->loginUser;
        }
        if (null !== $this->sessionid) {
            $res['Sessionid'] = $this->sessionid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return auditLogs
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientUser'])) {
            $model->clientUser = $map['ClientUser'];
        }
        if (isset($map['EffectRow'])) {
            $model->effectRow = $map['EffectRow'];
        }
        if (isset($map['C5'])) {
            $model->c5 = $map['C5'];
        }
        if (isset($map['ClientPrg'])) {
            $model->clientPrg = $map['ClientPrg'];
        }
        if (isset($map['Accessid'])) {
            $model->accessid = $map['Accessid'];
        }
        if (isset($map['ResultDesc'])) {
            $model->resultDesc = $map['ResultDesc'];
        }
        if (isset($map['SqlLen'])) {
            $model->sqlLen = $map['SqlLen'];
        }
        if (isset($map['Payload'])) {
            $model->payload = $map['Payload'];
        }
        if (isset($map['C4'])) {
            $model->c4 = $map['C4'];
        }
        if (isset($map['DateTime'])) {
            $model->dateTime = $map['DateTime'];
        }
        if (isset($map['DbName'])) {
            $model->dbName = $map['DbName'];
        }
        if (isset($map['DataSet'])) {
            $model->dataSet = $map['DataSet'];
        }
        if (isset($map['Sqlid'])) {
            $model->sqlid = $map['Sqlid'];
        }
        if (isset($map['RelateIp'])) {
            $model->relateIp = $map['RelateIp'];
        }
        if (isset($map['AlarmLevel'])) {
            $model->alarmLevel = $map['AlarmLevel'];
        }
        if (isset($map['C2'])) {
            $model->c2 = $map['C2'];
        }
        if (isset($map['Dip'])) {
            $model->dip = $map['Dip'];
        }
        if (isset($map['Result'])) {
            $model->result = $map['Result'];
        }
        if (isset($map['Cost'])) {
            $model->cost = $map['Cost'];
        }
        if (isset($map['RelateUser'])) {
            $model->relateUser = $map['RelateUser'];
        }
        if (isset($map['Sip'])) {
            $model->sip = $map['Sip'];
        }
        if (isset($map['C3'])) {
            $model->c3 = $map['C3'];
        }
        if (isset($map['HostName'])) {
            $model->hostName = $map['HostName'];
        }
        if (isset($map['AlarmName'])) {
            $model->alarmName = $map['AlarmName'];
        }
        if (isset($map['PickIp'])) {
            $model->pickIp = $map['PickIp'];
        }
        if (isset($map['RelateInfo'])) {
            $model->relateInfo = $map['RelateInfo'];
        }
        if (isset($map['PickUser'])) {
            $model->pickUser = $map['PickUser'];
        }
        if (isset($map['OpType'])) {
            $model->opType = $map['OpType'];
        }
        if (isset($map['Sport'])) {
            $model->sport = $map['Sport'];
        }
        if (isset($map['DataSetSize'])) {
            $model->dataSetSize = $map['DataSetSize'];
        }
        if (isset($map['DbType'])) {
            $model->dbType = $map['DbType'];
        }
        if (isset($map['AlarmFlag'])) {
            $model->alarmFlag = $map['AlarmFlag'];
        }
        if (isset($map['Smac'])) {
            $model->smac = $map['Smac'];
        }
        if (isset($map['Dport'])) {
            $model->dport = $map['Dport'];
        }
        if (isset($map['C1'])) {
            $model->c1 = $map['C1'];
        }
        if (isset($map['Dmac'])) {
            $model->dmac = $map['Dmac'];
        }
        if (isset($map['LoginUser'])) {
            $model->loginUser = $map['LoginUser'];
        }
        if (isset($map['Sessionid'])) {
            $model->sessionid = $map['Sessionid'];
        }

        return $model;
    }
}
