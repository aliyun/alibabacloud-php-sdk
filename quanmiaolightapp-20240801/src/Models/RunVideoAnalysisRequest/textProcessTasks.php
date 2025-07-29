<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\RunVideoAnalysisRequest;

use AlibabaCloud\Tea\Model;

class textProcessTasks extends Model
{
    /**
     * @var string
     */
    public $modelCustomPromptTemplate;

    /**
     * @var string
     */
    public $modelCustomPromptTemplateId;

    /**
     * @var string
     */
    public $modelId;
    protected $_name = [
        'modelCustomPromptTemplate' => 'modelCustomPromptTemplate',
        'modelCustomPromptTemplateId' => 'modelCustomPromptTemplateId',
        'modelId' => 'modelId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->modelCustomPromptTemplate) {
            $res['modelCustomPromptTemplate'] = $this->modelCustomPromptTemplate;
        }
        if (null !== $this->modelCustomPromptTemplateId) {
            $res['modelCustomPromptTemplateId'] = $this->modelCustomPromptTemplateId;
        }
        if (null !== $this->modelId) {
            $res['modelId'] = $this->modelId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return textProcessTasks
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['modelCustomPromptTemplate'])) {
            $model->modelCustomPromptTemplate = $map['modelCustomPromptTemplate'];
        }
        if (isset($map['modelCustomPromptTemplateId'])) {
            $model->modelCustomPromptTemplateId = $map['modelCustomPromptTemplateId'];
        }
        if (isset($map['modelId'])) {
            $model->modelId = $map['modelId'];
        }

        return $model;
    }
}
