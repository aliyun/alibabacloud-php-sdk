<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstancesResponseBody\instances\instance;

use AlibabaCloud\Dara\Model;

class additionalInfo extends Model
{
    /**
     * @var bool
     */
    public $enableHighDensityMode;
    protected $_name = [
        'enableHighDensityMode' => 'EnableHighDensityMode',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->enableHighDensityMode) {
            $res['EnableHighDensityMode'] = $this->enableHighDensityMode;
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
        if (isset($map['EnableHighDensityMode'])) {
            $model->enableHighDensityMode = $map['EnableHighDensityMode'];
        }

        return $model;
    }
}
