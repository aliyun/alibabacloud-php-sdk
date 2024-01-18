<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20220616\Models\AddUserSourceLogConfigResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The display details of the Logstore.
     *
     * @example cn-shanghai.siem-project.siem-logstore
     *
     * @var string
     */
    public $diplayLine;

    /**
     * @description Indicates whether the details of added logs are returned. Valid values: true false
     *
     * @example 0
     *
     * @var bool
     */
    public $displayed;

    /**
     * @description Indicates whether the logs are added to the threat analysis feature. Valid values: true false
     *
     * @example 0
     *
     * @var bool
     */
    public $imported;

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
