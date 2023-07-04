<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\GetNatGatewayConvertStatusResponseBody;

use AlibabaCloud\Tea\Model;

class convertSteps extends Model
{
    /**
     * @description Valid values:
     *
     *   **init**: initializing
     *   **check**: checking configurations
     *   **configure**: pushing configurations
     *   **activate**: switching
     *   **conf_delete**: deleting configurations
     *   **rollback**: rolling back
     *   **end_success**: switched
     *   **end_fail**: failed
     *
     * @example init
     *
     * @var string
     */
    public $stepName;

    /**
     * @description The time when the switch started.
     *
     * @example 2020-08-26T08:27:19Z
     *
     * @var string
     */
    public $stepStartTime;

    /**
     * @description The switch status. Valid values:
     *
     *   **processing**: switching
     *   **successful**: switched
     *   **failed**: failed
     *
     * @example successful
     *
     * @var string
     */
    public $stepStatus;
    protected $_name = [
        'stepName'      => 'StepName',
        'stepStartTime' => 'StepStartTime',
        'stepStatus'    => 'StepStatus',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->stepName) {
            $res['StepName'] = $this->stepName;
        }
        if (null !== $this->stepStartTime) {
            $res['StepStartTime'] = $this->stepStartTime;
        }
        if (null !== $this->stepStatus) {
            $res['StepStatus'] = $this->stepStatus;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return convertSteps
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['StepName'])) {
            $model->stepName = $map['StepName'];
        }
        if (isset($map['StepStartTime'])) {
            $model->stepStartTime = $map['StepStartTime'];
        }
        if (isset($map['StepStatus'])) {
            $model->stepStatus = $map['StepStatus'];
        }

        return $model;
    }
}
