<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsuser\V20210308\Models\DescribeUsersResponseBody\users;

use AlibabaCloud\Dara\Model;

class extras extends Model
{
    /**
     * @var mixed[]
     */
    public $assignedResourceCount;
    protected $_name = [
        'assignedResourceCount' => 'AssignedResourceCount',
    ];

    public function validate()
    {
        if (\is_array($this->assignedResourceCount)) {
            Model::validateArray($this->assignedResourceCount);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->assignedResourceCount) {
            if (\is_array($this->assignedResourceCount)) {
                $res['AssignedResourceCount'] = [];
                foreach ($this->assignedResourceCount as $key1 => $value1) {
                    $res['AssignedResourceCount'][$key1] = $value1;
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
        if (isset($map['AssignedResourceCount'])) {
            if (!empty($map['AssignedResourceCount'])) {
                $model->assignedResourceCount = [];
                foreach ($map['AssignedResourceCount'] as $key1 => $value1) {
                    $model->assignedResourceCount[$key1] = $value1;
                }
            }
        }

        return $model;
    }
}
