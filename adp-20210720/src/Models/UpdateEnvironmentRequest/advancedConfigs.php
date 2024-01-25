<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adp\V20210720\Models\UpdateEnvironmentRequest;

use AlibabaCloud\Tea\Model;

class advancedConfigs extends Model
{
    /**
     * @var bool
     */
    public $enableDeploySimulation;

    /**
     * @var bool
     */
    public $enableSiteSurvey;
    protected $_name = [
        'enableDeploySimulation' => 'enableDeploySimulation',
        'enableSiteSurvey'       => 'enableSiteSurvey',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->enableDeploySimulation) {
            $res['enableDeploySimulation'] = $this->enableDeploySimulation;
        }
        if (null !== $this->enableSiteSurvey) {
            $res['enableSiteSurvey'] = $this->enableSiteSurvey;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return advancedConfigs
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['enableDeploySimulation'])) {
            $model->enableDeploySimulation = $map['enableDeploySimulation'];
        }
        if (isset($map['enableSiteSurvey'])) {
            $model->enableSiteSurvey = $map['enableSiteSurvey'];
        }

        return $model;
    }
}
