<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ModelStudio\V20260210\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ModelStudio\V20260210\Models\UpdateModelLimitsRequest\workspaceLimits;

class UpdateModelLimitsRequest extends Model
{
    /**
     * @var string
     */
    public $workspaceId;

    /**
     * @var workspaceLimits[]
     */
    public $workspaceLimits;
    protected $_name = [
        'workspaceId' => 'workspaceId',
        'workspaceLimits' => 'workspaceLimits',
    ];

    public function validate()
    {
        if (\is_array($this->workspaceLimits)) {
            Model::validateArray($this->workspaceLimits);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->workspaceId) {
            $res['workspaceId'] = $this->workspaceId;
        }

        if (null !== $this->workspaceLimits) {
            if (\is_array($this->workspaceLimits)) {
                $res['workspaceLimits'] = [];
                $n1 = 0;
                foreach ($this->workspaceLimits as $item1) {
                    $res['workspaceLimits'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
            if (!empty($map['workspaceLimits'])) {
                $model->workspaceLimits = [];
                $n1 = 0;
                foreach ($map['workspaceLimits'] as $item1) {
                    $model->workspaceLimits[$n1] = workspaceLimits::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
