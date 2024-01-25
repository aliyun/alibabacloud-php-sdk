<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiops\V20200806\Models;

use AlibabaCloud\Tea\Model;

class RunRiskPatrolRequest extends Model
{
    /**
     * @var string
     */
    public $operaUid;

    /**
     * @var string
     */
    public $riskPatrolTypes;
    protected $_name = [
        'operaUid'        => 'OperaUid',
        'riskPatrolTypes' => 'RiskPatrolTypes',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->operaUid) {
            $res['OperaUid'] = $this->operaUid;
        }
        if (null !== $this->riskPatrolTypes) {
            $res['RiskPatrolTypes'] = $this->riskPatrolTypes;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RunRiskPatrolRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OperaUid'])) {
            $model->operaUid = $map['OperaUid'];
        }
        if (isset($map['RiskPatrolTypes'])) {
            $model->riskPatrolTypes = $map['RiskPatrolTypes'];
        }

        return $model;
    }
}
