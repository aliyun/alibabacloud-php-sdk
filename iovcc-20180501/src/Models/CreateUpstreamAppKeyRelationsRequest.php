<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iovcc\V20180501\Models;

use AlibabaCloud\Tea\Model;

class CreateUpstreamAppKeyRelationsRequest extends Model
{
    /**
     * @var string
     */
    public $appKeys;

    /**
     * @var string
     */
    public $appServerId;

    /**
     * @var string
     */
    public $projectId;
    protected $_name = [
        'appKeys'     => 'AppKeys',
        'appServerId' => 'AppServerId',
        'projectId'   => 'ProjectId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appKeys) {
            $res['AppKeys'] = $this->appKeys;
        }
        if (null !== $this->appServerId) {
            $res['AppServerId'] = $this->appServerId;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateUpstreamAppKeyRelationsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppKeys'])) {
            $model->appKeys = $map['AppKeys'];
        }
        if (isset($map['AppServerId'])) {
            $model->appServerId = $map['AppServerId'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }

        return $model;
    }
}
