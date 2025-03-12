<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20230930\Models;

use AlibabaCloud\Tea\Model;

class DistributionSku extends Model
{
    /**
     * @var string
     */
    public $aliasTitle;

    /**
     * @var string
     */
    public $barCode;

    /**
     * @var int
     */
    public $creditPeriod;

    /**
     * @var int
     */
    public $dxPrice;

    /**
     * @var bool
     */
    public $hasCredit;

    /**
     * @var bool
     */
    public $hasInvoice;

    /**
     * @var int
     */
    public $jxPrice;

    /**
     * @var string
     */
    public $picUrl;

    /**
     * @var int
     */
    public $quantity;

    /**
     * @var string
     */
    public $skuId;

    /**
     * @var string
     */
    public $skuStatus;

    /**
     * @var string
     */
    public $taxCode;

    /**
     * @var int
     */
    public $taxRate;

    /**
     * @var string
     */
    public $title;
    protected $_name = [
        'aliasTitle'   => 'aliasTitle',
        'barCode'      => 'barCode',
        'creditPeriod' => 'creditPeriod',
        'dxPrice'      => 'dxPrice',
        'hasCredit'    => 'hasCredit',
        'hasInvoice'   => 'hasInvoice',
        'jxPrice'      => 'jxPrice',
        'picUrl'       => 'picUrl',
        'quantity'     => 'quantity',
        'skuId'        => 'skuId',
        'skuStatus'    => 'skuStatus',
        'taxCode'      => 'taxCode',
        'taxRate'      => 'taxRate',
        'title'        => 'title',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aliasTitle) {
            $res['aliasTitle'] = $this->aliasTitle;
        }
        if (null !== $this->barCode) {
            $res['barCode'] = $this->barCode;
        }
        if (null !== $this->creditPeriod) {
            $res['creditPeriod'] = $this->creditPeriod;
        }
        if (null !== $this->dxPrice) {
            $res['dxPrice'] = $this->dxPrice;
        }
        if (null !== $this->hasCredit) {
            $res['hasCredit'] = $this->hasCredit;
        }
        if (null !== $this->hasInvoice) {
            $res['hasInvoice'] = $this->hasInvoice;
        }
        if (null !== $this->jxPrice) {
            $res['jxPrice'] = $this->jxPrice;
        }
        if (null !== $this->picUrl) {
            $res['picUrl'] = $this->picUrl;
        }
        if (null !== $this->quantity) {
            $res['quantity'] = $this->quantity;
        }
        if (null !== $this->skuId) {
            $res['skuId'] = $this->skuId;
        }
        if (null !== $this->skuStatus) {
            $res['skuStatus'] = $this->skuStatus;
        }
        if (null !== $this->taxCode) {
            $res['taxCode'] = $this->taxCode;
        }
        if (null !== $this->taxRate) {
            $res['taxRate'] = $this->taxRate;
        }
        if (null !== $this->title) {
            $res['title'] = $this->title;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DistributionSku
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['aliasTitle'])) {
            $model->aliasTitle = $map['aliasTitle'];
        }
        if (isset($map['barCode'])) {
            $model->barCode = $map['barCode'];
        }
        if (isset($map['creditPeriod'])) {
            $model->creditPeriod = $map['creditPeriod'];
        }
        if (isset($map['dxPrice'])) {
            $model->dxPrice = $map['dxPrice'];
        }
        if (isset($map['hasCredit'])) {
            $model->hasCredit = $map['hasCredit'];
        }
        if (isset($map['hasInvoice'])) {
            $model->hasInvoice = $map['hasInvoice'];
        }
        if (isset($map['jxPrice'])) {
            $model->jxPrice = $map['jxPrice'];
        }
        if (isset($map['picUrl'])) {
            $model->picUrl = $map['picUrl'];
        }
        if (isset($map['quantity'])) {
            $model->quantity = $map['quantity'];
        }
        if (isset($map['skuId'])) {
            $model->skuId = $map['skuId'];
        }
        if (isset($map['skuStatus'])) {
            $model->skuStatus = $map['skuStatus'];
        }
        if (isset($map['taxCode'])) {
            $model->taxCode = $map['taxCode'];
        }
        if (isset($map['taxRate'])) {
            $model->taxRate = $map['taxRate'];
        }
        if (isset($map['title'])) {
            $model->title = $map['title'];
        }

        return $model;
    }
}
