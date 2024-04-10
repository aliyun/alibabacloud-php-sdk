<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cams\V20200606\Models\SendChatappMassMessageRequest;

use AlibabaCloud\SDK\Cams\V20200606\Models\SendChatappMassMessageRequest\senderList\flowAction;
use AlibabaCloud\SDK\Cams\V20200606\Models\SendChatappMassMessageRequest\senderList\productAction;
use AlibabaCloud\Tea\Model;

class senderList extends Model
{
    /**
     * @var flowAction
     */
    public $flowAction;

    /**
     * @description The payload.
     *
     * @var string[]
     */
    public $payload;

    /**
     * @description The information about the product.
     *
     * @var productAction
     */
    public $productAction;

    /**
     * @description The parameters of the template.
     *
     * @var string[]
     */
    public $templateParams;

    /**
     * @description The phone number to which the message is sent.
     *
     * @example 861388988****
     *
     * @var string
     */
    public $to;
    protected $_name = [
        'flowAction'     => 'FlowAction',
        'payload'        => 'Payload',
        'productAction'  => 'ProductAction',
        'templateParams' => 'TemplateParams',
        'to'             => 'To',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->flowAction) {
            $res['FlowAction'] = null !== $this->flowAction ? $this->flowAction->toMap() : null;
        }
        if (null !== $this->payload) {
            $res['Payload'] = $this->payload;
        }
        if (null !== $this->productAction) {
            $res['ProductAction'] = null !== $this->productAction ? $this->productAction->toMap() : null;
        }
        if (null !== $this->templateParams) {
            $res['TemplateParams'] = $this->templateParams;
        }
        if (null !== $this->to) {
            $res['To'] = $this->to;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return senderList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FlowAction'])) {
            $model->flowAction = flowAction::fromMap($map['FlowAction']);
        }
        if (isset($map['Payload'])) {
            if (!empty($map['Payload'])) {
                $model->payload = $map['Payload'];
            }
        }
        if (isset($map['ProductAction'])) {
            $model->productAction = productAction::fromMap($map['ProductAction']);
        }
        if (isset($map['TemplateParams'])) {
            $model->templateParams = $map['TemplateParams'];
        }
        if (isset($map['To'])) {
            $model->to = $map['To'];
        }

        return $model;
    }
}
