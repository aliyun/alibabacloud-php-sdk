<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\GetAegisContainerPluginRuleCriteriaResponseBody;

use AlibabaCloud\Tea\Model;

class criteriaList extends Model
{
    /**
     * @description The name of the search condition. Valid values:
     *
     *   **instanceId**: the ID of the container instance.
     *   **clusterId**: the cluster ID.
     *   **regionId**: the ID of the region in which the container resides.
     *   **clusterName**: the name of the cluster.
     *   **clusterType**: the type of the cluster.
     *   **hostIp**: the public IP address.
     *   **pod**: the pod.
     *   **podIp**: the IP address of the pod.
     *   **containerId**: the container ID.
     *   **containerScope**: the type of the container.
     *
     * @example containerScope
     *
     * @var string
     */
    public $name;

    /**
     * @description The type of the search condition. Valid values:
     *
     *   **input**: The search condition needs to be specified.
     *   **select**: The search condition is an option that can be selected from the drop-down list.
     *
     * @example select
     *
     * @var string
     */
    public $type;

    /**
     * @description The values.
     *
     * @example NO,YES
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
