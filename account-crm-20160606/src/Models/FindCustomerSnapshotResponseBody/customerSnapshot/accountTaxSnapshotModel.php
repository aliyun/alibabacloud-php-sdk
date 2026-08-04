<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Accountcrm\V20160606\Models\FindCustomerSnapshotResponseBody\customerSnapshot;

use AlibabaCloud\Dara\Model;

class accountTaxSnapshotModel extends Model
{
    /**
     * @var string
     */
    public $financeTaxCertificateImgName;

    /**
     * @var string
     */
    public $financeTaxCertificateImgUrl;

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
    public $tax;
    protected $_name = [
        'financeTaxCertificateImgName' => 'FinanceTaxCertificateImgName',
        'financeTaxCertificateImgUrl' => 'FinanceTaxCertificateImgUrl',
        'secondFinanceTax' => 'SecondFinanceTax',
        'secondFinanceTaxCertificateImgName' => 'SecondFinanceTaxCertificateImgName',
        'secondFinanceTaxCertificateImgUrl' => 'SecondFinanceTaxCertificateImgUrl',
        'tax' => 'Tax',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->financeTaxCertificateImgName) {
            $res['FinanceTaxCertificateImgName'] = $this->financeTaxCertificateImgName;
        }

        if (null !== $this->financeTaxCertificateImgUrl) {
            $res['FinanceTaxCertificateImgUrl'] = $this->financeTaxCertificateImgUrl;
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

        if (null !== $this->tax) {
            $res['Tax'] = $this->tax;
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
        if (isset($map['FinanceTaxCertificateImgName'])) {
            $model->financeTaxCertificateImgName = $map['FinanceTaxCertificateImgName'];
        }

        if (isset($map['FinanceTaxCertificateImgUrl'])) {
            $model->financeTaxCertificateImgUrl = $map['FinanceTaxCertificateImgUrl'];
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

        if (isset($map['Tax'])) {
            $model->tax = $map['Tax'];
        }

        return $model;
    }
}
