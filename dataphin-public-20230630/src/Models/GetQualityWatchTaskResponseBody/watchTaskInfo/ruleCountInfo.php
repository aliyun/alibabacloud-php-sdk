<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetQualityWatchTaskResponseBody\watchTaskInfo;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetQualityWatchTaskResponseBody\watchTaskInfo\ruleCountInfo\strongRuleCount;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetQualityWatchTaskResponseBody\watchTaskInfo\ruleCountInfo\validateRuleCount;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetQualityWatchTaskResponseBody\watchTaskInfo\ruleCountInfo\weakRuleCount;

class ruleCountInfo extends Model
{
    /**
     * @var strongRuleCount
     */
    public $strongRuleCount;

    /**
     * @var validateRuleCount
     */
    public $validateRuleCount;

    /**
     * @var weakRuleCount
     */
    public $weakRuleCount;
    protected $_name = [
        'strongRuleCount' => 'StrongRuleCount',
        'validateRuleCount' => 'ValidateRuleCount',
        'weakRuleCount' => 'WeakRuleCount',
    ];

    public function validate()
    {
        if (null !== $this->strongRuleCount) {
            $this->strongRuleCount->validate();
        }
        if (null !== $this->validateRuleCount) {
            $this->validateRuleCount->validate();
        }
        if (null !== $this->weakRuleCount) {
            $this->weakRuleCount->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->strongRuleCount) {
            $res['StrongRuleCount'] = null !== $this->strongRuleCount ? $this->strongRuleCount->toArray($noStream) : $this->strongRuleCount;
        }

        if (null !== $this->validateRuleCount) {
            $res['ValidateRuleCount'] = null !== $this->validateRuleCount ? $this->validateRuleCount->toArray($noStream) : $this->validateRuleCount;
        }

        if (null !== $this->weakRuleCount) {
            $res['WeakRuleCount'] = null !== $this->weakRuleCount ? $this->weakRuleCount->toArray($noStream) : $this->weakRuleCount;
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
        if (isset($map['StrongRuleCount'])) {
            $model->strongRuleCount = strongRuleCount::fromMap($map['StrongRuleCount']);
        }

        if (isset($map['ValidateRuleCount'])) {
            $model->validateRuleCount = validateRuleCount::fromMap($map['ValidateRuleCount']);
        }

        if (isset($map['WeakRuleCount'])) {
            $model->weakRuleCount = weakRuleCount::fromMap($map['WeakRuleCount']);
        }

        return $model;
    }
}
