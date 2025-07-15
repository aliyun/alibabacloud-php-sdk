<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models;

use AlibabaCloud\Tea\Model;

class ListCallSummariesRequest extends Model
{
    /**
     * @var string[]
     */
    public $contactIdList;

    /**
     * @description This parameter is required.
     *
     * @example ccc-test
     *
     * @var string
     */
    public $instanceId;
    protected $_name = [
        'contactIdList' => 'ContactIdList',
        'instanceId' => 'InstanceId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->contactIdList) {
            $res['ContactIdList'] = $this->contactIdList;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListCallSummariesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ContactIdList'])) {
            if (!empty($map['ContactIdList'])) {
                $model->contactIdList = $map['ContactIdList'];
            }
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        return $model;
    }
}
