<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20230930\Models;

use AlibabaCloud\Tea\Model;

class CreateInvoiceShrinkRequest extends Model
{
    /**
     * @example 0.01
     *
     * @var string
     */
    public $amount;

    /**
     * @var string
     */
    public $ecIdAccountIdsShrink;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $invoiceCandidateIdsShrink;

    /**
     * @description This parameter is required.
     *
     * @example 0
     *
     * @var int
     */
    public $invoiceMode;

    /**
     * @var string
     */
    public $invoiceRemark;

    /**
     * @description This parameter is required.
     *
     * @example 12345
     *
     * @var string
     */
    public $invoiceTitleId;

    /**
     * @description This parameter is required.
     *
     * @example 0
     *
     * @var int
     */
    public $invoiceType;

    /**
     * @example 2684201000001
     *
     * @var string
     */
    public $nbid;

    /**
     * @description This parameter is required.
     *
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

    public function validate() {}

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return CreateInvoiceShrinkRequest
     */
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
