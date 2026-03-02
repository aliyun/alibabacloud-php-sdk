<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Neuron\V20211115\Models;

use AlibabaCloud\Dara\Model;

class MonitorNotifyAlert extends Model
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
    public $endTime;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string[]
     */
    public $notifyChannels;

    /**
     * @var string[]
     */
    public $ruleNames;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var string
     */
    public $type;

    /**
     * @var MonitorWebhook[]
     */
    public $webhooks;
    protected $_name = [
        'contactGroups' => 'contactGroups',
        'contacts' => 'contacts',
        'endTime' => 'endTime',
        'id' => 'id',
        'name' => 'name',
        'notifyChannels' => 'notifyChannels',
        'ruleNames' => 'ruleNames',
        'startTime' => 'startTime',
        'type' => 'type',
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
        if (\is_array($this->notifyChannels)) {
            Model::validateArray($this->notifyChannels);
        }
        if (\is_array($this->ruleNames)) {
            Model::validateArray($this->ruleNames);
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

        if (null !== $this->endTime) {
            $res['endTime'] = $this->endTime;
        }

        if (null !== $this->id) {
            $res['id'] = $this->id;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->notifyChannels) {
            if (\is_array($this->notifyChannels)) {
                $res['notifyChannels'] = [];
                $n1 = 0;
                foreach ($this->notifyChannels as $item1) {
                    $res['notifyChannels'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->ruleNames) {
            if (\is_array($this->ruleNames)) {
                $res['ruleNames'] = [];
                $n1 = 0;
                foreach ($this->ruleNames as $item1) {
                    $res['ruleNames'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->startTime) {
            $res['startTime'] = $this->startTime;
        }

        if (null !== $this->type) {
            $res['type'] = $this->type;
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

        if (isset($map['endTime'])) {
            $model->endTime = $map['endTime'];
        }

        if (isset($map['id'])) {
            $model->id = $map['id'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['notifyChannels'])) {
            if (!empty($map['notifyChannels'])) {
                $model->notifyChannels = [];
                $n1 = 0;
                foreach ($map['notifyChannels'] as $item1) {
                    $model->notifyChannels[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['ruleNames'])) {
            if (!empty($map['ruleNames'])) {
                $model->ruleNames = [];
                $n1 = 0;
                foreach ($map['ruleNames'] as $item1) {
                    $model->ruleNames[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['startTime'])) {
            $model->startTime = $map['startTime'];
        }

        if (isset($map['type'])) {
            $model->type = $map['type'];
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
