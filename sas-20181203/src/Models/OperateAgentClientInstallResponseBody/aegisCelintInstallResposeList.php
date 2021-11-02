<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\OperateAgentClientInstallResponseBody;

use AlibabaCloud\Tea\Model;

class aegisCelintInstallResposeList extends Model
{
    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var int
     */
    public $recordId;

    /**
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
