<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\PutMetricRuleTargetsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cms\V20190101\Models\PutMetricRuleTargetsResponseBody\failData\targets;

class failData extends Model
{
    /**
     * @var targets
     */
    public $targets;
    protected $_name = [
        'targets' => 'Targets',
    ];

    public function validate()
    {
        if (null !== $this->targets) {
            $this->targets->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->targets) {
            $res['Targets'] = null !== $this->targets ? $this->targets->toArray($noStream) : $this->targets;
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
        if (isset($map['Targets'])) {
            $model->targets = targets::fromMap($map['Targets']);
        }

        return $model;
    }
}
