<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Smc\V20190601\Models\DescribeWorkgroupsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Smc\V20190601\Models\DescribeWorkgroupsResponseBody\workgroups\workgroup;

class workgroups extends Model
{
    /**
     * @var workgroup[]
     */
    public $workgroup;
    protected $_name = [
        'workgroup' => 'Workgroup',
    ];

    public function validate()
    {
        if (\is_array($this->workgroup)) {
            Model::validateArray($this->workgroup);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->workgroup) {
            if (\is_array($this->workgroup)) {
                $res['Workgroup'] = [];
                $n1 = 0;
                foreach ($this->workgroup as $item1) {
                    $res['Workgroup'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Workgroup'])) {
            if (!empty($map['Workgroup'])) {
                $model->workgroup = [];
                $n1 = 0;
                foreach ($map['Workgroup'] as $item1) {
                    $model->workgroup[$n1] = workgroup::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
