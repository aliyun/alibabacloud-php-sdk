<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeSlowLogRecordsResponseBody;

use AlibabaCloud\Tea\Model;

class items extends Model
{
    /**
     * @example pxc-i-xxxx
     *
     * @var string
     */
    public $CNname;

    /**
     * @example dcdev
     *
     * @var string
     */
    public $DBName;

    /**
     * @example tddl:5.4.19-20240927
     *
     * @var string
     */
    public $extension;

    /**
     * @example 0
     *
     * @var string
     */
    public $fail;

    /**
     * @example 1
     *
     * @var string
     */
    public $frows;

    /**
     * @example ****[****] @ [1XX.XX.XX.XX]
     *
     * @var string
     */
    public $hostAddress;

    /**
     * @example pxc-xdb-s-xxxx
     *
     * @var string
     */
    public $insName;

    /**
     * @example 0
     *
     * @var string
     */
    public $isBind;

    /**
     * @example 1
     *
     * @var string
     */
    public $lockTimeMS;

    /**
     * @example ["1"]
     *
     * @var string
     */
    public $params;

    /**
     * @example 10
     *
     * @var string
     */
    public $parseRowCounts;

    /**
     * @example 2024-11-22T02:22:22.444Z
     *
     * @var string
     */
    public $queryStartTime;

    /**
     * @example 3.000
     *
     * @var string
     */
    public $queryTime;

    /**
     * @example 3000.000
     *
     * @var string
     */
    public $queryTimeMS;

    /**
     * @example 20
     *
     * @var string
     */
    public $returnRowCounts;

    /**
     * @example 1
     *
     * @var string
     */
    public $rows;

    /**
     * @example 1
     *
     * @var string
     */
    public $SCNT;

    /**
     * @example c8df07e5d45cd68da8b4771c2016e20b
     *
     * @var string
     */
    public $SQLHash;

    /**
     * @example select * from test
     *
     * @var string
     */
    public $SQLText;

    /**
     * @example select
     *
     * @var string
     */
    public $sqlType;

    /**
     * @example 0
     *
     * @var string
     */
    public $tooLong;

    /**
     * @example 17a5c5c840006000
     *
     * @var string
     */
    public $traceId;

    /**
     * @example XA
     *
     * @var string
     */
    public $transactionPolicy;

    /**
     * @example 17a5c5c840006000
     *
     * @var string
     */
    public $trxId;

    /**
     * @example TP
     *
     * @var string
     */
    public $WT;
    protected $_name = [
        'CNname'            => 'CNname',
        'DBName'            => 'DBName',
        'extension'         => 'Extension',
        'fail'              => 'Fail',
        'frows'             => 'Frows',
        'hostAddress'       => 'HostAddress',
        'insName'           => 'InsName',
        'isBind'            => 'IsBind',
        'lockTimeMS'        => 'LockTimeMS',
        'params'            => 'Params',
        'parseRowCounts'    => 'ParseRowCounts',
        'queryStartTime'    => 'QueryStartTime',
        'queryTime'         => 'QueryTime',
        'queryTimeMS'       => 'QueryTimeMS',
        'returnRowCounts'   => 'ReturnRowCounts',
        'rows'              => 'Rows',
        'SCNT'              => 'SCNT',
        'SQLHash'           => 'SQLHash',
        'SQLText'           => 'SQLText',
        'sqlType'           => 'SqlType',
        'tooLong'           => 'TooLong',
        'traceId'           => 'TraceId',
        'transactionPolicy' => 'TransactionPolicy',
        'trxId'             => 'TrxId',
        'WT'                => 'WT',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->CNname) {
            $res['CNname'] = $this->CNname;
        }
        if (null !== $this->DBName) {
            $res['DBName'] = $this->DBName;
        }
        if (null !== $this->extension) {
            $res['Extension'] = $this->extension;
        }
        if (null !== $this->fail) {
            $res['Fail'] = $this->fail;
        }
        if (null !== $this->frows) {
            $res['Frows'] = $this->frows;
        }
        if (null !== $this->hostAddress) {
            $res['HostAddress'] = $this->hostAddress;
        }
        if (null !== $this->insName) {
            $res['InsName'] = $this->insName;
        }
        if (null !== $this->isBind) {
            $res['IsBind'] = $this->isBind;
        }
        if (null !== $this->lockTimeMS) {
            $res['LockTimeMS'] = $this->lockTimeMS;
        }
        if (null !== $this->params) {
            $res['Params'] = $this->params;
        }
        if (null !== $this->parseRowCounts) {
            $res['ParseRowCounts'] = $this->parseRowCounts;
        }
        if (null !== $this->queryStartTime) {
            $res['QueryStartTime'] = $this->queryStartTime;
        }
        if (null !== $this->queryTime) {
            $res['QueryTime'] = $this->queryTime;
        }
        if (null !== $this->queryTimeMS) {
            $res['QueryTimeMS'] = $this->queryTimeMS;
        }
        if (null !== $this->returnRowCounts) {
            $res['ReturnRowCounts'] = $this->returnRowCounts;
        }
        if (null !== $this->rows) {
            $res['Rows'] = $this->rows;
        }
        if (null !== $this->SCNT) {
            $res['SCNT'] = $this->SCNT;
        }
        if (null !== $this->SQLHash) {
            $res['SQLHash'] = $this->SQLHash;
        }
        if (null !== $this->SQLText) {
            $res['SQLText'] = $this->SQLText;
        }
        if (null !== $this->sqlType) {
            $res['SqlType'] = $this->sqlType;
        }
        if (null !== $this->tooLong) {
            $res['TooLong'] = $this->tooLong;
        }
        if (null !== $this->traceId) {
            $res['TraceId'] = $this->traceId;
        }
        if (null !== $this->transactionPolicy) {
            $res['TransactionPolicy'] = $this->transactionPolicy;
        }
        if (null !== $this->trxId) {
            $res['TrxId'] = $this->trxId;
        }
        if (null !== $this->WT) {
            $res['WT'] = $this->WT;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return items
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CNname'])) {
            $model->CNname = $map['CNname'];
        }
        if (isset($map['DBName'])) {
            $model->DBName = $map['DBName'];
        }
        if (isset($map['Extension'])) {
            $model->extension = $map['Extension'];
        }
        if (isset($map['Fail'])) {
            $model->fail = $map['Fail'];
        }
        if (isset($map['Frows'])) {
            $model->frows = $map['Frows'];
        }
        if (isset($map['HostAddress'])) {
            $model->hostAddress = $map['HostAddress'];
        }
        if (isset($map['InsName'])) {
            $model->insName = $map['InsName'];
        }
        if (isset($map['IsBind'])) {
            $model->isBind = $map['IsBind'];
        }
        if (isset($map['LockTimeMS'])) {
            $model->lockTimeMS = $map['LockTimeMS'];
        }
        if (isset($map['Params'])) {
            $model->params = $map['Params'];
        }
        if (isset($map['ParseRowCounts'])) {
            $model->parseRowCounts = $map['ParseRowCounts'];
        }
        if (isset($map['QueryStartTime'])) {
            $model->queryStartTime = $map['QueryStartTime'];
        }
        if (isset($map['QueryTime'])) {
            $model->queryTime = $map['QueryTime'];
        }
        if (isset($map['QueryTimeMS'])) {
            $model->queryTimeMS = $map['QueryTimeMS'];
        }
        if (isset($map['ReturnRowCounts'])) {
            $model->returnRowCounts = $map['ReturnRowCounts'];
        }
        if (isset($map['Rows'])) {
            $model->rows = $map['Rows'];
        }
        if (isset($map['SCNT'])) {
            $model->SCNT = $map['SCNT'];
        }
        if (isset($map['SQLHash'])) {
            $model->SQLHash = $map['SQLHash'];
        }
        if (isset($map['SQLText'])) {
            $model->SQLText = $map['SQLText'];
        }
        if (isset($map['SqlType'])) {
            $model->sqlType = $map['SqlType'];
        }
        if (isset($map['TooLong'])) {
            $model->tooLong = $map['TooLong'];
        }
        if (isset($map['TraceId'])) {
            $model->traceId = $map['TraceId'];
        }
        if (isset($map['TransactionPolicy'])) {
            $model->transactionPolicy = $map['TransactionPolicy'];
        }
        if (isset($map['TrxId'])) {
            $model->trxId = $map['TrxId'];
        }
        if (isset($map['WT'])) {
            $model->WT = $map['WT'];
        }

        return $model;
    }
}
