<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\UpdateConnectionRequest;

use AlibabaCloud\Dara\Model;

class models extends Model
{
    /**
     * @var string
     */
    public $displayName;

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
    public $toolCall;
    protected $_name = [
        'displayName' => 'DisplayName',
        'model' => 'Model',
        'modelType' => 'ModelType',
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

        if (null !== $this->model) {
            $res['Model'] = $this->model;
        }

        if (null !== $this->modelType) {
            $res['ModelType'] = $this->modelType;
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

        if (isset($map['Model'])) {
            $model->model = $map['Model'];
        }

        if (isset($map['ModelType'])) {
            $model->modelType = $map['ModelType'];
        }

        if (isset($map['ToolCall'])) {
            $model->toolCall = $map['ToolCall'];
        }

        return $model;
    }
}
