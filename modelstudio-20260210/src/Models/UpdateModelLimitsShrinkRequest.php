<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ModelStudio\V20260210\Models;

use AlibabaCloud\Dara\Model;

class UpdateModelLimitsShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $workspaceId;

    /**
     * @var string
     */
    public $workspaceLimitsShrink;
    protected $_name = [
        'workspaceId' => 'workspaceId',
        'workspaceLimitsShrink' => 'workspaceLimits',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->workspaceId) {
            $res['workspaceId'] = $this->workspaceId;
        }

        if (null !== $this->workspaceLimitsShrink) {
            $res['workspaceLimits'] = $this->workspaceLimitsShrink;
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
        if (isset($map['workspaceId'])) {
            $model->workspaceId = $map['workspaceId'];
        }

        if (isset($map['workspaceLimits'])) {
            $model->workspaceLimitsShrink = $map['workspaceLimits'];
        }

        return $model;
    }
}
