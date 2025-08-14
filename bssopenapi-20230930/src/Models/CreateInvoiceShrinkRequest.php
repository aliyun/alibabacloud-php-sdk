<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20230930\Models;

use AlibabaCloud\Dara\Model;

class CreateInvoiceShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $amount;

    /**
     * @var string
     */
    public $ecIdAccountIdsShrink;

    /**
     * @var string
     */
    public $invoiceCandidateIdsShrink;

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
     * @var string
     */
    public $recipientEmailsShrink;
    protected $_name = [
        'amount' => 'Amount',
        'ecIdAccountIdsShrink' => 'EcIdAccountIds',
        'invoiceCandidateIdsShrink' => 'InvoiceCandidateIds',
        'invoiceMode' => 'InvoiceMode',
        'invoiceRemark' => 'InvoiceRemark',
        'invoiceTitleId' => 'InvoiceTitleId',
        'invoiceType' => 'InvoiceType',
        'nbid' => 'Nbid',
        'recipientEmailsShrink' => 'RecipientEmails',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->amount) {
            $res['Amount'] = $this->amount;
        }

        if (null !== $this->ecIdAccountIdsShrink) {
            $res['EcIdAccountIds'] = $this->ecIdAccountIdsShrink;
        }

        if (null !== $this->invoiceCandidateIdsShrink) {
            $res['InvoiceCandidateIds'] = $this->invoiceCandidateIdsShrink;
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

        if (null !== $this->recipientEmailsShrink) {
            $res['RecipientEmails'] = $this->recipientEmailsShrink;
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
            $model->ecIdAccountIdsShrink = $map['EcIdAccountIds'];
        }

        if (isset($map['InvoiceCandidateIds'])) {
            $model->invoiceCandidateIdsShrink = $map['InvoiceCandidateIds'];
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
            $model->recipientEmailsShrink = $map['RecipientEmails'];
        }

        return $model;
    }
}
