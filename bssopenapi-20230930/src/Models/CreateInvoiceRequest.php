<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20230930\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BssOpenApi\V20230930\Models\CreateInvoiceRequest\ecIdAccountIds;

class CreateInvoiceRequest extends Model
{
    /**
     * @var string
     */
    public $amount;

    /**
     * @var ecIdAccountIds[]
     */
    public $ecIdAccountIds;

    /**
     * @var string[]
     */
    public $invoiceCandidateIds;

    /**
     * @var int
     */
    public $invoiceMode;

    /**
     * @var string
     */
    public $invoiceRemark;

    /**
     * @var string
     */
    public $invoiceTitleId;

    /**
     * @var int
     */
    public $invoiceType;

    /**
     * @var string
     */
    public $nbid;

    /**
     * @var string[]
     */
    public $recipientEmails;
    protected $_name = [
        'amount' => 'Amount',
        'ecIdAccountIds' => 'EcIdAccountIds',
        'invoiceCandidateIds' => 'InvoiceCandidateIds',
        'invoiceMode' => 'InvoiceMode',
        'invoiceRemark' => 'InvoiceRemark',
        'invoiceTitleId' => 'InvoiceTitleId',
        'invoiceType' => 'InvoiceType',
        'nbid' => 'Nbid',
        'recipientEmails' => 'RecipientEmails',
    ];

    public function validate()
    {
        if (\is_array($this->ecIdAccountIds)) {
            Model::validateArray($this->ecIdAccountIds);
        }
        if (\is_array($this->invoiceCandidateIds)) {
            Model::validateArray($this->invoiceCandidateIds);
        }
        if (\is_array($this->recipientEmails)) {
            Model::validateArray($this->recipientEmails);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->amount) {
            $res['Amount'] = $this->amount;
        }

        if (null !== $this->ecIdAccountIds) {
            if (\is_array($this->ecIdAccountIds)) {
                $res['EcIdAccountIds'] = [];
                $n1 = 0;
                foreach ($this->ecIdAccountIds as $item1) {
                    $res['EcIdAccountIds'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->invoiceCandidateIds) {
            if (\is_array($this->invoiceCandidateIds)) {
                $res['InvoiceCandidateIds'] = [];
                $n1 = 0;
                foreach ($this->invoiceCandidateIds as $item1) {
                    $res['InvoiceCandidateIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->invoiceMode) {
            $res['InvoiceMode'] = $this->invoiceMode;
        }

        if (null !== $this->invoiceRemark) {
            $res['InvoiceRemark'] = $this->invoiceRemark;
        }

        if (null !== $this->invoiceTitleId) {
            $res['InvoiceTitleId'] = $this->invoiceTitleId;
        }

        if (null !== $this->invoiceType) {
            $res['InvoiceType'] = $this->invoiceType;
        }

        if (null !== $this->nbid) {
            $res['Nbid'] = $this->nbid;
        }

        if (null !== $this->recipientEmails) {
            if (\is_array($this->recipientEmails)) {
                $res['RecipientEmails'] = [];
                $n1 = 0;
                foreach ($this->recipientEmails as $item1) {
                    $res['RecipientEmails'][$n1] = $item1;
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
        if (isset($map['Amount'])) {
            $model->amount = $map['Amount'];
        }

        if (isset($map['EcIdAccountIds'])) {
            if (!empty($map['EcIdAccountIds'])) {
                $model->ecIdAccountIds = [];
                $n1 = 0;
                foreach ($map['EcIdAccountIds'] as $item1) {
                    $model->ecIdAccountIds[$n1] = ecIdAccountIds::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['InvoiceCandidateIds'])) {
            if (!empty($map['InvoiceCandidateIds'])) {
                $model->invoiceCandidateIds = [];
                $n1 = 0;
                foreach ($map['InvoiceCandidateIds'] as $item1) {
                    $model->invoiceCandidateIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['InvoiceMode'])) {
            $model->invoiceMode = $map['InvoiceMode'];
        }

        if (isset($map['InvoiceRemark'])) {
            $model->invoiceRemark = $map['InvoiceRemark'];
        }

        if (isset($map['InvoiceTitleId'])) {
            $model->invoiceTitleId = $map['InvoiceTitleId'];
        }

        if (isset($map['InvoiceType'])) {
            $model->invoiceType = $map['InvoiceType'];
        }

        if (isset($map['Nbid'])) {
            $model->nbid = $map['Nbid'];
        }

        if (isset($map['RecipientEmails'])) {
            if (!empty($map['RecipientEmails'])) {
                $model->recipientEmails = [];
                $n1 = 0;
                foreach ($map['RecipientEmails'] as $item1) {
                    $model->recipientEmails[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
