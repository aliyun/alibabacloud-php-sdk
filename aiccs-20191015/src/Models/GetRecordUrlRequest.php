<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20191015\Models;

use AlibabaCloud\Tea\Model;

class GetRecordUrlRequest extends Model
{
    /**
     * @example 1001067****
     *
     * @var string
     */
    public $acid;

    /**
     * @example ccc_xp_pre-cn-****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example DUP_CALL
     *
     * @var string
     */
    public $recordType;
    protected $_name = [
        'acid'       => 'Acid',
        'instanceId' => 'InstanceId',
        'recordType' => 'RecordType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->acid) {
            $res['Acid'] = $this->acid;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->recordType) {
            $res['RecordType'] = $this->recordType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetRecordUrlRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Acid'])) {
            $model->acid = $map['Acid'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['RecordType'])) {
            $model->recordType = $map['RecordType'];
        }

        return $model;
    }
}
