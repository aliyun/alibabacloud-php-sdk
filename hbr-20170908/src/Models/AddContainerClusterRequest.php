<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hbr\V20170908\Models;

use AlibabaCloud\Tea\Model;

class AddContainerClusterRequest extends Model
{
    /**
     * @description The type of the cluster. Only Container Service for Kubernetes (ACK) clusters are supported.
     *
     * @example ACK
     *
     * @var string
     */
    public $clusterType;

    /**
     * @description The description of the cluster.
     *
     * @example description ack pv backup
     *
     * @var string
     */
    public $description;

    /**
     * @description The ID of the cluster that you want to register.
     *
     * @example cca8f35f0e0d84540b49d994511c2c87a
     *
     * @var string
     */
    public $identifier;

    /**
     * @description The name of the cluster.
     *
     * @example ack_pv_backup_location
     *
     * @var string
     */
    public $name;

    /**
     * @description The network type of the cluster. Valid values:
     *
     *   **CLASSIC**: the classic network
     *   **VPC**: a virtual private cloud (VPC)
     *
     * @example VPC
     *
     * @var string
     */
    public $networkType;
    protected $_name = [
        'clusterType' => 'ClusterType',
        'description' => 'Description',
        'identifier'  => 'Identifier',
        'name'        => 'Name',
        'networkType' => 'NetworkType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterType) {
            $res['ClusterType'] = $this->clusterType;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->identifier) {
            $res['Identifier'] = $this->identifier;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->networkType) {
            $res['NetworkType'] = $this->networkType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddContainerClusterRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterType'])) {
            $model->clusterType = $map['ClusterType'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Identifier'])) {
            $model->identifier = $map['Identifier'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['NetworkType'])) {
            $model->networkType = $map['NetworkType'];
        }

        return $model;
    }
}
