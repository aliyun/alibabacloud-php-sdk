<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\RemoveInstanceSDGResponseBody\data\result;

use AlibabaCloud\Tea\Model;

class failedItems extends Model
{
    /**
     * @example sdg not found
     *
     * @var string
     */
    public $errMessage;

    /**
     * @example aic-xxxxx-0
     *
     * @var string
     */
    public $instanceId;
    protected $_name = [
        'errMessage' => 'ErrMessage',
        'instanceId' => 'InstanceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->errMessage) {
            $res['ErrMessage'] = $this->errMessage;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return failedItems
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ErrMessage'])) {
            $model->errMessage = $map['ErrMessage'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        return $model;
    }
}
