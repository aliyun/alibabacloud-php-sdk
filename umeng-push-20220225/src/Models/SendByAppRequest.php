<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Umengpush\V20220225\Models;

use AlibabaCloud\Tea\Model;

class SendByAppRequest extends Model
{
    /**
     * @var AndroidPayload
     */
    public $androidPayload;

    /**
     * @var AndroidShortPayload
     */
    public $androidShortPayload;

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
     * @example true
     *
     * @var bool
     */
    public $productionMode;

    /**
     * @var int
     */
    public $receiptType;

    /**
     * @example https://msg.umeng.com/upush/receipt
     *
     * @var string
     */
    public $receiptUrl;

    /**
     * @var string
     */
    public $thirdPartyId;

    /**
     * @var string
     */
    public $callbackParams;
    protected $_name = [
        'androidPayload'      => 'AndroidPayload',
        'androidShortPayload' => 'AndroidShortPayload',
        'channelProperties'   => 'ChannelProperties',
        'description'         => 'Description',
        'iosPayload'          => 'IosPayload',
        'policy'              => 'Policy',
        'productionMode'      => 'ProductionMode',
        'receiptType'         => 'ReceiptType',
        'receiptUrl'          => 'ReceiptUrl',
        'thirdPartyId'        => 'ThirdPartyId',
        'callbackParams'      => 'callbackParams',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->androidPayload) {
            $res['AndroidPayload'] = null !== $this->androidPayload ? $this->androidPayload->toMap() : null;
        }
        if (null !== $this->androidShortPayload) {
            $res['AndroidShortPayload'] = null !== $this->androidShortPayload ? $this->androidShortPayload->toMap() : null;
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
        if (null !== $this->thirdPartyId) {
            $res['ThirdPartyId'] = $this->thirdPartyId;
        }
        if (null !== $this->callbackParams) {
            $res['callbackParams'] = $this->callbackParams;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SendByAppRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AndroidPayload'])) {
            $model->androidPayload = AndroidPayload::fromMap($map['AndroidPayload']);
        }
        if (isset($map['AndroidShortPayload'])) {
            $model->androidShortPayload = AndroidShortPayload::fromMap($map['AndroidShortPayload']);
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
        if (isset($map['ThirdPartyId'])) {
            $model->thirdPartyId = $map['ThirdPartyId'];
        }
        if (isset($map['callbackParams'])) {
            $model->callbackParams = $map['callbackParams'];
        }

        return $model;
    }
}
