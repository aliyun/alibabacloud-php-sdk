<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaxCompute\V20220104\Models\UpdateTunnelQuotaTimerRequest;

use AlibabaCloud\SDK\MaxCompute\V20220104\Models\UpdateTunnelQuotaTimerRequest\body\tunnelQuotaParameter;
use AlibabaCloud\Tea\Model;

class body extends Model
{
    /**
     * @description The start time of the time-specific configuration.
     *
     * @example 00:00
     *
     * @var string
     */
    public $beginTime;

    /**
     * @description The end time of the time-specific configuration.
     *
     * @example 08:00
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The parameters for the time-specific configuration.
     *
     * @var tunnelQuotaParameter
     */
    public $tunnelQuotaParameter;
    protected $_name = [
        'beginTime' => 'beginTime',
        'endTime' => 'endTime',
        'tunnelQuotaParameter' => 'tunnelQuotaParameter',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->beginTime) {
            $res['beginTime'] = $this->beginTime;
        }
        if (null !== $this->endTime) {
            $res['endTime'] = $this->endTime;
        }
        if (null !== $this->tunnelQuotaParameter) {
            $res['tunnelQuotaParameter'] = null !== $this->tunnelQuotaParameter ? $this->tunnelQuotaParameter->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return body
     */
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
