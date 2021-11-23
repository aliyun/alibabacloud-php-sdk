<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeVATInvoiceResponseBody\data;

use AlibabaCloud\Tea\Model;

class box extends Model
{
    /**
     * @var float[]
     */
    public $checkers;

    /**
     * @var float[]
     */
    public $clerks;

    /**
     * @var float[]
     */
    public $invoiceAmounts;

    /**
     * @var float[]
     */
    public $invoiceCodes;

    /**
     * @var float[]
     */
    public $invoiceDates;

    /**
     * @var float[]
     */
    public $invoiceFakeCodes;

    /**
     * @var float[]
     */
    public $invoiceNoes;

    /**
     * @var float[]
     */
    public $payeeAddresses;

    /**
     * @var float[]
     */
    public $payeeBankNames;

    /**
     * @var float[]
     */
    public $payeeNames;

    /**
     * @var float[]
     */
    public $payeeRegisterNoes;

    /**
     * @var float[]
     */
    public $payees;

    /**
     * @var float[]
     */
    public $payerAddresses;

    /**
     * @var float[]
     */
    public $payerBankNames;

    /**
     * @var float[]
     */
    public $payerNames;

    /**
     * @var float[]
     */
    public $payerRegisterNoes;

    /**
     * @var float[]
     */
    public $sumAmounts;

    /**
     * @var float[]
     */
    public $taxAmounts;

    /**
     * @var float[]
     */
    public $withoutTaxAmounts;
    protected $_name = [
        'checkers'          => 'Checkers',
        'clerks'            => 'Clerks',
        'invoiceAmounts'    => 'InvoiceAmounts',
        'invoiceCodes'      => 'InvoiceCodes',
        'invoiceDates'      => 'InvoiceDates',
        'invoiceFakeCodes'  => 'InvoiceFakeCodes',
        'invoiceNoes'       => 'InvoiceNoes',
        'payeeAddresses'    => 'PayeeAddresses',
        'payeeBankNames'    => 'PayeeBankNames',
        'payeeNames'        => 'PayeeNames',
        'payeeRegisterNoes' => 'PayeeRegisterNoes',
        'payees'            => 'Payees',
        'payerAddresses'    => 'PayerAddresses',
        'payerBankNames'    => 'PayerBankNames',
        'payerNames'        => 'PayerNames',
        'payerRegisterNoes' => 'PayerRegisterNoes',
        'sumAmounts'        => 'SumAmounts',
        'taxAmounts'        => 'TaxAmounts',
        'withoutTaxAmounts' => 'WithoutTaxAmounts',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->checkers) {
            $res['Checkers'] = $this->checkers;
        }
        if (null !== $this->clerks) {
            $res['Clerks'] = $this->clerks;
        }
        if (null !== $this->invoiceAmounts) {
            $res['InvoiceAmounts'] = $this->invoiceAmounts;
        }
        if (null !== $this->invoiceCodes) {
            $res['InvoiceCodes'] = $this->invoiceCodes;
        }
        if (null !== $this->invoiceDates) {
            $res['InvoiceDates'] = $this->invoiceDates;
        }
        if (null !== $this->invoiceFakeCodes) {
            $res['InvoiceFakeCodes'] = $this->invoiceFakeCodes;
        }
        if (null !== $this->invoiceNoes) {
            $res['InvoiceNoes'] = $this->invoiceNoes;
        }
        if (null !== $this->payeeAddresses) {
            $res['PayeeAddresses'] = $this->payeeAddresses;
        }
        if (null !== $this->payeeBankNames) {
            $res['PayeeBankNames'] = $this->payeeBankNames;
        }
        if (null !== $this->payeeNames) {
            $res['PayeeNames'] = $this->payeeNames;
        }
        if (null !== $this->payeeRegisterNoes) {
            $res['PayeeRegisterNoes'] = $this->payeeRegisterNoes;
        }
        if (null !== $this->payees) {
            $res['Payees'] = $this->payees;
        }
        if (null !== $this->payerAddresses) {
            $res['PayerAddresses'] = $this->payerAddresses;
        }
        if (null !== $this->payerBankNames) {
            $res['PayerBankNames'] = $this->payerBankNames;
        }
        if (null !== $this->payerNames) {
            $res['PayerNames'] = $this->payerNames;
        }
        if (null !== $this->payerRegisterNoes) {
            $res['PayerRegisterNoes'] = $this->payerRegisterNoes;
        }
        if (null !== $this->sumAmounts) {
            $res['SumAmounts'] = $this->sumAmounts;
        }
        if (null !== $this->taxAmounts) {
            $res['TaxAmounts'] = $this->taxAmounts;
        }
        if (null !== $this->withoutTaxAmounts) {
            $res['WithoutTaxAmounts'] = $this->withoutTaxAmounts;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return box
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Checkers'])) {
            if (!empty($map['Checkers'])) {
                $model->checkers = $map['Checkers'];
            }
        }
        if (isset($map['Clerks'])) {
            if (!empty($map['Clerks'])) {
                $model->clerks = $map['Clerks'];
            }
        }
        if (isset($map['InvoiceAmounts'])) {
            if (!empty($map['InvoiceAmounts'])) {
                $model->invoiceAmounts = $map['InvoiceAmounts'];
            }
        }
        if (isset($map['InvoiceCodes'])) {
            if (!empty($map['InvoiceCodes'])) {
                $model->invoiceCodes = $map['InvoiceCodes'];
            }
        }
        if (isset($map['InvoiceDates'])) {
            if (!empty($map['InvoiceDates'])) {
                $model->invoiceDates = $map['InvoiceDates'];
            }
        }
        if (isset($map['InvoiceFakeCodes'])) {
            if (!empty($map['InvoiceFakeCodes'])) {
                $model->invoiceFakeCodes = $map['InvoiceFakeCodes'];
            }
        }
        if (isset($map['InvoiceNoes'])) {
            if (!empty($map['InvoiceNoes'])) {
                $model->invoiceNoes = $map['InvoiceNoes'];
            }
        }
        if (isset($map['PayeeAddresses'])) {
            if (!empty($map['PayeeAddresses'])) {
                $model->payeeAddresses = $map['PayeeAddresses'];
            }
        }
        if (isset($map['PayeeBankNames'])) {
            if (!empty($map['PayeeBankNames'])) {
                $model->payeeBankNames = $map['PayeeBankNames'];
            }
        }
        if (isset($map['PayeeNames'])) {
            if (!empty($map['PayeeNames'])) {
                $model->payeeNames = $map['PayeeNames'];
            }
        }
        if (isset($map['PayeeRegisterNoes'])) {
            if (!empty($map['PayeeRegisterNoes'])) {
                $model->payeeRegisterNoes = $map['PayeeRegisterNoes'];
            }
        }
        if (isset($map['Payees'])) {
            if (!empty($map['Payees'])) {
                $model->payees = $map['Payees'];
            }
        }
        if (isset($map['PayerAddresses'])) {
            if (!empty($map['PayerAddresses'])) {
                $model->payerAddresses = $map['PayerAddresses'];
            }
        }
        if (isset($map['PayerBankNames'])) {
            if (!empty($map['PayerBankNames'])) {
                $model->payerBankNames = $map['PayerBankNames'];
            }
        }
        if (isset($map['PayerNames'])) {
            if (!empty($map['PayerNames'])) {
                $model->payerNames = $map['PayerNames'];
            }
        }
        if (isset($map['PayerRegisterNoes'])) {
            if (!empty($map['PayerRegisterNoes'])) {
                $model->payerRegisterNoes = $map['PayerRegisterNoes'];
            }
        }
        if (isset($map['SumAmounts'])) {
            if (!empty($map['SumAmounts'])) {
                $model->sumAmounts = $map['SumAmounts'];
            }
        }
        if (isset($map['TaxAmounts'])) {
            if (!empty($map['TaxAmounts'])) {
                $model->taxAmounts = $map['TaxAmounts'];
            }
        }
        if (isset($map['WithoutTaxAmounts'])) {
            if (!empty($map['WithoutTaxAmounts'])) {
                $model->withoutTaxAmounts = $map['WithoutTaxAmounts'];
            }
        }

        return $model;
    }
}
