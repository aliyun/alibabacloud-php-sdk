<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiStudio\V20220112\Models\GetTrainingJobResponseBody;

use AlibabaCloud\Tea\Model;

class settings extends Model
{
    /**
     * @var string
     */
    public $AIMasterType;

    /**
     * @var bool
     */
    public $enableErrorMonitoringInAIMaster;

    /**
     * @var string
     */
    public $errorMonitoringArgs;

    /**
     * @var int
     */
    public $priority;
    protected $_name = [
        'AIMasterType'                    => 'AIMasterType',
        'enableErrorMonitoringInAIMaster' => 'EnableErrorMonitoringInAIMaster',
        'errorMonitoringArgs'             => 'ErrorMonitoringArgs',
        'priority'                        => 'Priority',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->AIMasterType) {
            $res['AIMasterType'] = $this->AIMasterType;
        }
        if (null !== $this->enableErrorMonitoringInAIMaster) {
            $res['EnableErrorMonitoringInAIMaster'] = $this->enableErrorMonitoringInAIMaster;
        }
        if (null !== $this->errorMonitoringArgs) {
            $res['ErrorMonitoringArgs'] = $this->errorMonitoringArgs;
        }
        if (null !== $this->priority) {
            $res['Priority'] = $this->priority;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return settings
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AIMasterType'])) {
            $model->AIMasterType = $map['AIMasterType'];
        }
        if (isset($map['EnableErrorMonitoringInAIMaster'])) {
            $model->enableErrorMonitoringInAIMaster = $map['EnableErrorMonitoringInAIMaster'];
        }
        if (isset($map['ErrorMonitoringArgs'])) {
            $model->errorMonitoringArgs = $map['ErrorMonitoringArgs'];
        }
        if (isset($map['Priority'])) {
            $model->priority = $map['Priority'];
        }

        return $model;
    }
}
