<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Neuron\V20211115\Models;

use AlibabaCloud\Dara\Model;

class MonitorNotifyObjectResult extends Model
{
    /**
     * @var MonitorContactGroup[]
     */
    public $contactGroups;

    /**
     * @var MonitorContact[]
     */
    public $contacts;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var MonitorWebhook[]
     */
    public $webhooks;
    protected $_name = [
        'contactGroups' => 'contactGroups',
        'contacts' => 'contacts',
        'requestId' => 'requestId',
        'webhooks' => 'webhooks',
    ];

    public function validate()
    {
        if (\is_array($this->contactGroups)) {
            Model::validateArray($this->contactGroups);
        }
        if (\is_array($this->contacts)) {
            Model::validateArray($this->contacts);
        }
        if (\is_array($this->webhooks)) {
            Model::validateArray($this->webhooks);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->contactGroups) {
            if (\is_array($this->contactGroups)) {
                $res['contactGroups'] = [];
                $n1 = 0;
                foreach ($this->contactGroups as $item1) {
                    $res['contactGroups'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->contacts) {
            if (\is_array($this->contacts)) {
                $res['contacts'] = [];
                $n1 = 0;
                foreach ($this->contacts as $item1) {
                    $res['contacts'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        if (null !== $this->webhooks) {
            if (\is_array($this->webhooks)) {
                $res['webhooks'] = [];
                $n1 = 0;
                foreach ($this->webhooks as $item1) {
                    $res['webhooks'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['contactGroups'])) {
            if (!empty($map['contactGroups'])) {
                $model->contactGroups = [];
                $n1 = 0;
                foreach ($map['contactGroups'] as $item1) {
                    $model->contactGroups[$n1] = MonitorContactGroup::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['contacts'])) {
            if (!empty($map['contacts'])) {
                $model->contacts = [];
                $n1 = 0;
                foreach ($map['contacts'] as $item1) {
                    $model->contacts[$n1] = MonitorContact::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        if (isset($map['webhooks'])) {
            if (!empty($map['webhooks'])) {
                $model->webhooks = [];
                $n1 = 0;
                foreach ($map['webhooks'] as $item1) {
                    $model->webhooks[$n1] = MonitorWebhook::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
