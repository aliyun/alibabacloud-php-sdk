<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20230930\Models;

use AlibabaCloud\SDK\BssOpenApi\V20230930\Models\CreateInvoiceRequest\ecIdAccountIds;
use AlibabaCloud\Tea\Model;

class CreateInvoiceRequest extends Model
{
    /**
     * @example 0.01
     *
     * @var string
     */
    public $amount;

    /**
     * @var ecIdAccountIds[]
     */
    public $ecIdAccountIds;

    /**
     * @description This parameter is required.
     *
     * @var string[]
     */
    public $invoiceCandidateIds;

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

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->amount) {
            $res['Amount'] = $this->amount;
        }
        if (null !== $this->ecIdAccountIds) {
            $res['EcIdAccountIds'] = [];
            if (null !== $this->ecIdAccountIds && \is_array($this->ecIdAccountIds)) {
                $n = 0;
                foreach ($this->ecIdAccountIds as $item) {
                    $res['EcIdAccountIds'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->invoiceCandidateIds) {
            $res['InvoiceCandidateIds'] = $this->invoiceCandidateIds;
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
            $res['RecipientEmails'] = $this->recipientEmails;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateInvoiceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Amount'])) {
            $model->amount = $map['Amount'];
        }
        if (isset($map['EcIdAccountIds'])) {
            if (!empty($map['EcIdAccountIds'])) {
                $model->ecIdAccountIds = [];
                $n = 0;
                foreach ($map['EcIdAccountIds'] as $item) {
                    $model->ecIdAccountIds[$n++] = null !== $item ? ecIdAccountIds::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['InvoiceCandidateIds'])) {
            if (!empty($map['InvoiceCandidateIds'])) {
                $model->invoiceCandidateIds = $map['InvoiceCandidateIds'];
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
                $model->recipientEmails = $map['RecipientEmails'];
            }
        }

        return $model;
    }
}
