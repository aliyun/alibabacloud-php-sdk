<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsaic\V20230930\Models\CreateCloudPhoneNodeResponseBody;

use AlibabaCloud\Tea\Model;

class nodeInfos extends Model
{
    /**
     * @description The IDs of the cloud phone instances.
     *
     * @var string[]
     */
    public $instanceIds;

    /**
     * @description The ID of the cloud phone matrix.
     *
     * @example cpn-e5kxgjyt8s1mb****
     *
     * @var string
     */
    public $nodeId;
    protected $_name = [
        'instanceIds' => 'InstanceIds',
        'nodeId' => 'NodeId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceIds) {
            $res['InstanceIds'] = $this->instanceIds;
        }
        if (null !== $this->nodeId) {
            $res['NodeId'] = $this->nodeId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return nodeInfos
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceIds'])) {
            if (!empty($map['InstanceIds'])) {
                $model->instanceIds = $map['InstanceIds'];
            }
        }
        if (isset($map['NodeId'])) {
            $model->nodeId = $map['NodeId'];
        }

        return $model;
    }
}
