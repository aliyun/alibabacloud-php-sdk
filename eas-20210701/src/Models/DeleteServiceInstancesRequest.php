<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eas\V20210701\Models;

use AlibabaCloud\Tea\Model;

class DeleteServiceInstancesRequest extends Model
{
    /**
     * @var string
     */
    public $instanceList;
    protected $_name = [
        'instanceList' => 'InstanceList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceList) {
            $res['InstanceList'] = $this->instanceList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteServiceInstancesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceList'])) {
            $model->instanceList = $map['InstanceList'];
        }

        return $model;
    }
}
