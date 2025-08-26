<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeVATInvoiceResponseBody\data;

use AlibabaCloud\Dara\Model;

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
     * @var int[]
     */
    public $itemNames;

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
        'checkers' => 'Checkers',
        'clerks' => 'Clerks',
        'invoiceAmounts' => 'InvoiceAmounts',
        'invoiceCodes' => 'InvoiceCodes',
        'invoiceDates' => 'InvoiceDates',
        'invoiceFakeCodes' => 'InvoiceFakeCodes',
        'invoiceNoes' => 'InvoiceNoes',
        'itemNames' => 'ItemNames',
        'payeeAddresses' => 'PayeeAddresses',
        'payeeBankNames' => 'PayeeBankNames',
        'payeeNames' => 'PayeeNames',
        'payeeRegisterNoes' => 'PayeeRegisterNoes',
        'payees' => 'Payees',
        'payerAddresses' => 'PayerAddresses',
        'payerBankNames' => 'PayerBankNames',
        'payerNames' => 'PayerNames',
        'payerRegisterNoes' => 'PayerRegisterNoes',
        'sumAmounts' => 'SumAmounts',
        'taxAmounts' => 'TaxAmounts',
        'withoutTaxAmounts' => 'WithoutTaxAmounts',
    ];

    public function validate()
    {
        if (\is_array($this->checkers)) {
            Model::validateArray($this->checkers);
        }
        if (\is_array($this->clerks)) {
            Model::validateArray($this->clerks);
        }
        if (\is_array($this->invoiceAmounts)) {
            Model::validateArray($this->invoiceAmounts);
        }
        if (\is_array($this->invoiceCodes)) {
            Model::validateArray($this->invoiceCodes);
        }
        if (\is_array($this->invoiceDates)) {
            Model::validateArray($this->invoiceDates);
        }
        if (\is_array($this->invoiceFakeCodes)) {
            Model::validateArray($this->invoiceFakeCodes);
        }
        if (\is_array($this->invoiceNoes)) {
            Model::validateArray($this->invoiceNoes);
        }
        if (\is_array($this->itemNames)) {
            Model::validateArray($this->itemNames);
        }
        if (\is_array($this->payeeAddresses)) {
            Model::validateArray($this->payeeAddresses);
        }
        if (\is_array($this->payeeBankNames)) {
            Model::validateArray($this->payeeBankNames);
        }
        if (\is_array($this->payeeNames)) {
            Model::validateArray($this->payeeNames);
        }
        if (\is_array($this->payeeRegisterNoes)) {
            Model::validateArray($this->payeeRegisterNoes);
        }
        if (\is_array($this->payees)) {
            Model::validateArray($this->payees);
        }
        if (\is_array($this->payerAddresses)) {
            Model::validateArray($this->payerAddresses);
        }
        if (\is_array($this->payerBankNames)) {
            Model::validateArray($this->payerBankNames);
        }
        if (\is_array($this->payerNames)) {
            Model::validateArray($this->payerNames);
        }
        if (\is_array($this->payerRegisterNoes)) {
            Model::validateArray($this->payerRegisterNoes);
        }
        if (\is_array($this->sumAmounts)) {
            Model::validateArray($this->sumAmounts);
        }
        if (\is_array($this->taxAmounts)) {
            Model::validateArray($this->taxAmounts);
        }
        if (\is_array($this->withoutTaxAmounts)) {
            Model::validateArray($this->withoutTaxAmounts);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->checkers) {
            if (\is_array($this->checkers)) {
                $res['Checkers'] = [];
                $n1 = 0;
                foreach ($this->checkers as $item1) {
                    $res['Checkers'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->clerks) {
            if (\is_array($this->clerks)) {
                $res['Clerks'] = [];
                $n1 = 0;
                foreach ($this->clerks as $item1) {
                    $res['Clerks'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->invoiceAmounts) {
            if (\is_array($this->invoiceAmounts)) {
                $res['InvoiceAmounts'] = [];
                $n1 = 0;
                foreach ($this->invoiceAmounts as $item1) {
                    $res['InvoiceAmounts'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->invoiceCodes) {
            if (\is_array($this->invoiceCodes)) {
                $res['InvoiceCodes'] = [];
                $n1 = 0;
                foreach ($this->invoiceCodes as $item1) {
                    $res['InvoiceCodes'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->invoiceDates) {
            if (\is_array($this->invoiceDates)) {
                $res['InvoiceDates'] = [];
                $n1 = 0;
                foreach ($this->invoiceDates as $item1) {
                    $res['InvoiceDates'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->invoiceFakeCodes) {
            if (\is_array($this->invoiceFakeCodes)) {
                $res['InvoiceFakeCodes'] = [];
                $n1 = 0;
                foreach ($this->invoiceFakeCodes as $item1) {
                    $res['InvoiceFakeCodes'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->invoiceNoes) {
            if (\is_array($this->invoiceNoes)) {
                $res['InvoiceNoes'] = [];
                $n1 = 0;
                foreach ($this->invoiceNoes as $item1) {
                    $res['InvoiceNoes'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->itemNames) {
            if (\is_array($this->itemNames)) {
                $res['ItemNames'] = [];
                $n1 = 0;
                foreach ($this->itemNames as $item1) {
                    $res['ItemNames'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->payeeAddresses) {
            if (\is_array($this->payeeAddresses)) {
                $res['PayeeAddresses'] = [];
                $n1 = 0;
                foreach ($this->payeeAddresses as $item1) {
                    $res['PayeeAddresses'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->payeeBankNames) {
            if (\is_array($this->payeeBankNames)) {
                $res['PayeeBankNames'] = [];
                $n1 = 0;
                foreach ($this->payeeBankNames as $item1) {
                    $res['PayeeBankNames'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->payeeNames) {
            if (\is_array($this->payeeNames)) {
                $res['PayeeNames'] = [];
                $n1 = 0;
                foreach ($this->payeeNames as $item1) {
                    $res['PayeeNames'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->payeeRegisterNoes) {
            if (\is_array($this->payeeRegisterNoes)) {
                $res['PayeeRegisterNoes'] = [];
                $n1 = 0;
                foreach ($this->payeeRegisterNoes as $item1) {
                    $res['PayeeRegisterNoes'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->payees) {
            if (\is_array($this->payees)) {
                $res['Payees'] = [];
                $n1 = 0;
                foreach ($this->payees as $item1) {
                    $res['Payees'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->payerAddresses) {
            if (\is_array($this->payerAddresses)) {
                $res['PayerAddresses'] = [];
                $n1 = 0;
                foreach ($this->payerAddresses as $item1) {
                    $res['PayerAddresses'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->payerBankNames) {
            if (\is_array($this->payerBankNames)) {
                $res['PayerBankNames'] = [];
                $n1 = 0;
                foreach ($this->payerBankNames as $item1) {
                    $res['PayerBankNames'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->payerNames) {
            if (\is_array($this->payerNames)) {
                $res['PayerNames'] = [];
                $n1 = 0;
                foreach ($this->payerNames as $item1) {
                    $res['PayerNames'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->payerRegisterNoes) {
            if (\is_array($this->payerRegisterNoes)) {
                $res['PayerRegisterNoes'] = [];
                $n1 = 0;
                foreach ($this->payerRegisterNoes as $item1) {
                    $res['PayerRegisterNoes'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->sumAmounts) {
            if (\is_array($this->sumAmounts)) {
                $res['SumAmounts'] = [];
                $n1 = 0;
                foreach ($this->sumAmounts as $item1) {
                    $res['SumAmounts'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->taxAmounts) {
            if (\is_array($this->taxAmounts)) {
                $res['TaxAmounts'] = [];
                $n1 = 0;
                foreach ($this->taxAmounts as $item1) {
                    $res['TaxAmounts'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->withoutTaxAmounts) {
            if (\is_array($this->withoutTaxAmounts)) {
                $res['WithoutTaxAmounts'] = [];
                $n1 = 0;
                foreach ($this->withoutTaxAmounts as $item1) {
                    $res['WithoutTaxAmounts'][$n1] = $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['Checkers'])) {
            if (!empty($map['Checkers'])) {
                $model->checkers = [];
                $n1 = 0;
                foreach ($map['Checkers'] as $item1) {
                    $model->checkers[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Clerks'])) {
            if (!empty($map['Clerks'])) {
                $model->clerks = [];
                $n1 = 0;
                foreach ($map['Clerks'] as $item1) {
                    $model->clerks[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['InvoiceAmounts'])) {
            if (!empty($map['InvoiceAmounts'])) {
                $model->invoiceAmounts = [];
                $n1 = 0;
                foreach ($map['InvoiceAmounts'] as $item1) {
                    $model->invoiceAmounts[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['InvoiceCodes'])) {
            if (!empty($map['InvoiceCodes'])) {
                $model->invoiceCodes = [];
                $n1 = 0;
                foreach ($map['InvoiceCodes'] as $item1) {
                    $model->invoiceCodes[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['InvoiceDates'])) {
            if (!empty($map['InvoiceDates'])) {
                $model->invoiceDates = [];
                $n1 = 0;
                foreach ($map['InvoiceDates'] as $item1) {
                    $model->invoiceDates[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['InvoiceFakeCodes'])) {
            if (!empty($map['InvoiceFakeCodes'])) {
                $model->invoiceFakeCodes = [];
                $n1 = 0;
                foreach ($map['InvoiceFakeCodes'] as $item1) {
                    $model->invoiceFakeCodes[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['InvoiceNoes'])) {
            if (!empty($map['InvoiceNoes'])) {
                $model->invoiceNoes = [];
                $n1 = 0;
                foreach ($map['InvoiceNoes'] as $item1) {
                    $model->invoiceNoes[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['ItemNames'])) {
            if (!empty($map['ItemNames'])) {
                $model->itemNames = [];
                $n1 = 0;
                foreach ($map['ItemNames'] as $item1) {
                    $model->itemNames[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['PayeeAddresses'])) {
            if (!empty($map['PayeeAddresses'])) {
                $model->payeeAddresses = [];
                $n1 = 0;
                foreach ($map['PayeeAddresses'] as $item1) {
                    $model->payeeAddresses[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['PayeeBankNames'])) {
            if (!empty($map['PayeeBankNames'])) {
                $model->payeeBankNames = [];
                $n1 = 0;
                foreach ($map['PayeeBankNames'] as $item1) {
                    $model->payeeBankNames[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['PayeeNames'])) {
            if (!empty($map['PayeeNames'])) {
                $model->payeeNames = [];
                $n1 = 0;
                foreach ($map['PayeeNames'] as $item1) {
                    $model->payeeNames[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['PayeeRegisterNoes'])) {
            if (!empty($map['PayeeRegisterNoes'])) {
                $model->payeeRegisterNoes = [];
                $n1 = 0;
                foreach ($map['PayeeRegisterNoes'] as $item1) {
                    $model->payeeRegisterNoes[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Payees'])) {
            if (!empty($map['Payees'])) {
                $model->payees = [];
                $n1 = 0;
                foreach ($map['Payees'] as $item1) {
                    $model->payees[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['PayerAddresses'])) {
            if (!empty($map['PayerAddresses'])) {
                $model->payerAddresses = [];
                $n1 = 0;
                foreach ($map['PayerAddresses'] as $item1) {
                    $model->payerAddresses[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['PayerBankNames'])) {
            if (!empty($map['PayerBankNames'])) {
                $model->payerBankNames = [];
                $n1 = 0;
                foreach ($map['PayerBankNames'] as $item1) {
                    $model->payerBankNames[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['PayerNames'])) {
            if (!empty($map['PayerNames'])) {
                $model->payerNames = [];
                $n1 = 0;
                foreach ($map['PayerNames'] as $item1) {
                    $model->payerNames[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['PayerRegisterNoes'])) {
            if (!empty($map['PayerRegisterNoes'])) {
                $model->payerRegisterNoes = [];
                $n1 = 0;
                foreach ($map['PayerRegisterNoes'] as $item1) {
                    $model->payerRegisterNoes[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['SumAmounts'])) {
            if (!empty($map['SumAmounts'])) {
                $model->sumAmounts = [];
                $n1 = 0;
                foreach ($map['SumAmounts'] as $item1) {
                    $model->sumAmounts[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['TaxAmounts'])) {
            if (!empty($map['TaxAmounts'])) {
                $model->taxAmounts = [];
                $n1 = 0;
                foreach ($map['TaxAmounts'] as $item1) {
                    $model->taxAmounts[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['WithoutTaxAmounts'])) {
            if (!empty($map['WithoutTaxAmounts'])) {
                $model->withoutTaxAmounts = [];
                $n1 = 0;
                foreach ($map['WithoutTaxAmounts'] as $item1) {
                    $model->withoutTaxAmounts[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
