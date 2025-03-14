<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DescribeClusterHostSecuritySummaryRequest extends Model
{
    /**
     * @description The ID of the container cluster.
     *
     * @example c3aaf6c8085f84791882eef200cd2****
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description The key of the condition that is used to query containers. Valid values:
     *
     *   **instanceId**: the instance ID
     *   **appName**: the name of the application
     *   **clusterId**: the ID of the cluster
     *   **regionId**: the region ID
     *   **nodeName**: the name of the node
     *   **namespace**: the namespace
     *   **clusterName**: the name of the cluster
     *   **image**: the name of the image
     *   **imageRepoName**: the name of the image repository
     *   **imageRepoNamespace**: the namespace to which the image repository belongs
     *   **imageRepoTag**: the tag that is added to the image repository
     *   **imageDigest**: the digest of the image
     *
     * @example clusterId
     *
     * @var string
     */
    public $containerFieldName;

    /**
     * @description The value of the condition that is used to query containers.
     *
     * @example c1fdb5fd8d42e425d88fd73eec7be****
     *
     * @var string
     */
    public $containerFieldValue;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @description The source IP address.
     *
     * @example 222.71.XXX.XXX
     *
     * @var string
     */
    public $sourceIp;

    /**
     * @description The type of the query. Valid values:
     *
     *   **containerId**
     *   **uuid**
     *
     * @example uuid
     *
     * @var string
     */
    public $targetType;
    protected $_name = [
        'clusterId' => 'ClusterId',
        'containerFieldName' => 'ContainerFieldName',
        'containerFieldValue' => 'ContainerFieldValue',
        'resourceOwnerId' => 'ResourceOwnerId',
        'sourceIp' => 'SourceIp',
        'targetType' => 'TargetType',
    ];

    public function validate() {}

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
        if (null !== $this->targetType) {
            $res['TargetType'] = $this->targetType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeClusterHostSecuritySummaryRequest
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
        if (isset($map['TargetType'])) {
            $model->targetType = $map['TargetType'];
        }

        return $model;
    }
}
