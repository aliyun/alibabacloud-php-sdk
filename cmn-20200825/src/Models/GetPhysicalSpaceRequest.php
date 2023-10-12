<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cmn\V20200825\Models;

use AlibabaCloud\Tea\Model;

class GetPhysicalSpaceRequest extends Model
{
    /**
     * @example cmn-cn-xxxx
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example space-ez6zd3w68ma4fsd4
     *
     * @var string
     */
    public $physicalSpaceId;
    protected $_name = [
        'instanceId'      => 'InstanceId',
        'physicalSpaceId' => 'PhysicalSpaceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->physicalSpaceId) {
            $res['PhysicalSpaceId'] = $this->physicalSpaceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetPhysicalSpaceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['PhysicalSpaceId'])) {
            $model->physicalSpaceId = $map['PhysicalSpaceId'];
        }

        return $model;
    }
}
