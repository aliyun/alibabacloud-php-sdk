<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20220616\Models\ListUsersByProdResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
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
     * @description Indicates whether the log is added to the threat analysis feature.
     *
     * @example true
     *
     * @var bool
     */
    public $imported;

    /**
     * @description The display log code. The value is based on your console settings.
     *
     * @example ${siem.xxx.xxxxxxxxx}
     *
     * @var string
     */
    public $logMdsCode;

    /**
     * @description The ID of the Alibaba Cloud account that is used to purchase the threat analysis feature.
     *
     * @example 123XXXXXXXXX
     *
     * @var int
     */
    public $mainUserId;

    /**
     * @description The log code.
     *
     * @example cloud_siem_aegis_proc
     *
     * @var string
     */
    public $sourceLogCode;

    /**
     * @description The log name.
     *
     * @example the process startup log
     *
     * @var string
     */
    public $sourceLogName;

    /**
     * @description The code of the cloud service.
     *
     * @example sas
     *
     * @var string
     */
    public $sourceProdCode;

    /**
     * @description The ID of the Alibaba Cloud account that can be used to perform operations supported by the threat analysis feature.
     *
     * @example 123XXXXXXXX
     *
     * @var int
     */
    public $subUserId;

    /**
     * @description The username of the Alibaba Cloud account that can be used to perform operations supported by the threat analysis feature.
     *
     * @example sas_account_xxx
     *
     * @var string
     */
    public $subUserName;
    protected $_name = [
        'cloudCode'      => 'CloudCode',
        'imported'       => 'Imported',
        'logMdsCode'     => 'LogMdsCode',
        'mainUserId'     => 'MainUserId',
        'sourceLogCode'  => 'SourceLogCode',
        'sourceLogName'  => 'SourceLogName',
        'sourceProdCode' => 'SourceProdCode',
        'subUserId'      => 'SubUserId',
        'subUserName'    => 'SubUserName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cloudCode) {
            $res['CloudCode'] = $this->cloudCode;
        }
        if (null !== $this->imported) {
            $res['Imported'] = $this->imported;
        }
        if (null !== $this->logMdsCode) {
            $res['LogMdsCode'] = $this->logMdsCode;
        }
        if (null !== $this->mainUserId) {
            $res['MainUserId'] = $this->mainUserId;
        }
        if (null !== $this->sourceLogCode) {
            $res['SourceLogCode'] = $this->sourceLogCode;
        }
        if (null !== $this->sourceLogName) {
            $res['SourceLogName'] = $this->sourceLogName;
        }
        if (null !== $this->sourceProdCode) {
            $res['SourceProdCode'] = $this->sourceProdCode;
        }
        if (null !== $this->subUserId) {
            $res['SubUserId'] = $this->subUserId;
        }
        if (null !== $this->subUserName) {
            $res['SubUserName'] = $this->subUserName;
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
        if (isset($map['CloudCode'])) {
            $model->cloudCode = $map['CloudCode'];
        }
        if (isset($map['Imported'])) {
            $model->imported = $map['Imported'];
        }
        if (isset($map['LogMdsCode'])) {
            $model->logMdsCode = $map['LogMdsCode'];
        }
        if (isset($map['MainUserId'])) {
            $model->mainUserId = $map['MainUserId'];
        }
        if (isset($map['SourceLogCode'])) {
            $model->sourceLogCode = $map['SourceLogCode'];
        }
        if (isset($map['SourceLogName'])) {
            $model->sourceLogName = $map['SourceLogName'];
        }
        if (isset($map['SourceProdCode'])) {
            $model->sourceProdCode = $map['SourceProdCode'];
        }
        if (isset($map['SubUserId'])) {
            $model->subUserId = $map['SubUserId'];
        }
        if (isset($map['SubUserName'])) {
            $model->subUserName = $map['SubUserName'];
        }

        return $model;
    }
}
