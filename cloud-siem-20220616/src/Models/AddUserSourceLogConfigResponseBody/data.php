<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20220616\Models\AddUserSourceLogConfigResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example cn-shanghai.siem-project.siem-logstore
     *
     * @var string
     */
    public $diplayLine;

    /**
     * @example 0
     *
     * @var bool
     */
    public $displayed;

    /**
     * @example 0
     *
     * @var bool
     */
    public $imported;

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
        'diplayLine'     => 'DiplayLine',
        'displayed'      => 'Displayed',
        'imported'       => 'Imported',
        'mainUserId'     => 'MainUserId',
        'sourceLogCode'  => 'SourceLogCode',
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
        if (null !== $this->diplayLine) {
            $res['DiplayLine'] = $this->diplayLine;
        }
        if (null !== $this->displayed) {
            $res['Displayed'] = $this->displayed;
        }
        if (null !== $this->imported) {
            $res['Imported'] = $this->imported;
        }
        if (null !== $this->mainUserId) {
            $res['MainUserId'] = $this->mainUserId;
        }
        if (null !== $this->sourceLogCode) {
            $res['SourceLogCode'] = $this->sourceLogCode;
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
        if (isset($map['DiplayLine'])) {
            $model->diplayLine = $map['DiplayLine'];
        }
        if (isset($map['Displayed'])) {
            $model->displayed = $map['Displayed'];
        }
        if (isset($map['Imported'])) {
            $model->imported = $map['Imported'];
        }
        if (isset($map['MainUserId'])) {
            $model->mainUserId = $map['MainUserId'];
        }
        if (isset($map['SourceLogCode'])) {
            $model->sourceLogCode = $map['SourceLogCode'];
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
