<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeOutgoingRiskTrendResponseBody;

use AlibabaCloud\Dara\Model;

class dataList extends Model
{
    /**
     * @var int
     */
    public $riskDomain;

    /**
     * @var int
     */
    public $riskIp;

    /**
     * @var int
     */
    public $time;
    protected $_name = [
        'riskDomain' => 'RiskDomain',
        'riskIp' => 'RiskIp',
        'time' => 'Time',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->riskDomain) {
            $res['RiskDomain'] = $this->riskDomain;
        }

        if (null !== $this->riskIp) {
            $res['RiskIp'] = $this->riskIp;
        }

        if (null !== $this->time) {
            $res['Time'] = $this->time;
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
        if (isset($map['RiskDomain'])) {
            $model->riskDomain = $map['RiskDomain'];
        }

        if (isset($map['RiskIp'])) {
            $model->riskIp = $map['RiskIp'];
        }

        if (isset($map['Time'])) {
            $model->time = $map['Time'];
        }

        return $model;
    }
}
