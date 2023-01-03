<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cams\V20200606\Models\SendChatappMassMessageRequest;

use AlibabaCloud\Tea\Model;

class senderList extends Model
{
    /**
     * @description Payload list.
     *
     * @var string[]
     */
    public $payload;

    /**
     * @description Template parameters.
     *
     * @var string[]
     */
    public $templateParams;

    /**
     * @description Target number.
     *
     * @example 861388988****
     *
     * @var string
     */
    public $to;
    protected $_name = [
        'payload'        => 'Payload',
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
        if (isset($map['TemplateParams'])) {
            $model->templateParams = $map['TemplateParams'];
        }
        if (isset($map['To'])) {
            $model->to = $map['To'];
        }

        return $model;
    }
}
