<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models;

use AlibabaCloud\Dara\Model;

class AlertRuleNotification extends Model
{
    /**
     * @var string[]
     */
    public $contacts;

    /**
     * @var string[]
     */
    public $customWebhooks;

    /**
     * @var string[]
     */
    public $dingWebhooks;

    /**
     * @var string[]
     */
    public $fsWebhooks;

    /**
     * @var string[]
     */
    public $groups;

    /**
     * @var AlertRuleTimeSpan
     */
    public $notifyTime;

    /**
     * @var int
     */
    public $silenceTime;

    /**
     * @var string[]
     */
    public $slackWebhooks;

    /**
     * @var string[]
     */
    public $wxWebhooks;
    protected $_name = [
        'contacts' => 'contacts',
        'customWebhooks' => 'customWebhooks',
        'dingWebhooks' => 'dingWebhooks',
        'fsWebhooks' => 'fsWebhooks',
        'groups' => 'groups',
        'notifyTime' => 'notifyTime',
        'silenceTime' => 'silenceTime',
        'slackWebhooks' => 'slackWebhooks',
        'wxWebhooks' => 'wxWebhooks',
    ];

    public function validate()
    {
        if (\is_array($this->contacts)) {
            Model::validateArray($this->contacts);
        }
        if (\is_array($this->customWebhooks)) {
            Model::validateArray($this->customWebhooks);
        }
        if (\is_array($this->dingWebhooks)) {
            Model::validateArray($this->dingWebhooks);
        }
        if (\is_array($this->fsWebhooks)) {
            Model::validateArray($this->fsWebhooks);
        }
        if (\is_array($this->groups)) {
            Model::validateArray($this->groups);
        }
        if (null !== $this->notifyTime) {
            $this->notifyTime->validate();
        }
        if (\is_array($this->slackWebhooks)) {
            Model::validateArray($this->slackWebhooks);
        }
        if (\is_array($this->wxWebhooks)) {
            Model::validateArray($this->wxWebhooks);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->contacts) {
            if (\is_array($this->contacts)) {
                $res['contacts'] = [];
                $n1 = 0;
                foreach ($this->contacts as $item1) {
                    $res['contacts'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->customWebhooks) {
            if (\is_array($this->customWebhooks)) {
                $res['customWebhooks'] = [];
                $n1 = 0;
                foreach ($this->customWebhooks as $item1) {
                    $res['customWebhooks'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->dingWebhooks) {
            if (\is_array($this->dingWebhooks)) {
                $res['dingWebhooks'] = [];
                $n1 = 0;
                foreach ($this->dingWebhooks as $item1) {
                    $res['dingWebhooks'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->fsWebhooks) {
            if (\is_array($this->fsWebhooks)) {
                $res['fsWebhooks'] = [];
                $n1 = 0;
                foreach ($this->fsWebhooks as $item1) {
                    $res['fsWebhooks'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->groups) {
            if (\is_array($this->groups)) {
                $res['groups'] = [];
                $n1 = 0;
                foreach ($this->groups as $item1) {
                    $res['groups'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->notifyTime) {
            $res['notifyTime'] = null !== $this->notifyTime ? $this->notifyTime->toArray($noStream) : $this->notifyTime;
        }

        if (null !== $this->silenceTime) {
            $res['silenceTime'] = $this->silenceTime;
        }

        if (null !== $this->slackWebhooks) {
            if (\is_array($this->slackWebhooks)) {
                $res['slackWebhooks'] = [];
                $n1 = 0;
                foreach ($this->slackWebhooks as $item1) {
                    $res['slackWebhooks'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->wxWebhooks) {
            if (\is_array($this->wxWebhooks)) {
                $res['wxWebhooks'] = [];
                $n1 = 0;
                foreach ($this->wxWebhooks as $item1) {
                    $res['wxWebhooks'][$n1] = $item1;
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
        if (isset($map['contacts'])) {
            if (!empty($map['contacts'])) {
                $model->contacts = [];
                $n1 = 0;
                foreach ($map['contacts'] as $item1) {
                    $model->contacts[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['customWebhooks'])) {
            if (!empty($map['customWebhooks'])) {
                $model->customWebhooks = [];
                $n1 = 0;
                foreach ($map['customWebhooks'] as $item1) {
                    $model->customWebhooks[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['dingWebhooks'])) {
            if (!empty($map['dingWebhooks'])) {
                $model->dingWebhooks = [];
                $n1 = 0;
                foreach ($map['dingWebhooks'] as $item1) {
                    $model->dingWebhooks[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['fsWebhooks'])) {
            if (!empty($map['fsWebhooks'])) {
                $model->fsWebhooks = [];
                $n1 = 0;
                foreach ($map['fsWebhooks'] as $item1) {
                    $model->fsWebhooks[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['groups'])) {
            if (!empty($map['groups'])) {
                $model->groups = [];
                $n1 = 0;
                foreach ($map['groups'] as $item1) {
                    $model->groups[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['notifyTime'])) {
            $model->notifyTime = AlertRuleTimeSpan::fromMap($map['notifyTime']);
        }

        if (isset($map['silenceTime'])) {
            $model->silenceTime = $map['silenceTime'];
        }

        if (isset($map['slackWebhooks'])) {
            if (!empty($map['slackWebhooks'])) {
                $model->slackWebhooks = [];
                $n1 = 0;
                foreach ($map['slackWebhooks'] as $item1) {
                    $model->slackWebhooks[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['wxWebhooks'])) {
            if (!empty($map['wxWebhooks'])) {
                $model->wxWebhooks = [];
                $n1 = 0;
                foreach ($map['wxWebhooks'] as $item1) {
                    $model->wxWebhooks[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
