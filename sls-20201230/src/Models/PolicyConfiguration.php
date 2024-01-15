<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models;

use AlibabaCloud\Tea\Model;

class PolicyConfiguration extends Model
{
    /**
     * @example example_action_policy
     *
     * @var string
     */
    public $actionPolicyId;

    /**
     * @example sls.builtin.dynamic
     *
     * @var string
     */
    public $alertPolicyId;

    /**
     * @example 10m
     *
     * @var string
     */
    public $repeatInterval;
    protected $_name = [
        'actionPolicyId' => 'actionPolicyId',
        'alertPolicyId'  => 'alertPolicyId',
        'repeatInterval' => 'repeatInterval',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->actionPolicyId) {
            $res['actionPolicyId'] = $this->actionPolicyId;
        }
        if (null !== $this->alertPolicyId) {
            $res['alertPolicyId'] = $this->alertPolicyId;
        }
        if (null !== $this->repeatInterval) {
            $res['repeatInterval'] = $this->repeatInterval;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PolicyConfiguration
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['actionPolicyId'])) {
            $model->actionPolicyId = $map['actionPolicyId'];
        }
        if (isset($map['alertPolicyId'])) {
            $model->alertPolicyId = $map['alertPolicyId'];
        }
        if (isset($map['repeatInterval'])) {
            $model->repeatInterval = $map['repeatInterval'];
        }

        return $model;
    }
}
