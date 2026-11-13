<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20220222\Models\DescribeScalingGroupsResponseBody\scalingGroups\warmPoolConfiguration;

use AlibabaCloud\Dara\Model;

class instanceReusePolicy extends Model
{
    /**
     * @var bool
     */
    public $reuseOnScaleIn;
    protected $_name = [
        'reuseOnScaleIn' => 'ReuseOnScaleIn',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->reuseOnScaleIn) {
            $res['ReuseOnScaleIn'] = $this->reuseOnScaleIn;
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
        if (isset($map['ReuseOnScaleIn'])) {
            $model->reuseOnScaleIn = $map['ReuseOnScaleIn'];
        }

        return $model;
    }
}
