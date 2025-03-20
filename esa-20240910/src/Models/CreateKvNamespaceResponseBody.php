<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Tea\Model;

class CreateKvNamespaceResponseBody extends Model
{
    /**
     * @description The description of the namespace.
     *
     * @example this is a test namespace.
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
     * @example 657717877171818496
     *
     * @var string
     */
    public $namespaceId;

    /**
     * @description The request ID.
     *
     * @example EEEBE525-F576-1196-8DAF-2D70CA3F4D2F
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The status of the namespace. Valid values:
     *
     *   **online**: working as expected.
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
        'description' => 'Description',
        'namespace' => 'Namespace',
        'namespaceId' => 'NamespaceId',
        'requestId' => 'RequestId',
        'status' => 'Status',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
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

    /**
     * @param array $map
     *
     * @return CreateKvNamespaceResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
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
