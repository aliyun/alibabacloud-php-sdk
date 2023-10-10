<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models;

use AlibabaCloud\Tea\Model;

class DeleteDeployGroupRequest extends Model
{
    /**
     * @description The ID of the application.
     *
     * @example 3616cdca-4f92-4413-b31*************
     *
     * @var string
     */
    public $appId;

    /**
     * @description The name of the instance group.
     *
     * @example test
     *
     * @var string
     */
    public $groupName;
    protected $_name = [
        'appId'     => 'AppId',
        'groupName' => 'GroupName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteDeployGroupRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }

        return $model;
    }
}
