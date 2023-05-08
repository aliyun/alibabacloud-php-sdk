<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\OperateAgentClientInstallResponseBody;

use AlibabaCloud\Tea\Model;

class aegisCelintInstallResposeList extends Model
{
    /**
     * @description The ID of the server.
     *
     * @example i-uf6j8vq9l4r5ntht****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The ID of the installation task.
     *
     * @example 2856
     *
     * @var int
     */
    public $recordId;

    /**
     * @description The UUID of the server.
     *
     * @example 1587bedb-fdb4-48c4-9330-****
     *
     * @var string
     */
    public $uuid;
    protected $_name = [
        'instanceId' => 'InstanceId',
        'recordId'   => 'RecordId',
        'uuid'       => 'Uuid',
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
        if (null !== $this->recordId) {
            $res['RecordId'] = $this->recordId;
        }
        if (null !== $this->uuid) {
            $res['Uuid'] = $this->uuid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return aegisCelintInstallResposeList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['RecordId'])) {
            $model->recordId = $map['RecordId'];
        }
        if (isset($map['Uuid'])) {
            $model->uuid = $map['Uuid'];
        }

        return $model;
    }
}
