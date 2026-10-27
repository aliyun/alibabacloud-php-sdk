<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models;

use AlibabaCloud\Dara\Model;

class DeleteContactGroupsRequest extends Model
{
    /**
     * @var string[]
     */
    public $contactGroupIds;
    protected $_name = [
        'contactGroupIds' => 'contactGroupIds',
    ];

    public function validate()
    {
        if (\is_array($this->contactGroupIds)) {
            Model::validateArray($this->contactGroupIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->contactGroupIds) {
            if (\is_array($this->contactGroupIds)) {
                $res['contactGroupIds'] = [];
                $n1 = 0;
                foreach ($this->contactGroupIds as $item1) {
                    $res['contactGroupIds'][$n1] = $item1;
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
        if (isset($map['contactGroupIds'])) {
            if (!empty($map['contactGroupIds'])) {
                $model->contactGroupIds = [];
                $n1 = 0;
                foreach ($map['contactGroupIds'] as $item1) {
                    $model->contactGroupIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
