<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\CreateDeviceDistributeJobRequest;

use AlibabaCloud\Tea\Model;

class targetInstanceConfig extends Model
{
    /**
     * @var string
     */
    public $targetInstanceId;
    protected $_name = [
        'targetInstanceId' => 'TargetInstanceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->targetInstanceId) {
            $res['TargetInstanceId'] = $this->targetInstanceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return targetInstanceConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TargetInstanceId'])) {
            $model->targetInstanceId = $map['TargetInstanceId'];
        }

        return $model;
    }
}
