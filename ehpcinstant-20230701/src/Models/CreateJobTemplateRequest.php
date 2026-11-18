<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EhpcInstant\V20230701\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\EhpcInstant\V20230701\Models\CreateJobTemplateRequest\jobTemplateConfig;

class CreateJobTemplateRequest extends Model
{
    /**
     * @var jobTemplateConfig
     */
    public $jobTemplateConfig;

    /**
     * @var string
     */
    public $jobTemplateDescription;

    /**
     * @var string
     */
    public $jobTemplateName;
    protected $_name = [
        'jobTemplateConfig' => 'JobTemplateConfig',
        'jobTemplateDescription' => 'JobTemplateDescription',
        'jobTemplateName' => 'JobTemplateName',
    ];

    public function validate()
    {
        if (null !== $this->jobTemplateConfig) {
            $this->jobTemplateConfig->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->jobTemplateConfig) {
            $res['JobTemplateConfig'] = null !== $this->jobTemplateConfig ? $this->jobTemplateConfig->toArray($noStream) : $this->jobTemplateConfig;
        }

        if (null !== $this->jobTemplateDescription) {
            $res['JobTemplateDescription'] = $this->jobTemplateDescription;
        }

        if (null !== $this->jobTemplateName) {
            $res['JobTemplateName'] = $this->jobTemplateName;
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
        if (isset($map['JobTemplateConfig'])) {
            $model->jobTemplateConfig = jobTemplateConfig::fromMap($map['JobTemplateConfig']);
        }

        if (isset($map['JobTemplateDescription'])) {
            $model->jobTemplateDescription = $map['JobTemplateDescription'];
        }

        if (isset($map['JobTemplateName'])) {
            $model->jobTemplateName = $map['JobTemplateName'];
        }

        return $model;
    }
}
