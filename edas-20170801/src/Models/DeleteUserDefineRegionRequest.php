<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models;

use AlibabaCloud\Tea\Model;

class DeleteUserDefineRegionRequest extends Model
{
    /**
     * @description The unique ID of the custom namespace. You can call the ListUserDefineRegion operation to query the ID. For more information, see [ListUserDefineRegion](~~149377~~).
     *
     * @example 2564
     *
     * @var int
     */
    public $id;

    /**
     * @description The tag of the custom namespace.
     *
     * @example regiontag
     *
     * @var string
     */
    public $regionTag;
    protected $_name = [
        'id'        => 'Id',
        'regionTag' => 'RegionTag',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->regionTag) {
            $res['RegionTag'] = $this->regionTag;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteUserDefineRegionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['RegionTag'])) {
            $model->regionTag = $map['RegionTag'];
        }

        return $model;
    }
}
