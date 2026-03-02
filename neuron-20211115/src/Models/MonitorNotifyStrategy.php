<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Neuron\V20211115\Models;

use AlibabaCloud\Dara\Model;

class MonitorNotifyStrategy extends Model
{
    /**
     * @var string[]
     */
    public $channels;

    /**
     * @var int[]
     */
    public $contactGroupIds;

    /**
     * @var MonitorContactGroup[]
     */
    public $contactGroups;

    /**
     * @var int[]
     */
    public $contactIds;

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
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var int[]
     */
    public $webhookIds;

    /**
     * @var MonitorWebhook[]
     */
    public $webhooks;
    protected $_name = [
        'channels' => 'channels',
        'contactGroupIds' => 'contactGroupIds',
        'contactGroups' => 'contactGroups',
        'contactIds' => 'contactIds',
        'contacts' => 'contacts',
        'endTime' => 'endTime',
        'id' => 'id',
        'name' => 'name',
        'requestId' => 'requestId',
        'startTime' => 'startTime',
        'webhookIds' => 'webhookIds',
        'webhooks' => 'webhooks',
    ];

    public function validate()
    {
        if (\is_array($this->channels)) {
            Model::validateArray($this->channels);
        }
        if (\is_array($this->contactGroupIds)) {
            Model::validateArray($this->contactGroupIds);
        }
        if (\is_array($this->contactGroups)) {
            Model::validateArray($this->contactGroups);
        }
        if (\is_array($this->contactIds)) {
            Model::validateArray($this->contactIds);
        }
        if (\is_array($this->contacts)) {
            Model::validateArray($this->contacts);
        }
        if (\is_array($this->webhookIds)) {
            Model::validateArray($this->webhookIds);
        }
        if (\is_array($this->webhooks)) {
            Model::validateArray($this->webhooks);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->channels) {
            if (\is_array($this->channels)) {
                $res['channels'] = [];
                $n1 = 0;
                foreach ($this->channels as $item1) {
                    $res['channels'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->contactGroupIds) {
            if (\is_array($this->contactGroupIds)) {
                $res['contactGroupIds'] = [];
                $n1 = 0;
                foreach ($this->contactGroupIds as $item1) {
                    $res['contactGroupIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

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

        if (null !== $this->contactIds) {
            if (\is_array($this->contactIds)) {
                $res['contactIds'] = [];
                $n1 = 0;
                foreach ($this->contactIds as $item1) {
                    $res['contactIds'][$n1] = $item1;
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

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        if (null !== $this->startTime) {
            $res['startTime'] = $this->startTime;
        }

        if (null !== $this->webhookIds) {
            if (\is_array($this->webhookIds)) {
                $res['webhookIds'] = [];
                $n1 = 0;
                foreach ($this->webhookIds as $item1) {
                    $res['webhookIds'][$n1] = $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['channels'])) {
            if (!empty($map['channels'])) {
                $model->channels = [];
                $n1 = 0;
                foreach ($map['channels'] as $item1) {
                    $model->channels[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['contactGroupIds'])) {
            if (!empty($map['contactGroupIds'])) {
                $model->contactGroupIds = [];
                $n1 = 0;
                foreach ($map['contactGroupIds'] as $item1) {
                    $model->contactGroupIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

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

        if (isset($map['contactIds'])) {
            if (!empty($map['contactIds'])) {
                $model->contactIds = [];
                $n1 = 0;
                foreach ($map['contactIds'] as $item1) {
                    $model->contactIds[$n1] = $item1;
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

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        if (isset($map['startTime'])) {
            $model->startTime = $map['startTime'];
        }

        if (isset($map['webhookIds'])) {
            if (!empty($map['webhookIds'])) {
                $model->webhookIds = [];
                $n1 = 0;
                foreach ($map['webhookIds'] as $item1) {
                    $model->webhookIds[$n1] = $item1;
                    ++$n1;
                }
            }
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
