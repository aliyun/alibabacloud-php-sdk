<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ModelStudio\V20260210\Models\ListModelLimitsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ModelStudio\V20260210\Models\ListModelLimitsResponseBody\limits\modelLimit;
use AlibabaCloud\SDK\ModelStudio\V20260210\Models\ListModelLimitsResponseBody\limits\workspaceLimit;

class limits extends Model
{
    /**
     * @var string
     */
    public $model;

    /**
     * @var modelLimit
     */
    public $modelLimit;

    /**
     * @var string
     */
    public $name;

    /**
     * @var workspaceLimit
     */
    public $workspaceLimit;
    protected $_name = [
        'model' => 'model',
        'modelLimit' => 'modelLimit',
        'name' => 'name',
        'workspaceLimit' => 'workspaceLimit',
    ];

    public function validate()
    {
        if (null !== $this->modelLimit) {
            $this->modelLimit->validate();
        }
        if (null !== $this->workspaceLimit) {
            $this->workspaceLimit->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->model) {
            $res['model'] = $this->model;
        }

        if (null !== $this->modelLimit) {
            $res['modelLimit'] = null !== $this->modelLimit ? $this->modelLimit->toArray($noStream) : $this->modelLimit;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->workspaceLimit) {
            $res['workspaceLimit'] = null !== $this->workspaceLimit ? $this->workspaceLimit->toArray($noStream) : $this->workspaceLimit;
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
        if (isset($map['model'])) {
            $model->model = $map['model'];
        }

        if (isset($map['modelLimit'])) {
            $model->modelLimit = modelLimit::fromMap($map['modelLimit']);
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['workspaceLimit'])) {
            $model->workspaceLimit = workspaceLimit::fromMap($map['workspaceLimit']);
        }

        return $model;
    }
}
