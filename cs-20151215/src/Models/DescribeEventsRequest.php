<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\Tea\Model;

class DescribeEventsRequest extends Model
{
    /**
     * @description The cluster ID.
     *
     * @example cf62854ac2130470897be7a27ed1f****
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description The page number.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries per page.
     *
     * @example 50
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The event type. Valid values:
     *
     *   `cluster_create`: cluster creation.
     *   `cluster_scaleout`: cluster scale-out.
     *   `cluster_attach`: node addition.
     *   `cluster_delete`: cluster deletion.
     *   `cluster_upgrade`: cluster upgrades.
     *   `cluster_migrate`: cluster migration.
     *   `cluster_node_delete`: node removal.
     *   `cluster_node_drain`: node draining.
     *   `cluster_modify`: cluster modifications.
     *   `cluster_configuration_modify`: modifications of control plane configurations.
     *   `cluster_addon_install`: component installation.
     *   `cluster_addon_upgrade`: component updates.
     *   `cluster_addon_uninstall`: component uninstallation.
     *   `runtime_upgrade`: runtime updates.
     *   `nodepool_upgrade`: node pool upgrades.
     *   `nodepool_update`: node pool updates.
     *
     * @example nodepool_upgrade
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'clusterId'  => 'cluster_id',
        'pageNumber' => 'page_number',
        'pageSize'   => 'page_size',
        'type'       => 'type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['cluster_id'] = $this->clusterId;
        }
        if (null !== $this->pageNumber) {
            $res['page_number'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['page_size'] = $this->pageSize;
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeEventsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['cluster_id'])) {
            $model->clusterId = $map['cluster_id'];
        }
        if (isset($map['page_number'])) {
            $model->pageNumber = $map['page_number'];
        }
        if (isset($map['page_size'])) {
            $model->pageSize = $map['page_size'];
        }
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
