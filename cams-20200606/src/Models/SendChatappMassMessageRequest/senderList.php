<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cams\V20200606\Models\SendChatappMassMessageRequest;

use AlibabaCloud\SDK\Cams\V20200606\Models\SendChatappMassMessageRequest\senderList\productAction;
use AlibabaCloud\Tea\Model;

class senderList extends Model
{
    /**
     * @description payload
     *
     * @var string[]
     */
    public $payload;

    /**
     * @var productAction
     */
    public $productAction;

    /**
     * @description The parameters of the message template.
     *
     * @var string[]
     */
    public $templateParams;

    /**
     * @description The phone number that receives the message.
     *
     * @example 861388988****
     *
     * @var string
     */
    public $to;
    protected $_name = [
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
