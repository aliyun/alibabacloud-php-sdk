<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models;

use AlibabaCloud\Tea\Model;

class DeleteAutoCcBlacklistRequest extends Model
{
    /**
     * @var string
     */
    public $blacklist;

    /**
     * @var string
     */
    public $instanceId;
    protected $_name = [
        'blacklist'  => 'Blacklist',
        'instanceId' => 'InstanceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->blacklist) {
            $res['Blacklist'] = $this->blacklist;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteAutoCcBlacklistRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Blacklist'])) {
            $model->blacklist = $map['Blacklist'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        return $model;
    }
}
