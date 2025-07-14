<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models;

use AlibabaCloud\Tea\Model;

class DeleteInstancesRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example 017f39b8-dfa4-4e16-a84b-1dcee4b1****
     *
     * @var string
     */
    public $appId;

    /**
     * @description This parameter is required.
     *
     * @example demo-aaed579c-1f8a-431e-8705-97d18e91c7b4******
     *
     * @var string
     */
    public $instanceIds;
    protected $_name = [
        'appId' => 'AppId',
        'instanceIds' => 'InstanceIds',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->instanceIds) {
            $res['InstanceIds'] = $this->instanceIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteInstancesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['InstanceIds'])) {
            $model->instanceIds = $map['InstanceIds'];
        }

        return $model;
    }
}
