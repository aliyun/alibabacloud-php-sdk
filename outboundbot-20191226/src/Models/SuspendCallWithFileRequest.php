<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226\Models;

use AlibabaCloud\Tea\Model;

class SuspendCallWithFileRequest extends Model
{
    /**
     * @example xxxx
     *
     * @var string
     */
    public $filePath;

    /**
     * @example 0197261b-30e6-467b-83d6-7f72af868b03
     *
     * @var string
     */
    public $groupId;

    /**
     * @example a4274627-265f-4e14-b2d6-4ee7d4f8593e
     *
     * @var string
     */
    public $instanceId;
    protected $_name = [
        'filePath'   => 'FilePath',
        'groupId'    => 'GroupId',
        'instanceId' => 'InstanceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->filePath) {
            $res['FilePath'] = $this->filePath;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SuspendCallWithFileRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FilePath'])) {
            $model->filePath = $map['FilePath'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        return $model;
    }
}
