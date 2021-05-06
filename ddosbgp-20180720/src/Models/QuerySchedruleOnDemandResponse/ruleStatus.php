<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddosbgp\V20180720\Models\QuerySchedruleOnDemandResponse;

use AlibabaCloud\Tea\Model;

class ruleStatus extends Model
{
    /**
     * @var string
     */
    public $net;

    /**
     * @var string
     */
    public $ruleSchedStatus;
    protected $_name = [
        'net'             => 'Net',
        'ruleSchedStatus' => 'RuleSchedStatus',
    ];

    public function validate()
    {
        Model::validateRequired('net', $this->net, true);
        Model::validateRequired('ruleSchedStatus', $this->ruleSchedStatus, true);
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
