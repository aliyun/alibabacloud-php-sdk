<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnKvAccountResponseBody;

use AlibabaCloud\Tea\Model;

class namespaceList extends Model
{
    /**
     * @var string
     */
    public $capacityString;

    /**
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
        'capacityString'     => 'CapacityString',
        'capacityUsedString' => 'CapacityUsedString',
        'description'        => 'Description',
        'namespace'          => 'Namespace',
        'namespaceId'        => 'NamespaceId',
        'status'             => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->capacityString) {
            $res['CapacityString'] = $this->capacityString;
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
        if (isset($map['CapacityString'])) {
            $model->capacityString = $map['CapacityString'];
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
