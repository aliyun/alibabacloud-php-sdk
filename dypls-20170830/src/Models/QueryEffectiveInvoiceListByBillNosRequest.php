<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dypls\V20170830\Models;

use AlibabaCloud\Tea\Model;

class QueryEffectiveInvoiceListByBillNosRequest extends Model
{
    /**
     * @var string
     */
    public $appCode;

    /**
     * @var string
     */
    public $billNo;

    /**
     * @var string[]
     */
    public $encryptProps;

    /**
     * @var string
     */
    public $language;

    /**
     * @var string
     */
    public $majorBillNo;

    /**
     * @var string
     */
    public $ouCode;

    /**
     * @var string
     */
    public $relatedSystem;

    /**
     * @var string
     */
    public $sign;

    /**
     * @var string
     */
    public $uuid;
    protected $_name = [
        'appCode'       => 'AppCode',
        'billNo'        => 'BillNo',
        'encryptProps'  => 'EncryptProps',
        'language'      => 'Language',
        'majorBillNo'   => 'MajorBillNo',
        'ouCode'        => 'OuCode',
        'relatedSystem' => 'RelatedSystem',
        'sign'          => 'Sign',
        'uuid'          => 'Uuid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appCode) {
            $res['AppCode'] = $this->appCode;
        }
        if (null !== $this->billNo) {
            $res['BillNo'] = $this->billNo;
        }
        if (null !== $this->encryptProps) {
            $res['EncryptProps'] = $this->encryptProps;
        }
        if (null !== $this->language) {
            $res['Language'] = $this->language;
        }
        if (null !== $this->majorBillNo) {
            $res['MajorBillNo'] = $this->majorBillNo;
        }
        if (null !== $this->ouCode) {
            $res['OuCode'] = $this->ouCode;
        }
        if (null !== $this->relatedSystem) {
            $res['RelatedSystem'] = $this->relatedSystem;
        }
        if (null !== $this->sign) {
            $res['Sign'] = $this->sign;
        }
        if (null !== $this->uuid) {
            $res['Uuid'] = $this->uuid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryEffectiveInvoiceListByBillNosRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppCode'])) {
            $model->appCode = $map['AppCode'];
        }
        if (isset($map['BillNo'])) {
            $model->billNo = $map['BillNo'];
        }
        if (isset($map['EncryptProps'])) {
            $model->encryptProps = $map['EncryptProps'];
        }
        if (isset($map['Language'])) {
            $model->language = $map['Language'];
        }
        if (isset($map['MajorBillNo'])) {
            $model->majorBillNo = $map['MajorBillNo'];
        }
        if (isset($map['OuCode'])) {
            $model->ouCode = $map['OuCode'];
        }
        if (isset($map['RelatedSystem'])) {
            $model->relatedSystem = $map['RelatedSystem'];
        }
        if (isset($map['Sign'])) {
            $model->sign = $map['Sign'];
        }
        if (isset($map['Uuid'])) {
            $model->uuid = $map['Uuid'];
        }

        return $model;
    }
}
