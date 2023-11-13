<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models;

use AlibabaCloud\Tea\Model;

class DeleteAutoCcBlacklistRequest extends Model
{
    /**
     * @description The IP addresses that you want to manage. This parameter is a JSON string. The string contains the following fields:
     *
     *   **src**: the IP address. This field is required and must be of the STRING type.
     *
     * @example [{"src":"198.51.XX.XX"},{"src":"198.52.XX.XX"}]
     *
     * @var string
     */
    public $blacklist;

    /**
     * @description The ID of the instance.
     *
     * > You can call the [DescribeInstanceIds](~~157459~~) operation to query the IDs of all instances.
     * @example ddoscoo-cn-mp91j1ao****
     *
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
