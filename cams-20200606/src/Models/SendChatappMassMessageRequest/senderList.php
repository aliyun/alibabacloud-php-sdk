<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cams\V20200606\Models\SendChatappMassMessageRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cams\V20200606\Models\SendChatappMassMessageRequest\senderList\flowAction;
use AlibabaCloud\SDK\Cams\V20200606\Models\SendChatappMassMessageRequest\senderList\productAction;

class senderList extends Model
{
    /**
     * @var flowAction
     */
    public $flowAction;

    /**
     * @var string[]
     */
    public $payload;

    /**
     * @var productAction
     */
    public $productAction;

    /**
     * @var string[]
     */
    public $templateParams;

    /**
     * @var string
     */
    public $to;
    protected $_name = [
        'flowAction' => 'FlowAction',
        'payload' => 'Payload',
        'productAction' => 'ProductAction',
        'templateParams' => 'TemplateParams',
        'to' => 'To',
    ];

    public function validate()
    {
        if (null !== $this->flowAction) {
            $this->flowAction->validate();
        }
        if (\is_array($this->payload)) {
            Model::validateArray($this->payload);
        }
        if (null !== $this->productAction) {
            $this->productAction->validate();
        }
        if (\is_array($this->templateParams)) {
            Model::validateArray($this->templateParams);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->flowAction) {
            $res['FlowAction'] = null !== $this->flowAction ? $this->flowAction->toArray($noStream) : $this->flowAction;
        }

        if (null !== $this->payload) {
            if (\is_array($this->payload)) {
                $res['Payload'] = [];
                $n1 = 0;
                foreach ($this->payload as $item1) {
                    $res['Payload'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->productAction) {
            $res['ProductAction'] = null !== $this->productAction ? $this->productAction->toArray($noStream) : $this->productAction;
        }

        if (null !== $this->templateParams) {
            if (\is_array($this->templateParams)) {
                $res['TemplateParams'] = [];
                foreach ($this->templateParams as $key1 => $value1) {
                    $res['TemplateParams'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->to) {
            $res['To'] = $this->to;
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
        if (isset($map['FlowAction'])) {
            $model->flowAction = flowAction::fromMap($map['FlowAction']);
        }

        if (isset($map['Payload'])) {
            if (!empty($map['Payload'])) {
                $model->payload = [];
                $n1 = 0;
                foreach ($map['Payload'] as $item1) {
                    $model->payload[$n1++] = $item1;
                }
            }
        }

        if (isset($map['ProductAction'])) {
            $model->productAction = productAction::fromMap($map['ProductAction']);
        }

        if (isset($map['TemplateParams'])) {
            if (!empty($map['TemplateParams'])) {
                $model->templateParams = [];
                foreach ($map['TemplateParams'] as $key1 => $value1) {
                    $model->templateParams[$key1] = $value1;
                }
            }
        }

        if (isset($map['To'])) {
            $model->to = $map['To'];
        }

        return $model;
    }
}
