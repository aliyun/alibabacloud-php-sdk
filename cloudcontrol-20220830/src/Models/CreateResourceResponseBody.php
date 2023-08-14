<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudcontrol\V20220830\Models;

use AlibabaCloud\Tea\Model;

class CreateResourceResponseBody extends Model
{
    /**
     * @example 473469C7-AA6F-4DC5-B3DB-A3DC0DE3****
     *
     * @var string
     */
    public $requestId;

    /**
     * @example cctest
     *
     * @var string
     */
    public $resourceId;

    /**
     * @example Instance/r-8vbf5abe31c9c4d4/Account/cctest
     *
     * @var string
     */
    public $resourcePath;

    /**
     * @example task-433aead756057fff8189a7ce5****
     *
     * @var string
     */
    public $taskId;
    protected $_name = [
        'requestId'    => 'requestId',
        'resourceId'   => 'resourceId',
        'resourcePath' => 'resourcePath',
        'taskId'       => 'taskId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }
        if (null !== $this->resourceId) {
            $res['resourceId'] = $this->resourceId;
        }
        if (null !== $this->resourcePath) {
            $res['resourcePath'] = $this->resourcePath;
        }
        if (null !== $this->taskId) {
            $res['taskId'] = $this->taskId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateResourceResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }
        if (isset($map['resourceId'])) {
            $model->resourceId = $map['resourceId'];
        }
        if (isset($map['resourcePath'])) {
            $model->resourcePath = $map['resourcePath'];
        }
        if (isset($map['taskId'])) {
            $model->taskId = $map['taskId'];
        }

        return $model;
    }
}
