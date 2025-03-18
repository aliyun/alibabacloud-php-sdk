<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiamdeveloperapi\V20220225\Models;

use AlibabaCloud\Tea\Model;

class ListOrganizationalUnitParentIdsResponseBody extends Model
{
    /**
     * @description The IDs of the parent organizational units. The IDs of the organizational unit are ordered based on their levels from high to low. Only the IDs of the organizational units within the authorization scope are displayed.
     *
     * @example [ou_xxx001]
     *
     * @var string[]
     */
    public $parentIds;
    protected $_name = [
        'parentIds' => 'parentIds',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->parentIds) {
            $res['parentIds'] = $this->parentIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListOrganizationalUnitParentIdsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['parentIds'])) {
            if (!empty($map['parentIds'])) {
                $model->parentIds = $map['parentIds'];
            }
        }

        return $model;
    }
}
