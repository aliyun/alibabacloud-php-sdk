<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alb\V20200616\Models;

use AlibabaCloud\Tea\Model;

class ListAclRelationsRequest extends Model
{
    /**
     * @description The ACL IDs.
     *
     * This parameter is required.
     * @var string[]
     */
    public $aclIds;
    protected $_name = [
        'aclIds' => 'AclIds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aclIds) {
            $res['AclIds'] = $this->aclIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListAclRelationsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AclIds'])) {
            if (!empty($map['AclIds'])) {
                $model->aclIds = $map['AclIds'];
            }
        }

        return $model;
    }
}
