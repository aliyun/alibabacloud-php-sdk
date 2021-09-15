<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\OperateAgentClientInstallResponseBody;

use AlibabaCloud\Tea\Model;

class aegisCelintInstallResposeList extends Model
{
    /**
     * @var string
     */
    public $uuid;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var int
     */
    public $recordId;
    protected $_name = [
        'uuid'       => 'Uuid',
        'instanceId' => 'InstanceId',
        'recordId'   => 'RecordId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->uuid) {
            $res['Uuid'] = $this->uuid;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->recordId) {
            $res['RecordId'] = $this->recordId;
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
        if (isset($map['Uuid'])) {
            $model->uuid = $map['Uuid'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['RecordId'])) {
            $model->recordId = $map['RecordId'];
        }

        return $model;
    }
}
