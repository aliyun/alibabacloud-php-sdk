<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundundbaudit\V20181029\Models\DescribeSessionLogsResponseBody;

use AlibabaCloud\Tea\Model;

class sessionLogs extends Model
{
    /**
     * @var string
     */
    public $clientUser;

    /**
     * @var int
     */
    public $sessionStatus;

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
    public $c4;

    /**
     * @var string
     */
    public $dbName;

    /**
     * @var int
     */
    public $requestFlow;

    /**
     * @var int
     */
    public $proCon;

    /**
     * @var string
     */
    public $c2;

    /**
     * @var string
     */
    public $dip;

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
     * @var int
     */
    public $responseFlow;

    /**
     * @var string
     */
    public $encode;

    /**
     * @var int
     */
    public $normalEnd;

    /**
     * @var int
     */
    public $endTime;

    /**
     * @var int
     */
    public $sport;

    /**
     * @var int
     */
    public $startTime;

    /**
     * @var string
     */
    public $dbType;

    /**
     * @var string
     */
    public $strInfo;

    /**
     * @var int
     */
    public $sqlCount;

    /**
     * @var int
     */
    public $smac;

    /**
     * @var int
     */
    public $dport;

    /**
     * @var int
     */
    public $dmac;

    /**
     * @var string
     */
    public $c1;

    /**
     * @var string
     */
    public $loginUser;

    /**
     * @var string
     */
    public $sessionid;
    protected $_name = [
        'clientUser'    => 'ClientUser',
        'sessionStatus' => 'SessionStatus',
        'c5'            => 'C5',
        'clientPrg'     => 'ClientPrg',
        'accessid'      => 'Accessid',
        'c4'            => 'C4',
        'dbName'        => 'DbName',
        'requestFlow'   => 'RequestFlow',
        'proCon'        => 'ProCon',
        'c2'            => 'C2',
        'dip'           => 'Dip',
        'sip'           => 'Sip',
        'c3'            => 'C3',
        'hostName'      => 'HostName',
        'responseFlow'  => 'ResponseFlow',
        'encode'        => 'Encode',
        'normalEnd'     => 'NormalEnd',
        'endTime'       => 'EndTime',
        'sport'         => 'Sport',
        'startTime'     => 'StartTime',
        'dbType'        => 'DbType',
        'strInfo'       => 'StrInfo',
        'sqlCount'      => 'SqlCount',
        'smac'          => 'Smac',
        'dport'         => 'Dport',
        'dmac'          => 'Dmac',
        'c1'            => 'C1',
        'loginUser'     => 'LoginUser',
        'sessionid'     => 'Sessionid',
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
        if (null !== $this->sessionStatus) {
            $res['SessionStatus'] = $this->sessionStatus;
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
        if (null !== $this->c4) {
            $res['C4'] = $this->c4;
        }
        if (null !== $this->dbName) {
            $res['DbName'] = $this->dbName;
        }
        if (null !== $this->requestFlow) {
            $res['RequestFlow'] = $this->requestFlow;
        }
        if (null !== $this->proCon) {
            $res['ProCon'] = $this->proCon;
        }
        if (null !== $this->c2) {
            $res['C2'] = $this->c2;
        }
        if (null !== $this->dip) {
            $res['Dip'] = $this->dip;
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
        if (null !== $this->responseFlow) {
            $res['ResponseFlow'] = $this->responseFlow;
        }
        if (null !== $this->encode) {
            $res['Encode'] = $this->encode;
        }
        if (null !== $this->normalEnd) {
            $res['NormalEnd'] = $this->normalEnd;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->sport) {
            $res['Sport'] = $this->sport;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->dbType) {
            $res['DbType'] = $this->dbType;
        }
        if (null !== $this->strInfo) {
            $res['StrInfo'] = $this->strInfo;
        }
        if (null !== $this->sqlCount) {
            $res['SqlCount'] = $this->sqlCount;
        }
        if (null !== $this->smac) {
            $res['Smac'] = $this->smac;
        }
        if (null !== $this->dport) {
            $res['Dport'] = $this->dport;
        }
        if (null !== $this->dmac) {
            $res['Dmac'] = $this->dmac;
        }
        if (null !== $this->c1) {
            $res['C1'] = $this->c1;
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
     * @return sessionLogs
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientUser'])) {
            $model->clientUser = $map['ClientUser'];
        }
        if (isset($map['SessionStatus'])) {
            $model->sessionStatus = $map['SessionStatus'];
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
        if (isset($map['C4'])) {
            $model->c4 = $map['C4'];
        }
        if (isset($map['DbName'])) {
            $model->dbName = $map['DbName'];
        }
        if (isset($map['RequestFlow'])) {
            $model->requestFlow = $map['RequestFlow'];
        }
        if (isset($map['ProCon'])) {
            $model->proCon = $map['ProCon'];
        }
        if (isset($map['C2'])) {
            $model->c2 = $map['C2'];
        }
        if (isset($map['Dip'])) {
            $model->dip = $map['Dip'];
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
        if (isset($map['ResponseFlow'])) {
            $model->responseFlow = $map['ResponseFlow'];
        }
        if (isset($map['Encode'])) {
            $model->encode = $map['Encode'];
        }
        if (isset($map['NormalEnd'])) {
            $model->normalEnd = $map['NormalEnd'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['Sport'])) {
            $model->sport = $map['Sport'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['DbType'])) {
            $model->dbType = $map['DbType'];
        }
        if (isset($map['StrInfo'])) {
            $model->strInfo = $map['StrInfo'];
        }
        if (isset($map['SqlCount'])) {
            $model->sqlCount = $map['SqlCount'];
        }
        if (isset($map['Smac'])) {
            $model->smac = $map['Smac'];
        }
        if (isset($map['Dport'])) {
            $model->dport = $map['Dport'];
        }
        if (isset($map['Dmac'])) {
            $model->dmac = $map['Dmac'];
        }
        if (isset($map['C1'])) {
            $model->c1 = $map['C1'];
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
