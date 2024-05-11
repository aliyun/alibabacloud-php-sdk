<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models;

use AlibabaCloud\SDK\Eventbridge\V20200401\Models\PutTargetsRequest\targets;
use AlibabaCloud\Tea\Model;

class PutTargetsRequest extends Model
{
    /**
     * @description The name of the event bus.
     *
     * This parameter is required.
     * @example eventTest
     *
     * @var string
     */
    public $eventBusName;

    /**
     * @description The name of the event rule.
     *
     * This parameter is required.
     * @example ssr-send-to-vendor-test01
     *
     * @var string
     */
    public $ruleName;

    /**
     * @description The event targets to be created or updated. For more information, see [Limits.](https://www.alibabacloud.com/help/en/eventbridge/latest/limits)
     *
     * This parameter is required.
     * @var targets[]
     */
    public $targets;
    protected $_name = [
        'eventBusName' => 'EventBusName',
        'ruleName'     => 'RuleName',
        'targets'      => 'Targets',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->eventBusName) {
            $res['EventBusName'] = $this->eventBusName;
        }
        if (null !== $this->ruleName) {
            $res['RuleName'] = $this->ruleName;
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
     * @return PutTargetsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EventBusName'])) {
            $model->eventBusName = $map['EventBusName'];
        }
        if (isset($map['RuleName'])) {
            $model->ruleName = $map['RuleName'];
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
