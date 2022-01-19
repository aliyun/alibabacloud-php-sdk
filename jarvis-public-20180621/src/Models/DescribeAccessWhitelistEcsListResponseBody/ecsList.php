<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Jarvispublic\V20180621\Models\DescribeAccessWhitelistEcsListResponseBody;

use AlibabaCloud\Tea\Model;

class ecsList extends Model
{
    /**
     * @var string
     */
    public $IP;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $instanceName;
    protected $_name = [
        'IP'           => 'IP',
        'instanceId'   => 'InstanceId',
        'instanceName' => 'InstanceName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->IP) {
            $res['IP'] = $this->IP;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ecsList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IP'])) {
            $model->IP = $map['IP'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }

        return $model;
    }
}
