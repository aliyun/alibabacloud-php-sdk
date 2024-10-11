<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GrantResourcePermissionRequest\grantCommand;

use AlibabaCloud\Tea\Model;

class resourceList extends Model
{
    /**
     * @example hadoop.300000806.data_distill.behavior_gameinfor_01
     *
     * @var string
     */
    public $resourceId;
    protected $_name = [
        'resourceId' => 'ResourceId',
    ];

    public function validate()
    {
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
     * @return resourceList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ResourceId'])) {
            $model->resourceId = $map['ResourceId'];
        }

        return $model;
    }
}
