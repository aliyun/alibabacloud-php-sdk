<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cr\V20181201\Models;

use AlibabaCloud\Dara\Model;

class GetRepoBuildRecordRequest extends Model
{
    /**
     * @var string
     */
    public $buildRecordId;

    /**
     * @var string
     */
    public $instanceId;
    protected $_name = [
        'buildRecordId' => 'BuildRecordId',
        'instanceId' => 'InstanceId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->buildRecordId) {
            $res['BuildRecordId'] = $this->buildRecordId;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
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
        if (isset($map['BuildRecordId'])) {
            $model->buildRecordId = $map['BuildRecordId'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        return $model;
    }
}
