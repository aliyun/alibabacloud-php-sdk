<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hbr\V20170908\Models\DescribeContainerClusterResponseBody;

use AlibabaCloud\Tea\Model;

class clusters extends Model
{
    /**
     * @description The status of the client. Valid values:
     *
     *   **MISS**: The client is disconnected.
     *   **UNKNOWN**: The client is in an unknown state.
     *   **READY**: The client is ready.
     *
     * @example READY
     *
     * @var string
     */
    public $agentStatus;

    /**
     * @description The ID of the cluster.
     *
     * @example cl-0006gwppd0jtttpmb0ri
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description The type of the cluster. Valid value: ACK, which indicates ACK clusters.
     *
     * @example ACK
     *
     * @var string
     */
    public $clusterType;

    /**
     * @description The description.
     *
     * @example description ack pv backup
     *
     * @var string
     */
    public $description;

    /**
     * @description The identifier of the cluster.
     *
     * @example c5bbd0931a30947f4ab85efd19380a72d
     *
     * @var string
     */
    public $identifier;

    /**
     * @description The name of the instance.
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
     *   **VPC**: virtual private cloud (VPC)
     *
     * @example VPC
     *
     * @var string
     */
    public $networkType;

    /**
     * @description The token that is used to register the Hybrid Backup Recovery (HBR) client in the cluster.
     *
     * @example eyJhY2Nvd******A/VnZpgXQC5A==
     *
     * @var string
     */
    public $token;
    protected $_name = [
        'agentStatus' => 'AgentStatus',
        'clusterId'   => 'ClusterId',
        'clusterType' => 'ClusterType',
        'description' => 'Description',
        'identifier'  => 'Identifier',
        'name'        => 'Name',
        'networkType' => 'NetworkType',
        'token'       => 'Token',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->agentStatus) {
            $res['AgentStatus'] = $this->agentStatus;
        }
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
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
        if (null !== $this->token) {
            $res['Token'] = $this->token;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return clusters
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AgentStatus'])) {
            $model->agentStatus = $map['AgentStatus'];
        }
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
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
        if (isset($map['Token'])) {
            $model->token = $map['Token'];
        }

        return $model;
    }
}
