<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\PutMetricRuleTargetsResponseBody;

use AlibabaCloud\SDK\Cms\V20190101\Models\PutMetricRuleTargetsResponseBody\failData\targets;
use AlibabaCloud\Tea\Model;

class failData extends Model
{
    /**
     * @description The information about the resource for which alerts are triggered.
     *
     * @var targets
     */
    public $targets;
    protected $_name = [
        'targets' => 'Targets',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->targets) {
            $res['Targets'] = null !== $this->targets ? $this->targets->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return failData
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Targets'])) {
            $model->targets = targets::fromMap($map['Targets']);
        }

        return $model;
    }
}
