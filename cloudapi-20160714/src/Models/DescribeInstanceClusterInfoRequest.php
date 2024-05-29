<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\Tea\Model;

class DescribeInstanceClusterInfoRequest extends Model
{
    /**
     * @example testvpc
     *
     * @var string
     */
    public $instanceClusterName;

    /**
     * @var string
     */
    public $securityToken;
    protected $_name = [
        'instanceClusterName' => 'InstanceClusterName',
        'securityToken'       => 'SecurityToken',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceClusterName) {
            $res['InstanceClusterName'] = $this->instanceClusterName;
        }
        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeInstanceClusterInfoRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceClusterName'])) {
            $model->instanceClusterName = $map['InstanceClusterName'];
        }
        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }

        return $model;
    }
}
