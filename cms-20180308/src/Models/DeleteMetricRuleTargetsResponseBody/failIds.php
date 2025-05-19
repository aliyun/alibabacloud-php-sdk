<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20180308\Models\DeleteMetricRuleTargetsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cms\V20180308\Models\DeleteMetricRuleTargetsResponseBody\failIds\targetIds;

class failIds extends Model
{
    /**
     * @var targetIds
     */
    public $targetIds;
    protected $_name = [
        'targetIds' => 'TargetIds',
    ];

    public function validate()
    {
        if (null !== $this->targetIds) {
            $this->targetIds->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->targetIds) {
            $res['TargetIds'] = null !== $this->targetIds ? $this->targetIds->toArray($noStream) : $this->targetIds;
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
        if (isset($map['TargetIds'])) {
            $model->targetIds = targetIds::fromMap($map['TargetIds']);
        }

        return $model;
    }
}
