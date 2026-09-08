<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Notifications\V20241225\Models\ReadUserSubscriptionListResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Notifications\V20241225\Models\ReadUserSubscriptionListResponseBody\data\contact\commonContacts;
use AlibabaCloud\SDK\Notifications\V20241225\Models\ReadUserSubscriptionListResponseBody\data\contact\webhookContacts;

class contact extends Model
{
    /**
     * @var commonContacts[]
     */
    public $commonContacts;

    /**
     * @var webhookContacts[]
     */
    public $webhookContacts;
    protected $_name = [
        'commonContacts' => 'CommonContacts',
        'webhookContacts' => 'WebhookContacts',
    ];

    public function validate()
    {
        if (\is_array($this->commonContacts)) {
            Model::validateArray($this->commonContacts);
        }
        if (\is_array($this->webhookContacts)) {
            Model::validateArray($this->webhookContacts);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->commonContacts) {
            if (\is_array($this->commonContacts)) {
                $res['CommonContacts'] = [];
                $n1 = 0;
                foreach ($this->commonContacts as $item1) {
                    $res['CommonContacts'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->webhookContacts) {
            if (\is_array($this->webhookContacts)) {
                $res['WebhookContacts'] = [];
                $n1 = 0;
                foreach ($this->webhookContacts as $item1) {
                    $res['WebhookContacts'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['CommonContacts'])) {
            if (!empty($map['CommonContacts'])) {
                $model->commonContacts = [];
                $n1 = 0;
                foreach ($map['CommonContacts'] as $item1) {
                    $model->commonContacts[$n1] = commonContacts::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['WebhookContacts'])) {
            if (!empty($map['WebhookContacts'])) {
                $model->webhookContacts = [];
                $n1 = 0;
                foreach ($map['WebhookContacts'] as $item1) {
                    $model->webhookContacts[$n1] = webhookContacts::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
