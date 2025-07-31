<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetInstanceDownStreamRequest;

use AlibabaCloud\Tea\Model;

class instanceGet extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example t_5929472_20210411_9577721
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description This parameter is required.
     *
     * @example DATA_PROCESS
     *
     * @var string
     */
    public $nodeType;
    protected $_name = [
        'instanceId' => 'InstanceId',
        'nodeType' => 'NodeType',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->nodeType) {
            $res['NodeType'] = $this->nodeType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return instanceGet
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['NodeType'])) {
            $model->nodeType = $map['NodeType'];
        }

        return $model;
    }
}
