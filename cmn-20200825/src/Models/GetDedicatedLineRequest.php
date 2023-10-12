<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cmn\V20200825\Models;

use AlibabaCloud\Tea\Model;

class GetDedicatedLineRequest extends Model
{
    /**
     * @example space_isp-6dk5xpoyoopr6obf
     *
     * @var string
     */
    public $dedicatedLineId;

    /**
     * @example cmn-cn-xxxxx
     *
     * @var string
     */
    public $instanceId;
    protected $_name = [
        'dedicatedLineId' => 'DedicatedLineId',
        'instanceId'      => 'InstanceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dedicatedLineId) {
            $res['DedicatedLineId'] = $this->dedicatedLineId;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetDedicatedLineRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DedicatedLineId'])) {
            $model->dedicatedLineId = $map['DedicatedLineId'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        return $model;
    }
}
