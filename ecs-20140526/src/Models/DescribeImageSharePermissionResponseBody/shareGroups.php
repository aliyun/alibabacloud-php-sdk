<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeImageSharePermissionResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeImageSharePermissionResponseBody\shareGroups\shareGroup;

class shareGroups extends Model
{
    /**
     * @var shareGroup[]
     */
    public $shareGroup;
    protected $_name = [
        'shareGroup' => 'ShareGroup',
    ];

    public function validate()
    {
        if (\is_array($this->shareGroup)) {
            Model::validateArray($this->shareGroup);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->shareGroup) {
            if (\is_array($this->shareGroup)) {
                $res['ShareGroup'] = [];
                $n1 = 0;
                foreach ($this->shareGroup as $item1) {
                    $res['ShareGroup'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['ShareGroup'])) {
            if (!empty($map['ShareGroup'])) {
                $model->shareGroup = [];
                $n1 = 0;
                foreach ($map['ShareGroup'] as $item1) {
                    $model->shareGroup[$n1] = shareGroup::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
