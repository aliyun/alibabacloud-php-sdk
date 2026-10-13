<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentCore\V20260804\Models\UpdateManagedAgentRequest\body\model;

use AlibabaCloud\Dara\Model;

class quota extends Model
{
    /**
     * @var bool
     */
    public $enabled;

    /**
     * @var string
     */
    public $limitType;

    /**
     * @var string
     */
    public $periodType;

    /**
     * @var int
     */
    public $usageLimit;
    protected $_name = [
        'enabled' => 'enabled',
        'limitType' => 'limitType',
        'periodType' => 'periodType',
        'usageLimit' => 'usageLimit',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->enabled) {
            $res['enabled'] = $this->enabled;
        }

        if (null !== $this->limitType) {
            $res['limitType'] = $this->limitType;
        }

        if (null !== $this->periodType) {
            $res['periodType'] = $this->periodType;
        }

        if (null !== $this->usageLimit) {
            $res['usageLimit'] = $this->usageLimit;
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
        if (isset($map['enabled'])) {
            $model->enabled = $map['enabled'];
        }

        if (isset($map['limitType'])) {
            $model->limitType = $map['limitType'];
        }

        if (isset($map['periodType'])) {
            $model->periodType = $map['periodType'];
        }

        if (isset($map['usageLimit'])) {
            $model->usageLimit = $map['usageLimit'];
        }

        return $model;
    }
}
