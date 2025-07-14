<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models;

use AlibabaCloud\Tea\Model;

class CreateNamespaceRequest extends Model
{
    /**
     * @description Indicates whether to enable SAE built-in registry:
     *
     *   **true**
     *   **false**
     *
     * Default value: true. If you do not use the built-in registry, you can set this parameter to false to accelerate the creation of a namespace.
     *
     * @example true
     *
     * @var bool
     */
    public $enableMicroRegistration;

    /**
     * @description The trace ID that is used to query the details of the request.
     *
     * @example test
     *
     * @var string
     */
    public $nameSpaceShortId;

    /**
     * @description The message returned for the operation.
     *
     * @example desc
     *
     * @var string
     */
    public $namespaceDescription;

    /**
     * @description The data returned.
     *
     * @example cn-beijing:test
     *
     * @var string
     */
    public $namespaceId;

    /**
     * @description The ID of the request.
     *
     * This parameter is required.
     *
     * @example name
     *
     * @var string
     */
    public $namespaceName;
    protected $_name = [
        'enableMicroRegistration' => 'EnableMicroRegistration',
        'nameSpaceShortId' => 'NameSpaceShortId',
        'namespaceDescription' => 'NamespaceDescription',
        'namespaceId' => 'NamespaceId',
        'namespaceName' => 'NamespaceName',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->enableMicroRegistration) {
            $res['EnableMicroRegistration'] = $this->enableMicroRegistration;
        }
        if (null !== $this->nameSpaceShortId) {
            $res['NameSpaceShortId'] = $this->nameSpaceShortId;
        }
        if (null !== $this->namespaceDescription) {
            $res['NamespaceDescription'] = $this->namespaceDescription;
        }
        if (null !== $this->namespaceId) {
            $res['NamespaceId'] = $this->namespaceId;
        }
        if (null !== $this->namespaceName) {
            $res['NamespaceName'] = $this->namespaceName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateNamespaceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EnableMicroRegistration'])) {
            $model->enableMicroRegistration = $map['EnableMicroRegistration'];
        }
        if (isset($map['NameSpaceShortId'])) {
            $model->nameSpaceShortId = $map['NameSpaceShortId'];
        }
        if (isset($map['NamespaceDescription'])) {
            $model->namespaceDescription = $map['NamespaceDescription'];
        }
        if (isset($map['NamespaceId'])) {
            $model->namespaceId = $map['NamespaceId'];
        }
        if (isset($map['NamespaceName'])) {
            $model->namespaceName = $map['NamespaceName'];
        }

        return $model;
    }
}
