<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeContainerCriteriaResponseBody;

use AlibabaCloud\Tea\Model;

class criteriaList extends Model
{
    /**
     * @description The name of the filter condition.
     *
     *   **instanceId**: the ID of the container.
     *   **clusterId**: the ID of the cluster.
     *   **regionId**: the region of the container.
     *   **clusterName**: the name of the cluster.
     *   **image**: the name of the image.
     *   **imageRepoName**: the name of the image repository.
     *   **imageRepoNamespace**: the namespace of the image repository.
     *   **imageRepoTag**: the tag of the image repository.
     *   **imageDigest**: the image digest.
     *   **ClusterType**: the type of the cluster.
     *   **hostIp**: the public IP address.
     *   **pod**: the pod.
     *   **podIp**: the IP address of the pod.
     *   **containerId**: the ID of the container.
     *   **vulStatus**: indicates whether vulnerabilities exist in the container.
     *   **alarmStatus**: indicates whether alerts are generated for the container.
     *   **riskStatus**: indicates whether risks exist in the container.
     *   **riskLevel**: the risk level of the container.
     *   **containerScope**: the type of the container.
     *
     * @example clusterId
     *
     * @var string
     */
    public $name;

    /**
     * @description The type of the filter condition. Valid values:
     *
     *   **input**: The filter condition needs to be specified.
     *   **select**: The filter condition is an option that can be selected from the drop-down list.
     *
     * @example input
     *
     * @var string
     */
    public $type;

    /**
     * @description The value of the filter condition. This parameter is returned only when the value of **Type** is **select**.
     *
     * > If the value of **Type** is **input**, the value of this parameter is an empty string.
     * @example ManagedKubernetes,NotManagedKubernetes,PrivateKubernetes
     *
     * @var string
     */
    public $values;
    protected $_name = [
        'name'   => 'Name',
        'type'   => 'Type',
        'values' => 'Values',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->values) {
            $res['Values'] = $this->values;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return criteriaList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['Values'])) {
            $model->values = $map['Values'];
        }

        return $model;
    }
}
