<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaxCompute\V20220104\Models\UpdateTunnelQuotaTimerRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\UpdateTunnelQuotaTimerRequest\body\tunnelQuotaParameter;

class body extends Model
{
    /**
     * @var string
     */
    public $beginTime;

    /**
     * @var string
     */
    public $endTime;

    /**
     * @var tunnelQuotaParameter
     */
    public $tunnelQuotaParameter;
    protected $_name = [
        'beginTime' => 'beginTime',
        'endTime' => 'endTime',
        'tunnelQuotaParameter' => 'tunnelQuotaParameter',
    ];

    public function validate()
    {
        if (null !== $this->tunnelQuotaParameter) {
            $this->tunnelQuotaParameter->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->beginTime) {
            $res['beginTime'] = $this->beginTime;
        }

        if (null !== $this->endTime) {
            $res['endTime'] = $this->endTime;
        }

        if (null !== $this->tunnelQuotaParameter) {
            $res['tunnelQuotaParameter'] = null !== $this->tunnelQuotaParameter ? $this->tunnelQuotaParameter->toArray($noStream) : $this->tunnelQuotaParameter;
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
        if (isset($map['beginTime'])) {
            $model->beginTime = $map['beginTime'];
        }

        if (isset($map['endTime'])) {
            $model->endTime = $map['endTime'];
        }

        if (isset($map['tunnelQuotaParameter'])) {
            $model->tunnelQuotaParameter = tunnelQuotaParameter::fromMap($map['tunnelQuotaParameter']);
        }

        return $model;
    }
}
