<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Umengpush\V20220225\Models;

use AlibabaCloud\Tea\Model;

class SendByAliasRequest extends Model
{
    /**
     * @var string
     */
    public $alias;

    /**
     * @var string
     */
    public $aliasType;

    /**
     * @var AndroidPayload
     */
    public $androidPayload;

    /**
     * @var ChannelProperties
     */
    public $channelProperties;

    /**
     * @var string
     */
    public $description;

    /**
     * @var IosPayload
     */
    public $iosPayload;

    /**
     * @var Policy
     */
    public $policy;

    /**
     * @var bool
     */
    public $productionMode;

    /**
     * @var int
     */
    public $receiptType;

    /**
     * @var string
     */
    public $receiptUrl;
    protected $_name = [
        'alias'             => 'Alias',
        'aliasType'         => 'AliasType',
        'androidPayload'    => 'AndroidPayload',
        'channelProperties' => 'ChannelProperties',
        'description'       => 'Description',
        'iosPayload'        => 'IosPayload',
        'policy'            => 'Policy',
        'productionMode'    => 'ProductionMode',
        'receiptType'       => 'ReceiptType',
        'receiptUrl'        => 'ReceiptUrl',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->alias) {
            $res['Alias'] = $this->alias;
        }
        if (null !== $this->aliasType) {
            $res['AliasType'] = $this->aliasType;
        }
        if (null !== $this->androidPayload) {
            $res['AndroidPayload'] = null !== $this->androidPayload ? $this->androidPayload->toMap() : null;
        }
        if (null !== $this->channelProperties) {
            $res['ChannelProperties'] = null !== $this->channelProperties ? $this->channelProperties->toMap() : null;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->iosPayload) {
            $res['IosPayload'] = null !== $this->iosPayload ? $this->iosPayload->toMap() : null;
        }
        if (null !== $this->policy) {
            $res['Policy'] = null !== $this->policy ? $this->policy->toMap() : null;
        }
        if (null !== $this->productionMode) {
            $res['ProductionMode'] = $this->productionMode;
        }
        if (null !== $this->receiptType) {
            $res['ReceiptType'] = $this->receiptType;
        }
        if (null !== $this->receiptUrl) {
            $res['ReceiptUrl'] = $this->receiptUrl;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SendByAliasRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Alias'])) {
            $model->alias = $map['Alias'];
        }
        if (isset($map['AliasType'])) {
            $model->aliasType = $map['AliasType'];
        }
        if (isset($map['AndroidPayload'])) {
            $model->androidPayload = AndroidPayload::fromMap($map['AndroidPayload']);
        }
        if (isset($map['ChannelProperties'])) {
            $model->channelProperties = ChannelProperties::fromMap($map['ChannelProperties']);
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['IosPayload'])) {
            $model->iosPayload = IosPayload::fromMap($map['IosPayload']);
        }
        if (isset($map['Policy'])) {
            $model->policy = Policy::fromMap($map['Policy']);
        }
        if (isset($map['ProductionMode'])) {
            $model->productionMode = $map['ProductionMode'];
        }
        if (isset($map['ReceiptType'])) {
            $model->receiptType = $map['ReceiptType'];
        }
        if (isset($map['ReceiptUrl'])) {
            $model->receiptUrl = $map['ReceiptUrl'];
        }

        return $model;
    }
}
