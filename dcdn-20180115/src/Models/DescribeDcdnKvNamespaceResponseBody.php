<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models;

use AlibabaCloud\Tea\Model;

class DescribeDcdnKvNamespaceResponseBody extends Model
{
    /**
     * @var int
     */
    public $capacity;

    /**
     * @description The available capacity of all namespaces in your account.
     *
     * @example 1 GB
     *
     * @var string
     */
    public $capacityString;

    /**
     * @var int
     */
    public $capacityUsed;

    /**
     * @description The used capacity of all namespaces in your account.
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
     * @description The system behavior when a key-value pair fails to be obtained at the edge. Valid values:
     *
     *   Normal (default): If a key-value pair fails to be obtained at the edge, DCDN attempts to query the key-value pair from the origin server to ensure global data consistency.
     *   Rapid: If a key-value pair fails to be obtained at the edge, an error message indicating that the key does not exist is returned. This feature enhances key-value query performance but may decrease the hit rate of queries. To enable this feature, submit a ticket.
     *
     * @example Normal
     *
     * @var string
     */
    public $mode;

    /**
     * @description The name of the namespace.
     *
     * @example ns1
     *
     * @var string
     */
    public $namespace;

    /**
     * @description The ID of the namespace.
     *
     * @example 12423131231****
     *
     * @var string
     */
    public $namespaceId;

    /**
     * @description The ID of the request.
     *
     * @example D61E4801-EAFF-4A63-AAE1-FBF6CE1CFD1C
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The status of the namespace. Valid values:
     *
     *   **online**: normal
     *   **delete**: pending delete
     *   **deleting**: being deleted
     *   **deleted**: deleted
     *
     * @example online
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'capacity'           => 'Capacity',
        'capacityString'     => 'CapacityString',
        'capacityUsed'       => 'CapacityUsed',
        'capacityUsedString' => 'CapacityUsedString',
        'description'        => 'Description',
        'mode'               => 'Mode',
        'namespace'          => 'Namespace',
        'namespaceId'        => 'NamespaceId',
        'requestId'          => 'RequestId',
        'status'             => 'Status',
    ];

    public function validate()
    {
    }

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
        if (null !== $this->mode) {
            $res['Mode'] = $this->mode;
        }
        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
        }
        if (null !== $this->namespaceId) {
            $res['NamespaceId'] = $this->namespaceId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDcdnKvNamespaceResponseBody
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
        if (isset($map['Mode'])) {
            $model->mode = $map['Mode'];
        }
        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }
        if (isset($map['NamespaceId'])) {
            $model->namespaceId = $map['NamespaceId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
