<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetAlertRuleResponseBody\alertRule;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetAlertRuleResponseBody\alertRule\triggerCondition\extension;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetAlertRuleResponseBody\alertRule\triggerCondition\target;

class triggerCondition extends Model
{
    /**
     * @var extension
     */
    public $extension;
    /**
     * @var target
     */
    public $target;
    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'extension' => 'Extension',
        'target'    => 'Target',
        'type'      => 'Type',
    ];

    public function validate()
    {
        if (null !== $this->extension) {
            $this->extension->validate();
        }
        if (null !== $this->target) {
            $this->target->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->extension) {
            $res['Extension'] = null !== $this->extension ? $this->extension->toArray($noStream) : $this->extension;
        }

        if (null !== $this->target) {
            $res['Target'] = null !== $this->target ? $this->target->toArray($noStream) : $this->target;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
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
        if (isset($map['Extension'])) {
            $model->extension = extension::fromMap($map['Extension']);
        }

        if (isset($map['Target'])) {
            $model->target = target::fromMap($map['Target']);
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
