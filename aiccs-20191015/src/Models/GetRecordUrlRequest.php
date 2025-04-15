<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20191015\Models;

use AlibabaCloud\Dara\Model;

class GetRecordUrlRequest extends Model
{
    /**
     * @var string
     */
    public $acid;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $recordType;
    protected $_name = [
        'acid' => 'Acid',
        'instanceId' => 'InstanceId',
        'recordType' => 'RecordType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
