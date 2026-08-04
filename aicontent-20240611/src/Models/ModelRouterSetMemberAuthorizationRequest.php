<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiContent\V20240611\Models;

use AlibabaCloud\Dara\Model;

class ModelRouterSetMemberAuthorizationRequest extends Model
{
    /**
     * @var string
     */
    public $allowedModelGroupConfig;

    /**
     * @var string
     */
    public $allowedModels;
    protected $_name = [
        'allowedModelGroupConfig' => 'allowedModelGroupConfig',
        'allowedModels' => 'allowedModels',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->allowedModelGroupConfig) {
            $res['allowedModelGroupConfig'] = $this->allowedModelGroupConfig;
        }

        if (null !== $this->allowedModels) {
            $res['allowedModels'] = $this->allowedModels;
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
        if (isset($map['allowedModelGroupConfig'])) {
            $model->allowedModelGroupConfig = $map['allowedModelGroupConfig'];
        }

        if (isset($map['allowedModels'])) {
            $model->allowedModels = $map['allowedModels'];
        }

        return $model;
    }
}
