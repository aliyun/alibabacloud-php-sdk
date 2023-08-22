<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cr\V20181201\Models;

use AlibabaCloud\Tea\Model;

class GetRepoBuildRecordRequest extends Model
{
    /**
     * @description The ID of the image building record.
     *
     * @example a78ec6fb-16ea-4649-93b7-f52afba7d****
     *
     * @var string
     */
    public $buildRecordId;

    /**
     * @description The ID of the instance.
     *
     * @example cri-kmsiwlxxdcva****
     *
     * @var string
     */
    public $instanceId;
    protected $_name = [
        'buildRecordId' => 'BuildRecordId',
        'instanceId'    => 'InstanceId',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return GetRepoBuildRecordRequest
     */
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
