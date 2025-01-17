<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeLoginBaseConfigsResponseBody\baseConfigs;

use AlibabaCloud\Dara\Model;

class targetList extends Model
{
    /**
     * @var string
     */
    public $target;
    /**
     * @var string
     */
    public $targetType;
    protected $_name = [
        'target'     => 'Target',
        'targetType' => 'TargetType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->target) {
            $res['Target'] = $this->target;
        }

        if (null !== $this->targetType) {
            $res['TargetType'] = $this->targetType;
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
        if (isset($map['Target'])) {
            $model->target = $map['Target'];
        }

        if (isset($map['TargetType'])) {
            $model->targetType = $map['TargetType'];
        }

        return $model;
    }
}
