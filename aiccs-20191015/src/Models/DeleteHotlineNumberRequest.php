<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20191015\Models;

use AlibabaCloud\Tea\Model;

class DeleteHotlineNumberRequest extends Model
{
    /**
     * @description 实例id
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description 号码
     *
     * @var string
     */
    public $hotlineNumber;
    protected $_name = [
        'instanceId'    => 'InstanceId',
        'hotlineNumber' => 'HotlineNumber',
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
        if (null !== $this->hotlineNumber) {
            $res['HotlineNumber'] = $this->hotlineNumber;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteHotlineNumberRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['HotlineNumber'])) {
            $model->hotlineNumber = $map['HotlineNumber'];
        }

        return $model;
    }
}
