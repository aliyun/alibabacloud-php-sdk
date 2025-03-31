<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Smc\V20190601\Models\DescribeWorkgroupsResponseBody\workgroups\workgroup;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Smc\V20190601\Models\DescribeWorkgroupsResponseBody\workgroups\workgroup\warnings\warning;

class warnings extends Model
{
    /**
     * @var warning[]
     */
    public $warning;
    protected $_name = [
        'warning' => 'Warning',
    ];

    public function validate()
    {
        if (\is_array($this->warning)) {
            Model::validateArray($this->warning);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->warning) {
            if (\is_array($this->warning)) {
                $res['Warning'] = [];
                $n1 = 0;
                foreach ($this->warning as $item1) {
                    $res['Warning'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Warning'])) {
            if (!empty($map['Warning'])) {
                $model->warning = [];
                $n1 = 0;
                foreach ($map['Warning'] as $item1) {
                    $model->warning[$n1++] = warning::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
