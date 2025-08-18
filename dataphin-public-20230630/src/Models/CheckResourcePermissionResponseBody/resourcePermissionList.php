<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\CheckResourcePermissionResponseBody;

use AlibabaCloud\Dara\Model;

class resourcePermissionList extends Model
{
    /**
     * @var bool
     */
    public $hasPermission;

    /**
     * @var string
     */
    public $resourceId;
    protected $_name = [
        'hasPermission' => 'HasPermission',
        'resourceId' => 'ResourceId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
