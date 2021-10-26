<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\SDK\CloudAPI\V20160714\Models\BatchUpdateApisVpcAccessRequest\api;
use AlibabaCloud\Tea\Model;

class BatchUpdateApisVpcAccessRequest extends Model
{
    /**
     * @var string
     */
    public $securityToken;

    /**
     * @var string
     */
    public $oldVpcId;

    /**
     * @var string
     */
    public $oldInstanceId;

    /**
     * @var int
     */
    public $oldPort;

    /**
     * @var string
     */
    public $vpcId;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $displayInstanceId;

    /**
     * @var int
     */
    public $port;

    /**
     * @var string
     */
    public $serviceAddress;

    /**
     * @var api[]
     */
    public $api;
    protected $_name = [
        'securityToken'     => 'SecurityToken',
        'oldVpcId'          => 'OldVpcId',
        'oldInstanceId'     => 'OldInstanceId',
        'oldPort'           => 'OldPort',
        'vpcId'             => 'VpcId',
        'instanceId'        => 'InstanceId',
        'displayInstanceId' => 'DisplayInstanceId',
        'port'              => 'Port',
        'serviceAddress'    => 'ServiceAddress',
        'api'               => 'Api',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
        }
        if (null !== $this->oldVpcId) {
            $res['OldVpcId'] = $this->oldVpcId;
        }
        if (null !== $this->oldInstanceId) {
            $res['OldInstanceId'] = $this->oldInstanceId;
        }
        if (null !== $this->oldPort) {
            $res['OldPort'] = $this->oldPort;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->displayInstanceId) {
            $res['DisplayInstanceId'] = $this->displayInstanceId;
        }
        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }
        if (null !== $this->serviceAddress) {
            $res['ServiceAddress'] = $this->serviceAddress;
        }
        if (null !== $this->api) {
            $res['Api'] = [];
            if (null !== $this->api && \is_array($this->api)) {
                $n = 0;
                foreach ($this->api as $item) {
                    $res['Api'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return BatchUpdateApisVpcAccessRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }
        if (isset($map['OldVpcId'])) {
            $model->oldVpcId = $map['OldVpcId'];
        }
        if (isset($map['OldInstanceId'])) {
            $model->oldInstanceId = $map['OldInstanceId'];
        }
        if (isset($map['OldPort'])) {
            $model->oldPort = $map['OldPort'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['DisplayInstanceId'])) {
            $model->displayInstanceId = $map['DisplayInstanceId'];
        }
        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }
        if (isset($map['ServiceAddress'])) {
            $model->serviceAddress = $map['ServiceAddress'];
        }
        if (isset($map['Api'])) {
            if (!empty($map['Api'])) {
                $model->api = [];
                $n          = 0;
                foreach ($map['Api'] as $item) {
                    $model->api[$n++] = null !== $item ? api::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
