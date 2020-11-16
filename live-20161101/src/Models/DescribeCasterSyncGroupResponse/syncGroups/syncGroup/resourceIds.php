<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeCasterSyncGroupResponse\syncGroups\syncGroup;

use AlibabaCloud\Tea\Model;

class resourceIds extends Model
{
    /**
     * @description ResourceId
     *
     * @var string[]
     */
    public $resourceId;
    protected $_name = [
        'resourceId' => 'ResourceId',
    ];

    public function validate()
    {
        Model::validateRequired('resourceId', $this->resourceId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->resourceId) {
            $res['ResourceId'] = $this->resourceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return resourceIds
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ResourceId'])) {
            if (!empty($map['ResourceId'])) {
                $model->resourceId = $map['ResourceId'];
            }
        }

        return $model;
    }
}
