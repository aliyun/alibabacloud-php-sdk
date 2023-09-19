<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\MigrationJob;

use AlibabaCloud\SDK\Cms\V20190101\Models\MigrationJob\plan\contacts;
use AlibabaCloud\SDK\Cms\V20190101\Models\MigrationJob\plan\escalations;
use AlibabaCloud\SDK\Cms\V20190101\Models\MigrationJob\plan\groups;
use AlibabaCloud\SDK\Cms\V20190101\Models\MigrationJob\plan\strategies;
use AlibabaCloud\SDK\Cms\V20190101\Models\MigrationJob\plan\subscriptions;
use AlibabaCloud\SDK\Cms\V20190101\Models\MigrationJob\plan\targets;
use AlibabaCloud\Tea\Model;

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
        'contacts'      => 'Contacts',
        'escalations'   => 'Escalations',
        'groups'        => 'Groups',
        'ruleNames'     => 'RuleNames',
        'strategies'    => 'Strategies',
        'subscriptions' => 'Subscriptions',
        'targets'       => 'Targets',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->contacts) {
            $res['Contacts'] = [];
            if (null !== $this->contacts && \is_array($this->contacts)) {
                $n = 0;
                foreach ($this->contacts as $item) {
                    $res['Contacts'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->escalations) {
            $res['Escalations'] = [];
            if (null !== $this->escalations && \is_array($this->escalations)) {
                $n = 0;
                foreach ($this->escalations as $item) {
                    $res['Escalations'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->groups) {
            $res['Groups'] = [];
            if (null !== $this->groups && \is_array($this->groups)) {
                $n = 0;
                foreach ($this->groups as $item) {
                    $res['Groups'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->ruleNames) {
            $res['RuleNames'] = $this->ruleNames;
        }
        if (null !== $this->strategies) {
            $res['Strategies'] = [];
            if (null !== $this->strategies && \is_array($this->strategies)) {
                $n = 0;
                foreach ($this->strategies as $item) {
                    $res['Strategies'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->subscriptions) {
            $res['Subscriptions'] = [];
            if (null !== $this->subscriptions && \is_array($this->subscriptions)) {
                $n = 0;
                foreach ($this->subscriptions as $item) {
                    $res['Subscriptions'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->targets) {
            $res['Targets'] = [];
            if (null !== $this->targets && \is_array($this->targets)) {
                $n = 0;
                foreach ($this->targets as $item) {
                    $res['Targets'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return plan
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Contacts'])) {
            if (!empty($map['Contacts'])) {
                $model->contacts = [];
                $n               = 0;
                foreach ($map['Contacts'] as $item) {
                    $model->contacts[$n++] = null !== $item ? contacts::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Escalations'])) {
            if (!empty($map['Escalations'])) {
                $model->escalations = [];
                $n                  = 0;
                foreach ($map['Escalations'] as $item) {
                    $model->escalations[$n++] = null !== $item ? escalations::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Groups'])) {
            if (!empty($map['Groups'])) {
                $model->groups = [];
                $n             = 0;
                foreach ($map['Groups'] as $item) {
                    $model->groups[$n++] = null !== $item ? groups::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RuleNames'])) {
            if (!empty($map['RuleNames'])) {
                $model->ruleNames = $map['RuleNames'];
            }
        }
        if (isset($map['Strategies'])) {
            if (!empty($map['Strategies'])) {
                $model->strategies = [];
                $n                 = 0;
                foreach ($map['Strategies'] as $item) {
                    $model->strategies[$n++] = null !== $item ? strategies::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Subscriptions'])) {
            if (!empty($map['Subscriptions'])) {
                $model->subscriptions = [];
                $n                    = 0;
                foreach ($map['Subscriptions'] as $item) {
                    $model->subscriptions[$n++] = null !== $item ? subscriptions::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Targets'])) {
            if (!empty($map['Targets'])) {
                $model->targets = [];
                $n              = 0;
                foreach ($map['Targets'] as $item) {
                    $model->targets[$n++] = null !== $item ? targets::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
