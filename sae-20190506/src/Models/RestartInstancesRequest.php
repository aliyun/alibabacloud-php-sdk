<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models;

use AlibabaCloud\Tea\Model;

class RestartInstancesRequest extends Model
{
    /**
     * @description The application ID.
     *
     * This parameter is required.
     * @example 1daa7236-3844-4f36-b39a-605b0cc0****
     *
     * @var string
     */
    public $appId;

    /**
     * @description The ID of the instance to be restarted. Separate multiple instance IDs with commas (,).
     *
     * This parameter is required.
     * @example mysae-1daa7236-3844-4f36-b39a-605b0cc0caa6-*****
     *
     * @var string
     */
    public $instanceIds;
    protected $_name = [
        'appId'       => 'AppId',
        'instanceIds' => 'InstanceIds',
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
        if (null !== $this->instanceIds) {
            $res['InstanceIds'] = $this->instanceIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RestartInstancesRequest
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
