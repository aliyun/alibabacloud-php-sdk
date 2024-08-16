<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ContactCenterAI\V20240603\Models;

use AlibabaCloud\SDK\ContactCenterAI\V20240603\Models\AnalyzeConversationRequest\dialogue;
use AlibabaCloud\SDK\ContactCenterAI\V20240603\Models\AnalyzeConversationRequest\exampleList;
use AlibabaCloud\SDK\ContactCenterAI\V20240603\Models\AnalyzeConversationRequest\fields;
use AlibabaCloud\SDK\ContactCenterAI\V20240603\Models\AnalyzeConversationRequest\serviceInspection;
use AlibabaCloud\Tea\Model;

class AnalyzeConversationRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @var dialogue
     */
    public $dialogue;

    /**
     * @var exampleList[]
     */
    public $exampleList;

    /**
     * @var fields[]
     */
    public $fields;

    /**
     * @example tyxmTurbo
     *
     * @var string
     */
    public $modelCode;

    /**
     * @description This parameter is required.
     *
     * @var string[]
     */
    public $resultTypes;

    /**
     * @var string
     */
    public $sceneName;

    /**
     * @var serviceInspection
     */
    public $serviceInspection;

    /**
     * @description This parameter is required.
     *
     * @example false
     *
     * @var bool
     */
    public $stream;
    protected $_name = [
        'dialogue'          => 'dialogue',
        'exampleList'       => 'exampleList',
        'fields'            => 'fields',
        'modelCode'         => 'modelCode',
        'resultTypes'       => 'resultTypes',
        'sceneName'         => 'sceneName',
        'serviceInspection' => 'serviceInspection',
        'stream'            => 'stream',
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
        if (null !== $this->exampleList) {
            $res['exampleList'] = [];
            if (null !== $this->exampleList && \is_array($this->exampleList)) {
                $n = 0;
                foreach ($this->exampleList as $item) {
                    $res['exampleList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (null !== $this->sceneName) {
            $res['sceneName'] = $this->sceneName;
        }
        if (null !== $this->serviceInspection) {
            $res['serviceInspection'] = null !== $this->serviceInspection ? $this->serviceInspection->toMap() : null;
        }
        if (null !== $this->stream) {
            $res['stream'] = $this->stream;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AnalyzeConversationRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['dialogue'])) {
            $model->dialogue = dialogue::fromMap($map['dialogue']);
        }
        if (isset($map['exampleList'])) {
            if (!empty($map['exampleList'])) {
                $model->exampleList = [];
                $n                  = 0;
                foreach ($map['exampleList'] as $item) {
                    $model->exampleList[$n++] = null !== $item ? exampleList::fromMap($item) : $item;
                }
            }
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
        if (isset($map['sceneName'])) {
            $model->sceneName = $map['sceneName'];
        }
        if (isset($map['serviceInspection'])) {
            $model->serviceInspection = serviceInspection::fromMap($map['serviceInspection']);
        }
        if (isset($map['stream'])) {
            $model->stream = $map['stream'];
        }

        return $model;
    }
}
