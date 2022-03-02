<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models;

use AlibabaCloud\Tea\Model;

class CreateCallTagsRequest extends Model
{
    /**
     * @var string
     */
    public $callTagNameList;

    /**
     * @var string
     */
    public $instanceId;
    protected $_name = [
        'callTagNameList' => 'CallTagNameList',
        'instanceId'      => 'InstanceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->callTagNameList) {
            $res['CallTagNameList'] = $this->callTagNameList;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateCallTagsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CallTagNameList'])) {
            $model->callTagNameList = $map['CallTagNameList'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        return $model;
    }
}
