<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflocnp\V20230828\Models;

use AlibabaCloud\Tea\Model;

class GetExperimentResultDataRequest extends Model
{
    /**
     * @example 234
     *
     * @var int
     */
    public $experimentId;

    /**
     * @example iZj6ccwd7zwfms7hzaz2riZ
     *
     * @var string
     */
    public $hostname;

    /**
     * @example AI
     *
     * @var string
     */
    public $workloadType;
    protected $_name = [
        'experimentId' => 'ExperimentId',
        'hostname'     => 'Hostname',
        'workloadType' => 'WorkloadType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->experimentId) {
            $res['ExperimentId'] = $this->experimentId;
        }
        if (null !== $this->hostname) {
            $res['Hostname'] = $this->hostname;
        }
        if (null !== $this->workloadType) {
            $res['WorkloadType'] = $this->workloadType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetExperimentResultDataRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ExperimentId'])) {
            $model->experimentId = $map['ExperimentId'];
        }
        if (isset($map['Hostname'])) {
            $model->hostname = $map['Hostname'];
        }
        if (isset($map['WorkloadType'])) {
            $model->workloadType = $map['WorkloadType'];
        }

        return $model;
    }
}
