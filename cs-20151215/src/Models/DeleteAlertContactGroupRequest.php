<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\Dara\Model;

class DeleteAlertContactGroupRequest extends Model
{
    /**
     * @var int[]
     */
    public $contactGroupIds;
    protected $_name = [
        'contactGroupIds' => 'contact_group_ids',
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
                $res['contact_group_ids'] = [];
                $n1 = 0;
                foreach ($this->contactGroupIds as $item1) {
                    $res['contact_group_ids'][$n1++] = $item1;
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
        if (isset($map['contact_group_ids'])) {
            if (!empty($map['contact_group_ids'])) {
                $model->contactGroupIds = [];
                $n1 = 0;
                foreach ($map['contact_group_ids'] as $item1) {
                    $model->contactGroupIds[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
