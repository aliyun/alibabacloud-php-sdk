<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models\ListRoutineBuildConfigurationsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ESA\V20240910\Models\ListRoutineBuildConfigurationsResponseBody\routineBuildConfigurations\latestRoutineBuildTask;
use AlibabaCloud\SDK\ESA\V20240910\Models\ListRoutineBuildConfigurationsResponseBody\routineBuildConfigurations\routineBuildConfiguration;

class routineBuildConfigurations extends Model
{
    /**
     * @var latestRoutineBuildTask
     */
    public $latestRoutineBuildTask;

    /**
     * @var routineBuildConfiguration
     */
    public $routineBuildConfiguration;
    protected $_name = [
        'latestRoutineBuildTask' => 'LatestRoutineBuildTask',
        'routineBuildConfiguration' => 'RoutineBuildConfiguration',
    ];

    public function validate()
    {
        if (null !== $this->latestRoutineBuildTask) {
            $this->latestRoutineBuildTask->validate();
        }
        if (null !== $this->routineBuildConfiguration) {
            $this->routineBuildConfiguration->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->latestRoutineBuildTask) {
            $res['LatestRoutineBuildTask'] = null !== $this->latestRoutineBuildTask ? $this->latestRoutineBuildTask->toArray($noStream) : $this->latestRoutineBuildTask;
        }

        if (null !== $this->routineBuildConfiguration) {
            $res['RoutineBuildConfiguration'] = null !== $this->routineBuildConfiguration ? $this->routineBuildConfiguration->toArray($noStream) : $this->routineBuildConfiguration;
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
        if (isset($map['LatestRoutineBuildTask'])) {
            $model->latestRoutineBuildTask = latestRoutineBuildTask::fromMap($map['LatestRoutineBuildTask']);
        }

        if (isset($map['RoutineBuildConfiguration'])) {
            $model->routineBuildConfiguration = routineBuildConfiguration::fromMap($map['RoutineBuildConfiguration']);
        }

        return $model;
    }
}
