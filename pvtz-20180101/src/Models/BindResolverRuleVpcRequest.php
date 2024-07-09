<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pvtz\V20180101\Models;

use AlibabaCloud\SDK\Pvtz\V20180101\Models\BindResolverRuleVpcRequest\vpc;
use AlibabaCloud\Tea\Model;

class BindResolverRuleVpcRequest extends Model
{
    /**
     * @description The language.
     *
     * @example en
     *
     * @var string
     */
    public $lang;

    /**
     * @description The forwarding rule ID.
     *
     * This parameter is required.
     * @example hra0**
     *
     * @var string
     */
    public $ruleId;

    /**
     * @description The VPCs.
     *
     * @var vpc[]
     */
    public $vpc;
    protected $_name = [
        'lang'   => 'Lang',
        'ruleId' => 'RuleId',
        'vpc'    => 'Vpc',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->ruleId) {
            $res['RuleId'] = $this->ruleId;
        }
        if (null !== $this->vpc) {
            $res['Vpc'] = [];
            if (null !== $this->vpc && \is_array($this->vpc)) {
                $n = 0;
                foreach ($this->vpc as $item) {
                    $res['Vpc'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return BindResolverRuleVpcRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['RuleId'])) {
            $model->ruleId = $map['RuleId'];
        }
        if (isset($map['Vpc'])) {
            if (!empty($map['Vpc'])) {
                $model->vpc = [];
                $n          = 0;
                foreach ($map['Vpc'] as $item) {
                    $model->vpc[$n++] = null !== $item ? vpc::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
