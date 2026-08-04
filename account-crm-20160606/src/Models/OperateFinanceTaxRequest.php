<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Accountcrm\V20160606\Models;

use AlibabaCloud\Dara\Model;

class OperateFinanceTaxRequest extends Model
{
    /**
     * @var string
     */
    public $financeTax;

    /**
     * @var string
     */
    public $financeTaxCertificateImgName;

    /**
     * @var int
     */
    public $HId;

    /**
     * @var string
     */
    public $secondFinanceTax;

    /**
     * @var string
     */
    public $secondFinanceTaxCertificateImgName;

    /**
     * @var string
     */
    public $secondFinanceTaxCertificateImgUrl;

    /**
     * @var string
     */
    public $financeTaxCertificateImgUrl;
    protected $_name = [
        'financeTax' => 'FinanceTax',
        'financeTaxCertificateImgName' => 'FinanceTaxCertificateImgName',
        'HId' => 'HId',
        'secondFinanceTax' => 'SecondFinanceTax',
        'secondFinanceTaxCertificateImgName' => 'SecondFinanceTaxCertificateImgName',
        'secondFinanceTaxCertificateImgUrl' => 'SecondFinanceTaxCertificateImgUrl',
        'financeTaxCertificateImgUrl' => 'financeTaxCertificateImgUrl',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->financeTax) {
            $res['FinanceTax'] = $this->financeTax;
        }

        if (null !== $this->financeTaxCertificateImgName) {
            $res['FinanceTaxCertificateImgName'] = $this->financeTaxCertificateImgName;
        }

        if (null !== $this->HId) {
            $res['HId'] = $this->HId;
        }

        if (null !== $this->secondFinanceTax) {
            $res['SecondFinanceTax'] = $this->secondFinanceTax;
        }

        if (null !== $this->secondFinanceTaxCertificateImgName) {
            $res['SecondFinanceTaxCertificateImgName'] = $this->secondFinanceTaxCertificateImgName;
        }

        if (null !== $this->secondFinanceTaxCertificateImgUrl) {
            $res['SecondFinanceTaxCertificateImgUrl'] = $this->secondFinanceTaxCertificateImgUrl;
        }

        if (null !== $this->financeTaxCertificateImgUrl) {
            $res['financeTaxCertificateImgUrl'] = $this->financeTaxCertificateImgUrl;
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
        if (isset($map['FinanceTax'])) {
            $model->financeTax = $map['FinanceTax'];
        }

        if (isset($map['FinanceTaxCertificateImgName'])) {
            $model->financeTaxCertificateImgName = $map['FinanceTaxCertificateImgName'];
        }

        if (isset($map['HId'])) {
            $model->HId = $map['HId'];
        }

        if (isset($map['SecondFinanceTax'])) {
            $model->secondFinanceTax = $map['SecondFinanceTax'];
        }

        if (isset($map['SecondFinanceTaxCertificateImgName'])) {
            $model->secondFinanceTaxCertificateImgName = $map['SecondFinanceTaxCertificateImgName'];
        }

        if (isset($map['SecondFinanceTaxCertificateImgUrl'])) {
            $model->secondFinanceTaxCertificateImgUrl = $map['SecondFinanceTaxCertificateImgUrl'];
        }

        if (isset($map['financeTaxCertificateImgUrl'])) {
            $model->financeTaxCertificateImgUrl = $map['financeTaxCertificateImgUrl'];
        }

        return $model;
    }
}
