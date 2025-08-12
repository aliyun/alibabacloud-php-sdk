<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\MigrationJob;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cms\V20190101\Models\MigrationJob\plan\contacts;
use AlibabaCloud\SDK\Cms\V20190101\Models\MigrationJob\plan\escalations;
use AlibabaCloud\SDK\Cms\V20190101\Models\MigrationJob\plan\groups;
use AlibabaCloud\SDK\Cms\V20190101\Models\MigrationJob\plan\strategies;
use AlibabaCloud\SDK\Cms\V20190101\Models\MigrationJob\plan\subscriptions;
use AlibabaCloud\SDK\Cms\V20190101\Models\MigrationJob\plan\targets;

class plan extends Model
{
    /**
     * @var contacts[]
     */
    public $contacts;

    /**
     * @var escalations[]
     */
    public $escalations;

    /**
     * @var groups[]
     */
    public $groups;

    /**
     * @var string[]
     */
    public $ruleNames;

    /**
     * @var strategies[]
     */
    public $strategies;

    /**
     * @var subscriptions[]
     */
    public $subscriptions;

    /**
     * @var targets[]
     */
    public $targets;
    protected $_name = [
        'contacts' => 'Contacts',
        'escalations' => 'Escalations',
        'groups' => 'Groups',
        'ruleNames' => 'RuleNames',
        'strategies' => 'Strategies',
        'subscriptions' => 'Subscriptions',
        'targets' => 'Targets',
    ];

    public function validate()
    {
        if (\is_array($this->contacts)) {
            Model::validateArray($this->contacts);
        }
        if (\is_array($this->escalations)) {
            Model::validateArray($this->escalations);
        }
        if (\is_array($this->groups)) {
            Model::validateArray($this->groups);
        }
        if (\is_array($this->ruleNames)) {
            Model::validateArray($this->ruleNames);
        }
        if (\is_array($this->strategies)) {
            Model::validateArray($this->strategies);
        }
        if (\is_array($this->subscriptions)) {
            Model::validateArray($this->subscriptions);
        }
        if (\is_array($this->targets)) {
            Model::validateArray($this->targets);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->contacts) {
            if (\is_array($this->contacts)) {
                $res['Contacts'] = [];
                $n1 = 0;
                foreach ($this->contacts as $item1) {
                    $res['Contacts'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->escalations) {
            if (\is_array($this->escalations)) {
                $res['Escalations'] = [];
                $n1 = 0;
                foreach ($this->escalations as $item1) {
                    $res['Escalations'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->groups) {
            if (\is_array($this->groups)) {
                $res['Groups'] = [];
                $n1 = 0;
                foreach ($this->groups as $item1) {
                    $res['Groups'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->ruleNames) {
            if (\is_array($this->ruleNames)) {
                $res['RuleNames'] = [];
                $n1 = 0;
                foreach ($this->ruleNames as $item1) {
                    $res['RuleNames'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->strategies) {
            if (\is_array($this->strategies)) {
                $res['Strategies'] = [];
                $n1 = 0;
                foreach ($this->strategies as $item1) {
                    $res['Strategies'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->subscriptions) {
            if (\is_array($this->subscriptions)) {
                $res['Subscriptions'] = [];
                $n1 = 0;
                foreach ($this->subscriptions as $item1) {
                    $res['Subscriptions'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->targets) {
            if (\is_array($this->targets)) {
                $res['Targets'] = [];
                $n1 = 0;
                foreach ($this->targets as $item1) {
                    $res['Targets'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Contacts'])) {
            if (!empty($map['Contacts'])) {
                $model->contacts = [];
                $n1 = 0;
                foreach ($map['Contacts'] as $item1) {
                    $model->contacts[$n1] = contacts::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Escalations'])) {
            if (!empty($map['Escalations'])) {
                $model->escalations = [];
                $n1 = 0;
                foreach ($map['Escalations'] as $item1) {
                    $model->escalations[$n1] = escalations::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Groups'])) {
            if (!empty($map['Groups'])) {
                $model->groups = [];
                $n1 = 0;
                foreach ($map['Groups'] as $item1) {
                    $model->groups[$n1] = groups::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RuleNames'])) {
            if (!empty($map['RuleNames'])) {
                $model->ruleNames = [];
                $n1 = 0;
                foreach ($map['RuleNames'] as $item1) {
                    $model->ruleNames[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Strategies'])) {
            if (!empty($map['Strategies'])) {
                $model->strategies = [];
                $n1 = 0;
                foreach ($map['Strategies'] as $item1) {
                    $model->strategies[$n1] = strategies::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Subscriptions'])) {
            if (!empty($map['Subscriptions'])) {
                $model->subscriptions = [];
                $n1 = 0;
                foreach ($map['Subscriptions'] as $item1) {
                    $model->subscriptions[$n1] = subscriptions::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Targets'])) {
            if (!empty($map['Targets'])) {
                $model->targets = [];
                $n1 = 0;
                foreach ($map['Targets'] as $item1) {
                    $model->targets[$n1] = targets::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
