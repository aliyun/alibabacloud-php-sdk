<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iovcc\V20180501\Models;

use AlibabaCloud\Tea\Model;

class ListNamespacesRequest extends Model
{
    /**
     * @var string
     */
    public $projectId;

    /**
     * @var string
     */
    public $authType;
    protected $_name = [
        'projectId' => 'ProjectId',
        'authType'  => 'AuthType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->authType) {
            $res['AuthType'] = $this->authType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListNamespacesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['AuthType'])) {
            $model->authType = $map['AuthType'];
        }

        return $model;
    }
}
