<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DescribeAssetsSecurityEventSummaryRequest extends Model
{
    /**
     * @description The ID of the cluster to which the container belongs.
     *
     * > You can call the [DescribeGroupedContainerInstances](~~DescribeGroupedContainerInstances~~) operation to query the IDs of clusters.
     * @example cc58f827d893f4d7fb3e34b5d4395****
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description The key of the condition that is used to query on containers. Valid values:
     *
     *   **instanceId**: the ID of the container instance
     *   **clusterId**: the ID of the cluster
     *   **regionId**: the region ID of the container
     *   **clusterName**: the name of the cluster
     *   **image**: the name of the image
     *   **imageRepoName**: the name of the image repository
     *   **imageRepoNamespace**: the namespace to which the image repository belongs
     *   **imageRepoTag**: the tag that is added to the image repository
     *   **imageDigest**: the digest of the image
     *   **ClusterType**: the type of the cluster
     *   **hostIp**: the public IP address
     *   **pod**: the pod
     *   **podIp**: the IP address of the pod
     *   **containerId**: the ID of the container
     *   **vulStatus**: whether vulnerabilities are detected on the container
     *   **alarmStatus**: whether alerts are generated for the container
     *   **riskStatus**: whether risks are detected on the container
     *   **riskLevel**: the risk level of the container
     *   **containerScope**: the type of the container
     *
     * @example clusterName
     *
     * @var string
     */
    public $containerFieldName;

    /**
     * @description The value of the condition that is used to query on containers.
     *
     * @example arms-prom-operator
     *
     * @var string
     */
    public $containerFieldValue;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @description The source IP address of the request.
     *
     * @example 113.108.XX.XX
     *
     * @var string
     */
    public $sourceIp;
    protected $_name = [
        'clusterId'           => 'ClusterId',
        'containerFieldName'  => 'ContainerFieldName',
        'containerFieldValue' => 'ContainerFieldValue',
        'resourceOwnerId'     => 'ResourceOwnerId',
        'sourceIp'            => 'SourceIp',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->containerFieldName) {
            $res['ContainerFieldName'] = $this->containerFieldName;
        }
        if (null !== $this->containerFieldValue) {
            $res['ContainerFieldValue'] = $this->containerFieldValue;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->sourceIp) {
            $res['SourceIp'] = $this->sourceIp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeAssetsSecurityEventSummaryRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['ContainerFieldName'])) {
            $model->containerFieldName = $map['ContainerFieldName'];
        }
        if (isset($map['ContainerFieldValue'])) {
            $model->containerFieldValue = $map['ContainerFieldValue'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['SourceIp'])) {
            $model->sourceIp = $map['SourceIp'];
        }

        return $model;
    }
}
