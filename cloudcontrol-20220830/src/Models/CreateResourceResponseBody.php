<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudcontrol\V20220830\Models;

use AlibabaCloud\Dara\Model;

class CreateResourceResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $resourceId;

    /**
     * @var string
     */
    public $resourcePath;

    /**
     * @var string
     */
    public $taskId;
    protected $_name = [
        'requestId' => 'requestId',
        'resourceId' => 'resourceId',
        'resourcePath' => 'resourcePath',
        'taskId' => 'taskId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
