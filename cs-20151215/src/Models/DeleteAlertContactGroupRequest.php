<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->contactGroupIds) {
            $res['contact_group_ids'] = $this->contactGroupIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteAlertContactGroupRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['contact_group_ids'])) {
            if (!empty($map['contact_group_ids'])) {
                $model->contactGroupIds = $map['contact_group_ids'];
            }
        }

        return $model;
    }
}
