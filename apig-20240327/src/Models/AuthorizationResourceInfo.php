<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models;

use AlibabaCloud\Tea\Model;

class AuthorizationResourceInfo extends Model
{
    /**
     * @var string
     */
    public $environmentId;

    /**
     * @var string
     */
    public $parentResourceId;

    /**
     * @var string
     */
    public $resourceId;
    protected $_name = [
        'environmentId' => 'environmentId',
        'parentResourceId' => 'parentResourceId',
        'resourceId' => 'resourceId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->environmentId) {
            $res['environmentId'] = $this->environmentId;
        }
        if (null !== $this->parentResourceId) {
            $res['parentResourceId'] = $this->parentResourceId;
        }
        if (null !== $this->resourceId) {
            $res['resourceId'] = $this->resourceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AuthorizationResourceInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['environmentId'])) {
            $model->environmentId = $map['environmentId'];
        }
        if (isset($map['parentResourceId'])) {
            $model->parentResourceId = $map['parentResourceId'];
        }
        if (isset($map['resourceId'])) {
            $model->resourceId = $map['resourceId'];
        }

        return $model;
    }
}
