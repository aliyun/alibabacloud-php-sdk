<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Market\V20151101\Models;

use AlibabaCloud\Dara\Model;

class ModifyInvoiceForIsvRequest extends Model
{
    /**
     * @var string
     */
    public $checkNotice;

    /**
     * @var string
     */
    public $electronUrl;

    /**
     * @var int
     */
    public $invoiceId;

    /**
     * @var string
     */
    public $number;

    /**
     * @var int
     */
    public $operateType;

    /**
     * @var int
     */
    public $type;
    protected $_name = [
        'checkNotice' => 'CheckNotice',
        'electronUrl' => 'ElectronUrl',
        'invoiceId' => 'InvoiceId',
        'number' => 'Number',
        'operateType' => 'OperateType',
        'type' => 'Type',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->checkNotice) {
            $res['CheckNotice'] = $this->checkNotice;
        }

        if (null !== $this->electronUrl) {
            $res['ElectronUrl'] = $this->electronUrl;
        }

        if (null !== $this->invoiceId) {
            $res['InvoiceId'] = $this->invoiceId;
        }

        if (null !== $this->number) {
            $res['Number'] = $this->number;
        }

        if (null !== $this->operateType) {
            $res['OperateType'] = $this->operateType;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
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
        if (isset($map['CheckNotice'])) {
            $model->checkNotice = $map['CheckNotice'];
        }

        if (isset($map['ElectronUrl'])) {
            $model->electronUrl = $map['ElectronUrl'];
        }

        if (isset($map['InvoiceId'])) {
            $model->invoiceId = $map['InvoiceId'];
        }

        if (isset($map['Number'])) {
            $model->number = $map['Number'];
        }

        if (isset($map['OperateType'])) {
            $model->operateType = $map['OperateType'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
