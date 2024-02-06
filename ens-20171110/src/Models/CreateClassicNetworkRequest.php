<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Tea\Model;

class CreateClassicNetworkRequest extends Model
{
    /**
     * @description The CIDR block of the network. You can use one of the following CIDR blocks or their subnets as the CIDR block of the network:
     *
     *   10.0.0.0/8 (default)
     *   172.16.0.0/12
     *   192.168.0.0/16
     *
     * @example 10.0.0.0/16
     *
     * @var string
     */
    public $cidrBlock;

    /**
     * @description The description of the listener. The description is **1** to **80** characters in length.
     *
     * >  The value cannot start with `http://` or `https://`.
     * @example This is my vswitch.
     *
     * @var string
     */
    public $description;

    /**
     * @description The ID of the edge node.
     *
     * @example cn-chengdu-xxxx-4
     *
     * @var string
     */
    public $ensRegionId;

    /**
     * @description The name of the network. The name must meet the following requirements:
     *
     *   The name must be 2 to 128 characters in length.
     *   The name must start with a letter but cannot start with http:// or https://.
     *   The name can contain letters, digits, colons (:), underscores (\_), and hyphens (-).
     *
     * @example example
     *
     * @var string
     */
    public $networkName;
    protected $_name = [
        'cidrBlock'   => 'CidrBlock',
        'description' => 'Description',
        'ensRegionId' => 'EnsRegionId',
        'networkName' => 'NetworkName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cidrBlock) {
            $res['CidrBlock'] = $this->cidrBlock;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->ensRegionId) {
            $res['EnsRegionId'] = $this->ensRegionId;
        }
        if (null !== $this->networkName) {
            $res['NetworkName'] = $this->networkName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateClassicNetworkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CidrBlock'])) {
            $model->cidrBlock = $map['CidrBlock'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['EnsRegionId'])) {
            $model->ensRegionId = $map['EnsRegionId'];
        }
        if (isset($map['NetworkName'])) {
            $model->networkName = $map['NetworkName'];
        }

        return $model;
    }
}
