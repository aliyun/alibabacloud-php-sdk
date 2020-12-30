<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models\DescribeInstanceSwitchAzoneResponseBody\result;

use AlibabaCloud\Tea\Model;

class targetAzones extends Model
{
    /**
     * @var string[]
     */
    public $targetAzone;
    protected $_name = [
        'targetAzone' => 'TargetAzone',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->targetAzone) {
            $res['TargetAzone'] = $this->targetAzone;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return targetAzones
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TargetAzone'])) {
            if (!empty($map['TargetAzone'])) {
                $model->targetAzone = $map['TargetAzone'];
            }
        }

        return $model;
    }
}
