<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models;

use AlibabaCloud\Tea\Model;

class ImportAdminsRequest extends Model
{
    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $ramIdList;
    protected $_name = [
        'instanceId' => 'InstanceId',
        'ramIdList'  => 'RamIdList',
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
        if (null !== $this->ramIdList) {
            $res['RamIdList'] = $this->ramIdList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ImportAdminsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['RamIdList'])) {
            $model->ramIdList = $map['RamIdList'];
        }

        return $model;
    }
}
