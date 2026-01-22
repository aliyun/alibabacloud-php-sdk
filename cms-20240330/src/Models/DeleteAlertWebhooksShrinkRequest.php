<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models;

use AlibabaCloud\Dara\Model;

class DeleteAlertWebhooksShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $webhookIdsShrink;
    protected $_name = [
        'webhookIdsShrink' => 'webhookIds',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->webhookIdsShrink) {
            $res['webhookIds'] = $this->webhookIdsShrink;
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
        if (isset($map['webhookIds'])) {
            $model->webhookIdsShrink = $map['webhookIds'];
        }

        return $model;
    }
}
