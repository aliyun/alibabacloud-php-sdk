<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pvtz\V20180101\Models;

use AlibabaCloud\SDK\Pvtz\V20180101\Models\UpdateResolverRuleRequest\forwardIp;
use AlibabaCloud\Tea\Model;

class UpdateResolverRuleRequest extends Model
{
    /**
     * @var string
     */
    public $endpointId;

    /**
     * @description The destination IP address and port number.
     *
     * @var forwardIp[]
     */
    public $forwardIp;

    /**
     * @description The language.
     *
     * @example en
     *
     * @var string
     */
    public $lang;

    /**
     * @description The name of the forwarding rule.
     *
     * @example forward rule-test
     *
     * @var string
     */
    public $name;

    /**
     * @description The forwarding rule ID.
     *
     * This parameter is required.
     * @example hra0**
     *
     * @var string
     */
    public $ruleId;
    protected $_name = [
        'endpointId' => 'EndpointId',
        'forwardIp'  => 'ForwardIp',
        'lang'       => 'Lang',
        'name'       => 'Name',
        'ruleId'     => 'RuleId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->endpointId) {
            $res['EndpointId'] = $this->endpointId;
        }
        if (null !== $this->forwardIp) {
            $res['ForwardIp'] = [];
            if (null !== $this->forwardIp && \is_array($this->forwardIp)) {
                $n = 0;
                foreach ($this->forwardIp as $item) {
                    $res['ForwardIp'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->ruleId) {
            $res['RuleId'] = $this->ruleId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateResolverRuleRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EndpointId'])) {
            $model->endpointId = $map['EndpointId'];
        }
        if (isset($map['ForwardIp'])) {
            if (!empty($map['ForwardIp'])) {
                $model->forwardIp = [];
                $n                = 0;
                foreach ($map['ForwardIp'] as $item) {
                    $model->forwardIp[$n++] = null !== $item ? forwardIp::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['RuleId'])) {
            $model->ruleId = $map['RuleId'];
        }

        return $model;
    }
}
