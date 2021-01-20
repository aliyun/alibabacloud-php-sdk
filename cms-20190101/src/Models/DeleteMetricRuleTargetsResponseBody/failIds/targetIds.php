<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DeleteMetricRuleTargetsResponseBody\failIds;

use AlibabaCloud\Tea\Model;

class targetIds extends Model
{
    /**
     * @var string[]
     */
    public $targetId;
    protected $_name = [
        'targetId' => 'TargetId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->targetId) {
            $res['TargetId'] = $this->targetId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return targetIds
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TargetId'])) {
            if (!empty($map['TargetId'])) {
                $model->targetId = $map['TargetId'];
            }
        }

        return $model;
    }
}
