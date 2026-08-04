<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Accountcrm\V20160606\Models\FindFinanceTaxDetailResponseBody;

use AlibabaCloud\Dara\Model;

class finance extends Model
{
    /**
     * @var string
     */
    public $financeTaxCertificateImgName;

    /**
     * @var string
     */
    public $tax;

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
    protected $_name = [
        'financeTaxCertificateImgName' => 'FinanceTaxCertificateImgName',
        'tax' => 'Tax',
        'financeTaxCertificateImgUrl' => 'financeTaxCertificateImgUrl',
        'secondFinanceTax' => 'secondFinanceTax',
        'secondFinanceTaxCertificateImgName' => 'secondFinanceTaxCertificateImgName',
        'secondFinanceTaxCertificateImgUrl' => 'secondFinanceTaxCertificateImgUrl',
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

        if (null !== $this->tax) {
            $res['Tax'] = $this->tax;
        }

        if (null !== $this->financeTaxCertificateImgUrl) {
            $res['financeTaxCertificateImgUrl'] = $this->financeTaxCertificateImgUrl;
        }

        if (null !== $this->secondFinanceTax) {
            $res['secondFinanceTax'] = $this->secondFinanceTax;
        }

        if (null !== $this->secondFinanceTaxCertificateImgName) {
            $res['secondFinanceTaxCertificateImgName'] = $this->secondFinanceTaxCertificateImgName;
        }

        if (null !== $this->secondFinanceTaxCertificateImgUrl) {
            $res['secondFinanceTaxCertificateImgUrl'] = $this->secondFinanceTaxCertificateImgUrl;
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

        if (isset($map['Tax'])) {
            $model->tax = $map['Tax'];
        }

        if (isset($map['financeTaxCertificateImgUrl'])) {
            $model->financeTaxCertificateImgUrl = $map['financeTaxCertificateImgUrl'];
        }

        if (isset($map['secondFinanceTax'])) {
            $model->secondFinanceTax = $map['secondFinanceTax'];
        }

        if (isset($map['secondFinanceTaxCertificateImgName'])) {
            $model->secondFinanceTaxCertificateImgName = $map['secondFinanceTaxCertificateImgName'];
        }

        if (isset($map['secondFinanceTaxCertificateImgUrl'])) {
            $model->secondFinanceTaxCertificateImgUrl = $map['secondFinanceTaxCertificateImgUrl'];
        }

        return $model;
    }
}
