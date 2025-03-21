<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models\GetKvAccountResponseBody;

use AlibabaCloud\Tea\Model;

class namespaceList extends Model
{
    /**
     * @description The available capacity of the namespace. Unit: bytes.
     *
     * @example 1073741824
     *
     * @var int
     */
    public $capacity;

    /**
     * @description The available capacity of the namespace.
     *
     * @example 1 GB
     *
     * @var string
     */
    public $capacityString;

    /**
     * @description The used capacity of the namespace. Unit: bytes.
     *
     * @example 100048576
     *
     * @var int
     */
    public $capacityUsed;

    /**
     * @description The used capacity of the namespace.
     *
     * @example 100 MB
     *
     * @var string
     */
    public $capacityUsedString;

    /**
     * @description The description of the namespace.
     *
     * @example the first namespace
     *
     * @var string
     */
    public $description;

    /**
     * @description The name of the namespace.
     *
     * @example test_namespace
     *
     * @var string
     */
    public $namespace;

    /**
     * @description The ID of the namespace.
     *
     * @example 643355322374688768
     *
     * @var string
     */
    public $namespaceId;

    /**
     * @description The status of the namespace. Valid values:
     *
     *   **online**: normal.
     *   **delete**: pending deletion.
     *   **deleting**: being deleted.
     *   **deleted**: deleted.
     *
     * @example online
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'capacity' => 'Capacity',
        'capacityString' => 'CapacityString',
        'capacityUsed' => 'CapacityUsed',
        'capacityUsedString' => 'CapacityUsedString',
        'description' => 'Description',
        'namespace' => 'Namespace',
        'namespaceId' => 'NamespaceId',
        'status' => 'Status',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->capacity) {
            $res['Capacity'] = $this->capacity;
        }
        if (null !== $this->capacityString) {
            $res['CapacityString'] = $this->capacityString;
        }
        if (null !== $this->capacityUsed) {
            $res['CapacityUsed'] = $this->capacityUsed;
        }
        if (null !== $this->capacityUsedString) {
            $res['CapacityUsedString'] = $this->capacityUsedString;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
        }
        if (null !== $this->namespaceId) {
            $res['NamespaceId'] = $this->namespaceId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return namespaceList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Capacity'])) {
            $model->capacity = $map['Capacity'];
        }
        if (isset($map['CapacityString'])) {
            $model->capacityString = $map['CapacityString'];
        }
        if (isset($map['CapacityUsed'])) {
            $model->capacityUsed = $map['CapacityUsed'];
        }
        if (isset($map['CapacityUsedString'])) {
            $model->capacityUsedString = $map['CapacityUsedString'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }
        if (isset($map['NamespaceId'])) {
            $model->namespaceId = $map['NamespaceId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
