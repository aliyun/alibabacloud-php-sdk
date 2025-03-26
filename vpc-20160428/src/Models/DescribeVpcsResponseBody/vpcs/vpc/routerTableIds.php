<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeVpcsResponseBody\vpcs\vpc;

use AlibabaCloud\Dara\Model;

class routerTableIds extends Model
{
    /**
     * @var string[]
     */
    public $routerTableIds;
    protected $_name = [
        'routerTableIds' => 'RouterTableIds',
    ];

    public function validate()
    {
        if (\is_array($this->routerTableIds)) {
            Model::validateArray($this->routerTableIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->routerTableIds) {
            if (\is_array($this->routerTableIds)) {
                $res['RouterTableIds'] = [];
                $n1 = 0;
                foreach ($this->routerTableIds as $item1) {
                    $res['RouterTableIds'][$n1++] = $item1;
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
        if (isset($map['RouterTableIds'])) {
            if (!empty($map['RouterTableIds'])) {
                $model->routerTableIds = [];
                $n1 = 0;
                foreach ($map['RouterTableIds'] as $item1) {
                    $model->routerTableIds[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
