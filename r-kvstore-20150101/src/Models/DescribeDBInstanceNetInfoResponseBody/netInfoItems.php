<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeDBInstanceNetInfoResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeDBInstanceNetInfoResponseBody\netInfoItems\instanceNetInfo;

class netInfoItems extends Model
{
    /**
     * @var instanceNetInfo[]
     */
    public $instanceNetInfo;
    protected $_name = [
        'instanceNetInfo' => 'InstanceNetInfo',
    ];

    public function validate()
    {
        if (\is_array($this->instanceNetInfo)) {
            Model::validateArray($this->instanceNetInfo);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->instanceNetInfo) {
            if (\is_array($this->instanceNetInfo)) {
                $res['InstanceNetInfo'] = [];
                $n1 = 0;
                foreach ($this->instanceNetInfo as $item1) {
                    $res['InstanceNetInfo'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['InstanceNetInfo'])) {
            if (!empty($map['InstanceNetInfo'])) {
                $model->instanceNetInfo = [];
                $n1 = 0;
                foreach ($map['InstanceNetInfo'] as $item1) {
                    $model->instanceNetInfo[$n1++] = instanceNetInfo::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
