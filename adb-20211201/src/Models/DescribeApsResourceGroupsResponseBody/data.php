<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models\DescribeApsResourceGroupsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeApsResourceGroupsResponseBody\data\resourceGroups;

class data extends Model
{
    /**
     * @var resourceGroups[]
     */
    public $resourceGroups;

    /**
     * @var int
     */
    public $step;
    protected $_name = [
        'resourceGroups' => 'ResourceGroups',
        'step' => 'Step',
    ];

    public function validate()
    {
        if (\is_array($this->resourceGroups)) {
            Model::validateArray($this->resourceGroups);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->resourceGroups) {
            if (\is_array($this->resourceGroups)) {
                $res['ResourceGroups'] = [];
                $n1 = 0;
                foreach ($this->resourceGroups as $item1) {
                    $res['ResourceGroups'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->step) {
            $res['Step'] = $this->step;
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
        if (isset($map['ResourceGroups'])) {
            if (!empty($map['ResourceGroups'])) {
                $model->resourceGroups = [];
                $n1 = 0;
                foreach ($map['ResourceGroups'] as $item1) {
                    $model->resourceGroups[$n1] = resourceGroups::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Step'])) {
            $model->step = $map['Step'];
        }

        return $model;
    }
}
