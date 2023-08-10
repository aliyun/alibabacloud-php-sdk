<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models\ListOrganizationalUnitParentsResponseBody;

use AlibabaCloud\Tea\Model;

class parents extends Model
{
    /**
     * @description 组织ID
     *
     * @example ou_4lag76zc2km5ssg5vsmm2lznvu
     *
     * @var string
     */
    public $organizationalUnitId;

    /**
     * @description 父组织ID
     *
     * @example ou_x3beoyepv2ls5iwuge3xhjkwbm
     *
     * @var string
     */
    public $parentId;
    protected $_name = [
        'organizationalUnitId' => 'OrganizationalUnitId',
        'parentId'             => 'ParentId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->organizationalUnitId) {
            $res['OrganizationalUnitId'] = $this->organizationalUnitId;
        }
        if (null !== $this->parentId) {
            $res['ParentId'] = $this->parentId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return parents
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OrganizationalUnitId'])) {
            $model->organizationalUnitId = $map['OrganizationalUnitId'];
        }
        if (isset($map['ParentId'])) {
            $model->parentId = $map['ParentId'];
        }

        return $model;
    }
}
