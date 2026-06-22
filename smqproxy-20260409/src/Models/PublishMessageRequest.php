<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SMQProxy\V20260409\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\SMQProxy\V20260409\Models\PublishMessageRequest\messageAttributes;

class PublishMessageRequest extends Model
{
    /**
     * @var messageAttributes
     */
    public $messageAttributes;

    /**
     * @var string
     */
    public $messageBody;

    /**
     * @var string
     */
    public $messageTag;
    protected $_name = [
        'messageAttributes' => 'MessageAttributes',
        'messageBody' => 'MessageBody',
        'messageTag' => 'MessageTag',
    ];

    public function validate()
    {
        if (null !== $this->messageAttributes) {
            $this->messageAttributes->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->messageAttributes) {
            $res['MessageAttributes'] = null !== $this->messageAttributes ? $this->messageAttributes->toArray($noStream) : $this->messageAttributes;
        }

        if (null !== $this->messageBody) {
            $res['MessageBody'] = $this->messageBody;
        }

        if (null !== $this->messageTag) {
            $res['MessageTag'] = $this->messageTag;
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
        if (isset($map['MessageAttributes'])) {
            $model->messageAttributes = messageAttributes::fromMap($map['MessageAttributes']);
        }

        if (isset($map['MessageBody'])) {
            $model->messageBody = $map['MessageBody'];
        }

        if (isset($map['MessageTag'])) {
            $model->messageTag = $map['MessageTag'];
        }

        return $model;
    }
}
