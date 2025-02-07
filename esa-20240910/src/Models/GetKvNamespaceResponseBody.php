<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Dara\Model;

class GetKvNamespaceResponseBody extends Model
{
    /**
     * @var int
     */
    public $capacity;
    /**
     * @var string
     */
    public $capacityString;
    /**
     * @var int
     */
    public $capacityUsed;
    /**
     * @var string
     */
    public $capacityUsedString;
    /**
     * @var string
     */
    public $description;
    /**
     * @var string
     */
    public $namespace;
    /**
     * @var string
     */
    public $namespaceId;
    /**
     * @var string
     */
    public $requestId;
    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'capacity'           => 'Capacity',
        'capacityString'     => 'CapacityString',
        'capacityUsed'       => 'CapacityUsed',
        'capacityUsedString' => 'CapacityUsedString',
        'description'        => 'Description',
        'namespace'          => 'Namespace',
        'namespaceId'        => 'NamespaceId',
        'requestId'          => 'RequestId',
        'status'             => 'Status',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
