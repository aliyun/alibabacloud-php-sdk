<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddosbgp\V20180720\Models\QuerySchedruleOnDemandResponseBody;

use AlibabaCloud\Tea\Model;

class ruleStatus extends Model
{
    /**
     * @example 47.***.***.0/24
     *
     * @var string
     */
    public $net;

    /**
     * @description All Alibaba Cloud API operations must include common request parameters. For more information about common request parameters, see [Common parameters](~~118841~~).
     *
     * For more information about sample requests, see the **"Examples"** section of this topic.
     * @example unscheduled
     *
     * @var string
     */
    public $ruleSchedStatus;
    protected $_name = [
        'net'             => 'Net',
        'ruleSchedStatus' => 'RuleSchedStatus',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->net) {
            $res['Net'] = $this->net;
        }
        if (null !== $this->ruleSchedStatus) {
            $res['RuleSchedStatus'] = $this->ruleSchedStatus;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ruleStatus
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Net'])) {
            $model->net = $map['Net'];
        }
        if (isset($map['RuleSchedStatus'])) {
            $model->ruleSchedStatus = $map['RuleSchedStatus'];
        }

        return $model;
    }
}
