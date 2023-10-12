<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cmn\V20200825\Models;

use AlibabaCloud\Tea\Model;

class GetPhysicalSpaceTopoRequest extends Model
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

    /**
     * @example lldp
     *
     * @var string
     */
    public $topoType;
    protected $_name = [
        'instanceId'      => 'InstanceId',
        'physicalSpaceId' => 'PhysicalSpaceId',
        'topoType'        => 'TopoType',
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
        if (null !== $this->topoType) {
            $res['TopoType'] = $this->topoType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetPhysicalSpaceTopoRequest
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
        if (isset($map['TopoType'])) {
            $model->topoType = $map['TopoType'];
        }

        return $model;
    }
}
