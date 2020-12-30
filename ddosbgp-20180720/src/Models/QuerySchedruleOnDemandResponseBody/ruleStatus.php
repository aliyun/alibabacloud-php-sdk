<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddosbgp\V20180720\Models\QuerySchedruleOnDemandResponseBody;

use AlibabaCloud\Tea\Model;

class ruleStatus extends Model
{
    /**
     * @var string
     */
    public $ruleSchedStatus;

    /**
     * @var string
     */
    public $net;
    protected $_name = [
        'ruleSchedStatus' => 'RuleSchedStatus',
        'net'             => 'Net',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ruleSchedStatus) {
            $res['RuleSchedStatus'] = $this->ruleSchedStatus;
        }
        if (null !== $this->net) {
            $res['Net'] = $this->net;
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
        if (isset($map['RuleSchedStatus'])) {
            $model->ruleSchedStatus = $map['RuleSchedStatus'];
        }
        if (isset($map['Net'])) {
            $model->net = $map['Net'];
        }

        return $model;
    }
}
