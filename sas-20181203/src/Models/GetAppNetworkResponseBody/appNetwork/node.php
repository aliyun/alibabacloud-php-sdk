<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\GetAppNetworkResponseBody\appNetwork;

use AlibabaCloud\Tea\Model;

class node extends Model
{
    /**
     * @description The list of the container IDs.
     *
     * @var string[]
     */
    public $containerIds;

    /**
     * @description The ID of the node.
     *
     * @example 1274
     *
     * @var string
     */
    public $id;

    /**
     * @description The name of the node.
     *
     * @example console
     *
     * @var string
     */
    public $name;

    /**
     * @description The ID of the namespace.
     *
     * @example 1
     *
     * @var string
     */
    public $namespaceId;

    /**
     * @description The risk level. Valid values:
     *
     *   **3**: high
     *   **2**: medium
     *   **1**: low
     *   **0**: warning
     *   **-1**: unknown
     *
     * @example 0
     *
     * @var string
     */
    public $riskLevel;

    /**
     * @description The type of the node. Valid values:
     *
     *   **app**: an application
     *   **internet**: a network node in another cluster
     *
     * @example app
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'containerIds' => 'ContainerIds',
        'id'           => 'Id',
        'name'         => 'Name',
        'namespaceId'  => 'NamespaceId',
        'riskLevel'    => 'RiskLevel',
        'type'         => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->containerIds) {
            $res['ContainerIds'] = $this->containerIds;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->namespaceId) {
            $res['NamespaceId'] = $this->namespaceId;
        }
        if (null !== $this->riskLevel) {
            $res['RiskLevel'] = $this->riskLevel;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return node
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ContainerIds'])) {
            if (!empty($map['ContainerIds'])) {
                $model->containerIds = $map['ContainerIds'];
            }
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['NamespaceId'])) {
            $model->namespaceId = $map['NamespaceId'];
        }
        if (isset($map['RiskLevel'])) {
            $model->riskLevel = $map['RiskLevel'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
