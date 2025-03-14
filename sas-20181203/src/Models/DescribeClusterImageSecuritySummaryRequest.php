<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DescribeClusterImageSecuritySummaryRequest extends Model
{
    /**
     * @description The ID of the cluster.
     *
     * @example c3aaf6c8085f84791882eef200cd2****
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description The key of the condition that is used to query containers. Valid values:
     *
     *   **instanceId**: the instance ID of the container
     *   **clusterId**: the ID of the cluster
     *   **regionId**: the region ID of the container
     *   **clusterName**: the name of the cluster
     *   **image**: the name of the image
     *   **imageRepoName**: the name of the image repository
     *   **imageRepoNamespace**: the namespace to which the image repository belongs
     *   **imageRepoTag**: the tag that is added to the image repository
     *   **imageDigest**: the digest of the image
     *   **clusterType**: the type of the cluster
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
     * @example clusterId
     *
     * @var string
     */
    public $containerFieldName;

    /**
     * @description The value of the condition that is used to query containers.
     *
     * @example c2ac28b2d0c734df29a21d29f18ac****
     *
     * @var string
     */
    public $containerFieldValue;

    /**
     * @description The digest of the image.
     *
     * @example 402902de6480a020b9f29e7105e77b8a218bc1cccbc3935d3b38c8ea9ba2****
     *
     * @var string
     */
    public $imageDigest;

    /**
     * @description The name of the image repository.
     *
     * @example repo
     *
     * @var string
     */
    public $imageRepoName;

    /**
     * @description The namespace of the image repository.
     *
     * @example namespace
     *
     * @var string
     */
    public $imageRepoNamespace;

    /**
     * @description The tag of the image.
     *
     * @example 3.54.0.1
     *
     * @var string
     */
    public $imageTag;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @description The source IP address.
     *
     * @example 60.190.XXX.XXX
     *
     * @var string
     */
    public $sourceIp;
    protected $_name = [
        'clusterId' => 'ClusterId',
        'containerFieldName' => 'ContainerFieldName',
        'containerFieldValue' => 'ContainerFieldValue',
        'imageDigest' => 'ImageDigest',
        'imageRepoName' => 'ImageRepoName',
        'imageRepoNamespace' => 'ImageRepoNamespace',
        'imageTag' => 'ImageTag',
        'resourceOwnerId' => 'ResourceOwnerId',
        'sourceIp' => 'SourceIp',
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
        if (null !== $this->imageDigest) {
            $res['ImageDigest'] = $this->imageDigest;
        }
        if (null !== $this->imageRepoName) {
            $res['ImageRepoName'] = $this->imageRepoName;
        }
        if (null !== $this->imageRepoNamespace) {
            $res['ImageRepoNamespace'] = $this->imageRepoNamespace;
        }
        if (null !== $this->imageTag) {
            $res['ImageTag'] = $this->imageTag;
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
     * @return DescribeClusterImageSecuritySummaryRequest
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
        if (isset($map['ImageDigest'])) {
            $model->imageDigest = $map['ImageDigest'];
        }
        if (isset($map['ImageRepoName'])) {
            $model->imageRepoName = $map['ImageRepoName'];
        }
        if (isset($map['ImageRepoNamespace'])) {
            $model->imageRepoNamespace = $map['ImageRepoNamespace'];
        }
        if (isset($map['ImageTag'])) {
            $model->imageTag = $map['ImageTag'];
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
