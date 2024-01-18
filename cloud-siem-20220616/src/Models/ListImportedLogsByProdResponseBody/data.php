<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20220616\Models\ListImportedLogsByProdResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description Indicates whether the log is automatically added to the threat analysis feature within newly added accounts. Valid values:
     *
     *   1: yes
     *   0: no
     *
     * @example 2023-11-23 12:30:00
     *
     * @var int
     */
    public $autoImported;

    /**
     * @description The code of the cloud service provider. Valid values:
     *
     *   qcloud: Tencent Cloud
     *   aliyun: Alibaba Cloud
     *   hcloud: Huawei Cloud
     *
     * @example hcloud
     *
     * @var string
     */
    public $cloudCode;

    /**
     * @description Indicates whether the log is added to the threat analysis feature. Valid values:
     *
     *   1: yes
     *   0: no
     *
     * @example 2023-11-23 12:30:00
     *
     * @var int
     */
    public $imported;

    /**
     * @description The number of users who have added the log.
     *
     * @example 2
     *
     * @var int
     */
    public $importedUserCount;

    /**
     * @description The log code.
     *
     * @example cloud_siem_waf_xxxxx
     *
     * @var string
     */
    public $logCode;

    /**
     * @description The display log code.
     *
     * @example ${siem.prod. cloud_siem_waf_xxxxx}
     *
     * @var string
     */
    public $logMdsCode;

    /**
     * @description The time when the log was last added.
     *
     * @example 2023-11-23 12:30:00
     *
     * @var string
     */
    public $modifyTime;

    /**
     * @description The code of the cloud service to which the log belongs.
     *
     * @example qcloud_waf
     *
     * @var string
     */
    public $prodCode;

    /**
     * @description The total number of users who have the log.
     *
     * @example 5
     *
     * @var int
     */
    public $totalUserCount;

    /**
     * @description The number of users who have not added the log.
     *
     * @example 3
     *
     * @var int
     */
    public $unImportedUserCount;
    protected $_name = [
        'autoImported'        => 'AutoImported',
        'cloudCode'           => 'CloudCode',
        'imported'            => 'Imported',
        'importedUserCount'   => 'ImportedUserCount',
        'logCode'             => 'LogCode',
        'logMdsCode'          => 'LogMdsCode',
        'modifyTime'          => 'ModifyTime',
        'prodCode'            => 'ProdCode',
        'totalUserCount'      => 'TotalUserCount',
        'unImportedUserCount' => 'UnImportedUserCount',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return data
     */
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
