<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20220616\Models\ListUserProdLogsResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example cn-shanghai.siem-project.siem-logstore
     *
     * @var string
     */
    public $displayLine;

    /**
     * @example true
     *
     * @var bool
     */
    public $displayed;

    /**
     * @example true
     *
     * @var bool
     */
    public $imported;

    /**
     * @example 0
     *
     * @var int
     */
    public $isDeleted;

    /**
     * @example 123XXXXXXXXX
     *
     * @var int
     */
    public $mainUserId;

    /**
     * @example cloud_siem_aegis_proc
     *
     * @var string
     */
    public $sourceLogCode;

    /**
     * @example {"project":"wafnew-project-1335759343513432-cn-hangzhou","logStore":"wafnew-logstore","regionCode":"cn-hangzhou","prodCode":"waf"}
     *
     * @var string
     */
    public $sourceLogInfo;

    /**
     * @example sas
     *
     * @var string
     */
    public $sourceProdCode;

    /**
     * @example 123XXXXXXXX
     *
     * @var int
     */
    public $subUserId;

    /**
     * @example sas_account_xxx
     *
     * @var string
     */
    public $subUserName;
    protected $_name = [
        'displayLine'    => 'DisplayLine',
        'displayed'      => 'Displayed',
        'imported'       => 'Imported',
        'isDeleted'      => 'IsDeleted',
        'mainUserId'     => 'MainUserId',
        'sourceLogCode'  => 'SourceLogCode',
        'sourceLogInfo'  => 'SourceLogInfo',
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
        if (null !== $this->displayLine) {
            $res['DisplayLine'] = $this->displayLine;
        }
        if (null !== $this->displayed) {
            $res['Displayed'] = $this->displayed;
        }
        if (null !== $this->imported) {
            $res['Imported'] = $this->imported;
        }
        if (null !== $this->isDeleted) {
            $res['IsDeleted'] = $this->isDeleted;
        }
        if (null !== $this->mainUserId) {
            $res['MainUserId'] = $this->mainUserId;
        }
        if (null !== $this->sourceLogCode) {
            $res['SourceLogCode'] = $this->sourceLogCode;
        }
        if (null !== $this->sourceLogInfo) {
            $res['SourceLogInfo'] = $this->sourceLogInfo;
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
        if (isset($map['DisplayLine'])) {
            $model->displayLine = $map['DisplayLine'];
        }
        if (isset($map['Displayed'])) {
            $model->displayed = $map['Displayed'];
        }
        if (isset($map['Imported'])) {
            $model->imported = $map['Imported'];
        }
        if (isset($map['IsDeleted'])) {
            $model->isDeleted = $map['IsDeleted'];
        }
        if (isset($map['MainUserId'])) {
            $model->mainUserId = $map['MainUserId'];
        }
        if (isset($map['SourceLogCode'])) {
            $model->sourceLogCode = $map['SourceLogCode'];
        }
        if (isset($map['SourceLogInfo'])) {
            $model->sourceLogInfo = $map['SourceLogInfo'];
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
