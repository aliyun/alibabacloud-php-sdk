<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PAILangStudio\V20240710\Models\Connection;

use AlibabaCloud\Dara\Model;

class models extends Model
{
    /**
     * @var string
     */
    public $displayName;

    /**
     * @var int
     */
    public $maxModelLength;

    /**
     * @var string
     */
    public $model;

    /**
     * @var string
     */
    public $modelType;

    /**
     * @var bool
     */
    public $supportReasoning;

    /**
     * @var bool
     */
    public $supportResponseSchema;

    /**
     * @var bool
     */
    public $supportVision;

    /**
     * @var bool
     */
    public $toolCall;
    protected $_name = [
        'displayName' => 'DisplayName',
        'maxModelLength' => 'MaxModelLength',
        'model' => 'Model',
        'modelType' => 'ModelType',
        'supportReasoning' => 'SupportReasoning',
        'supportResponseSchema' => 'SupportResponseSchema',
        'supportVision' => 'SupportVision',
        'toolCall' => 'ToolCall',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->displayName) {
            $res['DisplayName'] = $this->displayName;
        }

        if (null !== $this->maxModelLength) {
            $res['MaxModelLength'] = $this->maxModelLength;
        }

        if (null !== $this->model) {
            $res['Model'] = $this->model;
        }

        if (null !== $this->modelType) {
            $res['ModelType'] = $this->modelType;
        }

        if (null !== $this->supportReasoning) {
            $res['SupportReasoning'] = $this->supportReasoning;
        }

        if (null !== $this->supportResponseSchema) {
            $res['SupportResponseSchema'] = $this->supportResponseSchema;
        }

        if (null !== $this->supportVision) {
            $res['SupportVision'] = $this->supportVision;
        }

        if (null !== $this->toolCall) {
            $res['ToolCall'] = $this->toolCall;
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
        if (isset($map['DisplayName'])) {
            $model->displayName = $map['DisplayName'];
        }

        if (isset($map['MaxModelLength'])) {
            $model->maxModelLength = $map['MaxModelLength'];
        }

        if (isset($map['Model'])) {
            $model->model = $map['Model'];
        }

        if (isset($map['ModelType'])) {
            $model->modelType = $map['ModelType'];
        }

        if (isset($map['SupportReasoning'])) {
            $model->supportReasoning = $map['SupportReasoning'];
        }

        if (isset($map['SupportResponseSchema'])) {
            $model->supportResponseSchema = $map['SupportResponseSchema'];
        }

        if (isset($map['SupportVision'])) {
            $model->supportVision = $map['SupportVision'];
        }

        if (isset($map['ToolCall'])) {
            $model->toolCall = $map['ToolCall'];
        }

        return $model;
    }
}
