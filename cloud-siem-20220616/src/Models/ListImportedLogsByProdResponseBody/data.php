<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20220616\Models\ListImportedLogsByProdResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $autoImported;

    /**
     * @var string
     */
    public $cloudCode;

    /**
     * @var int
     */
    public $imported;

    /**
     * @var int
     */
    public $importedUserCount;

    /**
     * @var string
     */
    public $logCode;

    /**
     * @var string
     */
    public $logMdsCode;

    /**
     * @var int
     */
    public $logType;

    /**
     * @var string
     */
    public $modifyTime;

    /**
     * @var string
     */
    public $prodCode;

    /**
     * @var int
     */
    public $totalUserCount;

    /**
     * @var int
     */
    public $unImportedUserCount;
    protected $_name = [
        'autoImported' => 'AutoImported',
        'cloudCode' => 'CloudCode',
        'imported' => 'Imported',
        'importedUserCount' => 'ImportedUserCount',
        'logCode' => 'LogCode',
        'logMdsCode' => 'LogMdsCode',
        'logType' => 'LogType',
        'modifyTime' => 'ModifyTime',
        'prodCode' => 'ProdCode',
        'totalUserCount' => 'TotalUserCount',
        'unImportedUserCount' => 'UnImportedUserCount',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->autoImported) {
            $res['AutoImported'] = $this->autoImported;
        }

        if (null !== $this->cloudCode) {
            $res['CloudCode'] = $this->cloudCode;
        }

        if (null !== $this->imported) {
            $res['Imported'] = $this->imported;
        }

        if (null !== $this->importedUserCount) {
            $res['ImportedUserCount'] = $this->importedUserCount;
        }

        if (null !== $this->logCode) {
            $res['LogCode'] = $this->logCode;
        }

        if (null !== $this->logMdsCode) {
            $res['LogMdsCode'] = $this->logMdsCode;
        }

        if (null !== $this->logType) {
            $res['LogType'] = $this->logType;
        }

        if (null !== $this->modifyTime) {
            $res['ModifyTime'] = $this->modifyTime;
        }

        if (null !== $this->prodCode) {
            $res['ProdCode'] = $this->prodCode;
        }

        if (null !== $this->totalUserCount) {
            $res['TotalUserCount'] = $this->totalUserCount;
        }

        if (null !== $this->unImportedUserCount) {
            $res['UnImportedUserCount'] = $this->unImportedUserCount;
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
        if (isset($map['AutoImported'])) {
            $model->autoImported = $map['AutoImported'];
        }

        if (isset($map['CloudCode'])) {
            $model->cloudCode = $map['CloudCode'];
        }

        if (isset($map['Imported'])) {
            $model->imported = $map['Imported'];
        }

        if (isset($map['ImportedUserCount'])) {
            $model->importedUserCount = $map['ImportedUserCount'];
        }

        if (isset($map['LogCode'])) {
            $model->logCode = $map['LogCode'];
        }

        if (isset($map['LogMdsCode'])) {
            $model->logMdsCode = $map['LogMdsCode'];
        }

        if (isset($map['LogType'])) {
            $model->logType = $map['LogType'];
        }

        if (isset($map['ModifyTime'])) {
            $model->modifyTime = $map['ModifyTime'];
        }

        if (isset($map['ProdCode'])) {
            $model->prodCode = $map['ProdCode'];
        }

        if (isset($map['TotalUserCount'])) {
            $model->totalUserCount = $map['TotalUserCount'];
        }

        if (isset($map['UnImportedUserCount'])) {
            $model->unImportedUserCount = $map['UnImportedUserCount'];
        }

        return $model;
    }
}
