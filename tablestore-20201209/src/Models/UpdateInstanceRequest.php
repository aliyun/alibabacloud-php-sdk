<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Tablestore\V20201209\Models;

use AlibabaCloud\Tea\Model;

class UpdateInstanceRequest extends Model
{
    /**
     * @description The alias of the instance.
     *
     * @example instance-test
     *
     * @var string
     */
    public $aliasName;

    /**
     * @description The description of the instance.
     *
     * @example the test instance
     *
     * @var string
     */
    public $instanceDescription;

    /**
     * @description The name of the instance whose information you want to update.
     *
     * This parameter is required.
     *
     * @example instance-test
     *
     * @var string
     */
    public $instanceName;

    /**
     * @description (Deprecated) The network type of the instance. Valid values: NORMAL and VPC_CONSOLE. Default value: NORMAL.
     *
     * @example VPC
     *
     * @var string
     */
    public $network;

    /**
     * @description The new sources of the network from which access is allowed. By default, all sources of networks are allowed. Valid value:
     *
     * TRUST_PROXY: the console
     *
     * @var string[]
     */
    public $networkSourceACL;

    /**
     * @description The new types of the network from which access is allowed. By default, all types of networks are allowed. Valid values:
     *
     *   INTERNET: the Internet
     *   VPC: VPCs
     *   CLASSIC: the classic network
     *
     * @var string[]
     */
    public $networkTypeACL;
    protected $_name = [
        'aliasName' => 'AliasName',
        'instanceDescription' => 'InstanceDescription',
        'instanceName' => 'InstanceName',
        'network' => 'Network',
        'networkSourceACL' => 'NetworkSourceACL',
        'networkTypeACL' => 'NetworkTypeACL',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->aliasName) {
            $res['AliasName'] = $this->aliasName;
        }
        if (null !== $this->instanceDescription) {
            $res['InstanceDescription'] = $this->instanceDescription;
        }
        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }
        if (null !== $this->network) {
            $res['Network'] = $this->network;
        }
        if (null !== $this->networkSourceACL) {
            $res['NetworkSourceACL'] = $this->networkSourceACL;
        }
        if (null !== $this->networkTypeACL) {
            $res['NetworkTypeACL'] = $this->networkTypeACL;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateInstanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AliasName'])) {
            $model->aliasName = $map['AliasName'];
        }
        if (isset($map['InstanceDescription'])) {
            $model->instanceDescription = $map['InstanceDescription'];
        }
        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }
        if (isset($map['Network'])) {
            $model->network = $map['Network'];
        }
        if (isset($map['NetworkSourceACL'])) {
            if (!empty($map['NetworkSourceACL'])) {
                $model->networkSourceACL = $map['NetworkSourceACL'];
            }
        }
        if (isset($map['NetworkTypeACL'])) {
            if (!empty($map['NetworkTypeACL'])) {
                $model->networkTypeACL = $map['NetworkTypeACL'];
            }
        }

        return $model;
    }
}
