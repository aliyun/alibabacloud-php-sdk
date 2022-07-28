<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models;

use AlibabaCloud\SDK\Devops\V20210625\Models\CreatePipelineRequest\basicInfo;
use AlibabaCloud\SDK\Devops\V20210625\Models\CreatePipelineRequest\settings;
use AlibabaCloud\SDK\Devops\V20210625\Models\CreatePipelineRequest\triggerInfo;
use AlibabaCloud\Tea\Model;

class CreatePipelineRequest extends Model
{
    /**
     * @var basicInfo
     */
    public $basicInfo;

    /**
     * @var string
     */
    public $pipelineYaml;

    /**
     * @var settings
     */
    public $settings;

    /**
     * @var triggerInfo
     */
    public $triggerInfo;
    protected $_name = [
        'basicInfo'    => 'basicInfo',
        'pipelineYaml' => 'pipelineYaml',
        'settings'     => 'settings',
        'triggerInfo'  => 'triggerInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->basicInfo) {
            $res['basicInfo'] = null !== $this->basicInfo ? $this->basicInfo->toMap() : null;
        }
        if (null !== $this->pipelineYaml) {
            $res['pipelineYaml'] = $this->pipelineYaml;
        }
        if (null !== $this->settings) {
            $res['settings'] = null !== $this->settings ? $this->settings->toMap() : null;
        }
        if (null !== $this->triggerInfo) {
            $res['triggerInfo'] = null !== $this->triggerInfo ? $this->triggerInfo->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreatePipelineRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['basicInfo'])) {
            $model->basicInfo = basicInfo::fromMap($map['basicInfo']);
        }
        if (isset($map['pipelineYaml'])) {
            $model->pipelineYaml = $map['pipelineYaml'];
        }
        if (isset($map['settings'])) {
            $model->settings = settings::fromMap($map['settings']);
        }
        if (isset($map['triggerInfo'])) {
            $model->triggerInfo = triggerInfo::fromMap($map['triggerInfo']);
        }

        return $model;
    }
}
