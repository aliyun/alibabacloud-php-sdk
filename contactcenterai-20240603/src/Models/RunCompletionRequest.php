<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ContactCenterAI\V20240603\Models;

use AlibabaCloud\SDK\ContactCenterAI\V20240603\Models\RunCompletionRequest\dialogue;
use AlibabaCloud\SDK\ContactCenterAI\V20240603\Models\RunCompletionRequest\fields;
use AlibabaCloud\SDK\ContactCenterAI\V20240603\Models\RunCompletionRequest\serviceInspection;
use AlibabaCloud\Tea\Model;

class RunCompletionRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @var dialogue
     */
    public $dialogue;

    /**
     * @var fields[]
     */
    public $fields;

    /**
     * @example ccai-14b
     *
     * @var string
     */
    public $modelCode;

    /**
     * @var serviceInspection
     */
    public $serviceInspection;

    /**
     * @example false
     *
     * @var bool
     */
    public $stream;

    /**
     * @description This parameter is required.
     *
     * @var int[]
     */
    public $templateIds;
    protected $_name = [
        'dialogue'          => 'Dialogue',
        'fields'            => 'Fields',
        'modelCode'         => 'ModelCode',
        'serviceInspection' => 'ServiceInspection',
        'stream'            => 'Stream',
        'templateIds'       => 'TemplateIds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dialogue) {
            $res['Dialogue'] = null !== $this->dialogue ? $this->dialogue->toMap() : null;
        }
        if (null !== $this->fields) {
            $res['Fields'] = [];
            if (null !== $this->fields && \is_array($this->fields)) {
                $n = 0;
                foreach ($this->fields as $item) {
                    $res['Fields'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->modelCode) {
            $res['ModelCode'] = $this->modelCode;
        }
        if (null !== $this->serviceInspection) {
            $res['ServiceInspection'] = null !== $this->serviceInspection ? $this->serviceInspection->toMap() : null;
        }
        if (null !== $this->stream) {
            $res['Stream'] = $this->stream;
        }
        if (null !== $this->templateIds) {
            $res['TemplateIds'] = $this->templateIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RunCompletionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Dialogue'])) {
            $model->dialogue = dialogue::fromMap($map['Dialogue']);
        }
        if (isset($map['Fields'])) {
            if (!empty($map['Fields'])) {
                $model->fields = [];
                $n             = 0;
                foreach ($map['Fields'] as $item) {
                    $model->fields[$n++] = null !== $item ? fields::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ModelCode'])) {
            $model->modelCode = $map['ModelCode'];
        }
        if (isset($map['ServiceInspection'])) {
            $model->serviceInspection = serviceInspection::fromMap($map['ServiceInspection']);
        }
        if (isset($map['Stream'])) {
            $model->stream = $map['Stream'];
        }
        if (isset($map['TemplateIds'])) {
            if (!empty($map['TemplateIds'])) {
                $model->templateIds = $map['TemplateIds'];
            }
        }

        return $model;
    }
}
