<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ContactCenterAI\V20240603\Models;

use AlibabaCloud\SDK\ContactCenterAI\V20240603\Models\CreateTaskRequest\dialogue;
use AlibabaCloud\SDK\ContactCenterAI\V20240603\Models\CreateTaskRequest\examples;
use AlibabaCloud\SDK\ContactCenterAI\V20240603\Models\CreateTaskRequest\fields;
use AlibabaCloud\SDK\ContactCenterAI\V20240603\Models\CreateTaskRequest\serviceInspection;
use AlibabaCloud\SDK\ContactCenterAI\V20240603\Models\CreateTaskRequest\transcription;
use AlibabaCloud\Tea\Model;

class CreateTaskRequest extends Model
{
    /**
     * @var dialogue
     */
    public $dialogue;

    /**
     * @var examples
     */
    public $examples;

    /**
     * @var fields[]
     */
    public $fields;

    /**
     * @description This parameter is required.
     *
     * @example tyxmTurbo
     *
     * @var string
     */
    public $modelCode;

    /**
     * @var string[]
     */
    public $resultTypes;

    /**
     * @var serviceInspection
     */
    public $serviceInspection;

    /**
     * @description This parameter is required.
     *
     * @example text
     *
     * @var string
     */
    public $taskType;

    /**
     * @var string[]
     */
    public $templateIds;

    /**
     * @var transcription
     */
    public $transcription;
    protected $_name = [
        'dialogue'          => 'dialogue',
        'examples'          => 'examples',
        'fields'            => 'fields',
        'modelCode'         => 'modelCode',
        'resultTypes'       => 'resultTypes',
        'serviceInspection' => 'serviceInspection',
        'taskType'          => 'taskType',
        'templateIds'       => 'templateIds',
        'transcription'     => 'transcription',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dialogue) {
            $res['dialogue'] = null !== $this->dialogue ? $this->dialogue->toMap() : null;
        }
        if (null !== $this->examples) {
            $res['examples'] = null !== $this->examples ? $this->examples->toMap() : null;
        }
        if (null !== $this->fields) {
            $res['fields'] = [];
            if (null !== $this->fields && \is_array($this->fields)) {
                $n = 0;
                foreach ($this->fields as $item) {
                    $res['fields'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->modelCode) {
            $res['modelCode'] = $this->modelCode;
        }
        if (null !== $this->resultTypes) {
            $res['resultTypes'] = $this->resultTypes;
        }
        if (null !== $this->serviceInspection) {
            $res['serviceInspection'] = null !== $this->serviceInspection ? $this->serviceInspection->toMap() : null;
        }
        if (null !== $this->taskType) {
            $res['taskType'] = $this->taskType;
        }
        if (null !== $this->templateIds) {
            $res['templateIds'] = $this->templateIds;
        }
        if (null !== $this->transcription) {
            $res['transcription'] = null !== $this->transcription ? $this->transcription->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateTaskRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['dialogue'])) {
            $model->dialogue = dialogue::fromMap($map['dialogue']);
        }
        if (isset($map['examples'])) {
            $model->examples = examples::fromMap($map['examples']);
        }
        if (isset($map['fields'])) {
            if (!empty($map['fields'])) {
                $model->fields = [];
                $n             = 0;
                foreach ($map['fields'] as $item) {
                    $model->fields[$n++] = null !== $item ? fields::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['modelCode'])) {
            $model->modelCode = $map['modelCode'];
        }
        if (isset($map['resultTypes'])) {
            if (!empty($map['resultTypes'])) {
                $model->resultTypes = $map['resultTypes'];
            }
        }
        if (isset($map['serviceInspection'])) {
            $model->serviceInspection = serviceInspection::fromMap($map['serviceInspection']);
        }
        if (isset($map['taskType'])) {
            $model->taskType = $map['taskType'];
        }
        if (isset($map['templateIds'])) {
            if (!empty($map['templateIds'])) {
                $model->templateIds = $map['templateIds'];
            }
        }
        if (isset($map['transcription'])) {
            $model->transcription = transcription::fromMap($map['transcription']);
        }

        return $model;
    }
}
