<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\CheckResourcePermissionResponseBody;

use AlibabaCloud\Tea\Model;

class resourcePermissionList extends Model
{
    /**
     * @example true
     *
     * @var bool
     */
    public $hasPermission;

    /**
     * @example hadoop.300000806.data_distill.behavior_gameinfor_01
     *
     * @var string
     */
    public $resourceId;
    protected $_name = [
        'hasPermission' => 'HasPermission',
        'resourceId' => 'ResourceId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->hasPermission) {
            $res['HasPermission'] = $this->hasPermission;
        }
        if (null !== $this->resourceId) {
            $res['ResourceId'] = $this->resourceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return resourcePermissionList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['HasPermission'])) {
            $model->hasPermission = $map['HasPermission'];
        }
        if (isset($map['ResourceId'])) {
            $model->resourceId = $map['ResourceId'];
        }

        return $model;
    }
}
