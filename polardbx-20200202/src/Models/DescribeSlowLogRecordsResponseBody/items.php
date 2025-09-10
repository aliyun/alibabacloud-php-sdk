<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeSlowLogRecordsResponseBody;

use AlibabaCloud\Dara\Model;

class items extends Model
{
    /**
     * @var string
     */
    public $CNname;

    /**
     * @var string
     */
    public $DBName;

    /**
     * @var string
     */
    public $extension;

    /**
     * @var string
     */
    public $fail;

    /**
     * @var string
     */
    public $frows;

    /**
     * @var string
     */
    public $hostAddress;

    /**
     * @var string
     */
    public $insName;

    /**
     * @var string
     */
    public $isBind;

    /**
     * @var string
     */
    public $lockTimeMS;

    /**
     * @var string
     */
    public $params;

    /**
     * @var string
     */
    public $parseRowCounts;

    /**
     * @var string
     */
    public $queryStartTime;

    /**
     * @var string
     */
    public $queryTime;

    /**
     * @var string
     */
    public $queryTimeMS;

    /**
     * @var string
     */
    public $returnRowCounts;

    /**
     * @var string
     */
    public $rows;

    /**
     * @var string
     */
    public $SCNT;

    /**
     * @var string
     */
    public $SQLHash;

    /**
     * @var string
     */
    public $SQLText;

    /**
     * @var string
     */
    public $sqlType;

    /**
     * @var string
     */
    public $templateId;

    /**
     * @var string
     */
    public $tooLong;

    /**
     * @var string
     */
    public $traceId;

    /**
     * @var string
     */
    public $transactionPolicy;

    /**
     * @var string
     */
    public $trxId;

    /**
     * @var string
     */
    public $WT;
    protected $_name = [
        'CNname' => 'CNname',
        'DBName' => 'DBName',
        'extension' => 'Extension',
        'fail' => 'Fail',
        'frows' => 'Frows',
        'hostAddress' => 'HostAddress',
        'insName' => 'InsName',
        'isBind' => 'IsBind',
        'lockTimeMS' => 'LockTimeMS',
        'params' => 'Params',
        'parseRowCounts' => 'ParseRowCounts',
        'queryStartTime' => 'QueryStartTime',
        'queryTime' => 'QueryTime',
        'queryTimeMS' => 'QueryTimeMS',
        'returnRowCounts' => 'ReturnRowCounts',
        'rows' => 'Rows',
        'SCNT' => 'SCNT',
        'SQLHash' => 'SQLHash',
        'SQLText' => 'SQLText',
        'sqlType' => 'SqlType',
        'templateId' => 'TemplateId',
        'tooLong' => 'TooLong',
        'traceId' => 'TraceId',
        'transactionPolicy' => 'TransactionPolicy',
        'trxId' => 'TrxId',
        'WT' => 'WT',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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

        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
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
