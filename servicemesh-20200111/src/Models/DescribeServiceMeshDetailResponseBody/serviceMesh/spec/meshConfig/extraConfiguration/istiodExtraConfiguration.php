<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeServiceMeshDetailResponseBody\serviceMesh\spec\meshConfig\extraConfiguration;

use AlibabaCloud\Dara\Model;

class istiodExtraConfiguration extends Model
{
    /**
     * @var string
     */
    public $labelsForOffloadedWorkloads;

    /**
     * @var bool
     */
    public $pilotEnableQuicListeners;
    protected $_name = [
        'labelsForOffloadedWorkloads' => 'LabelsForOffloadedWorkloads',
        'pilotEnableQuicListeners' => 'PilotEnableQuicListeners',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->labelsForOffloadedWorkloads) {
            $res['LabelsForOffloadedWorkloads'] = $this->labelsForOffloadedWorkloads;
        }

        if (null !== $this->pilotEnableQuicListeners) {
            $res['PilotEnableQuicListeners'] = $this->pilotEnableQuicListeners;
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
        if (isset($map['LabelsForOffloadedWorkloads'])) {
            $model->labelsForOffloadedWorkloads = $map['LabelsForOffloadedWorkloads'];
        }

        if (isset($map['PilotEnableQuicListeners'])) {
            $model->pilotEnableQuicListeners = $map['PilotEnableQuicListeners'];
        }

        return $model;
    }
}
