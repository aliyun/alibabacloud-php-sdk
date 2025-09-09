<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models\DescribeInstanceSwitchAzoneResponseBody\result;

use AlibabaCloud\Dara\Model;

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
        if (\is_array($this->targetAzone)) {
            Model::validateArray($this->targetAzone);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->targetAzone) {
            if (\is_array($this->targetAzone)) {
                $res['TargetAzone'] = [];
                $n1 = 0;
                foreach ($this->targetAzone as $item1) {
                    $res['TargetAzone'][$n1] = $item1;
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
        if (isset($map['TargetAzone'])) {
            if (!empty($map['TargetAzone'])) {
                $model->targetAzone = [];
                $n1 = 0;
                foreach ($map['TargetAzone'] as $item1) {
                    $model->targetAzone[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
