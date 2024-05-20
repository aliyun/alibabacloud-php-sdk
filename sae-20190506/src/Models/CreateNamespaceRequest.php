<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models;

use AlibabaCloud\Tea\Model;

class CreateNamespaceRequest extends Model
{
    /**
     * @var bool
     */
    public $enableMicroRegistration;

    /**
     * @description The returned message.
     *
     * @example test
     *
     * @var string
     */
    public $nameSpaceShortId;

    /**
     * @description The name of the namespace.
     *
     * @example desc
     *
     * @var string
     */
    public $namespaceDescription;

    /**
     * @description The HTTP status code. Valid values:
     *
     *   **2xx**: indicates that the request was successful.
     *   **3xx**: indicates that the request was redirected.
     *   **4xx**: indicates that the request was invalid.
     *   **5xx**: indicates that a server error occurred.
     *
     * @example cn-beijing:test
     *
     * @var string
     */
    public $namespaceId;

    /**
     * @description cn-beijing:test
     *
     * This parameter is required.
     * @example name
     *
     * @var string
     */
    public $namespaceName;
    protected $_name = [
        'enableMicroRegistration' => 'EnableMicroRegistration',
        'nameSpaceShortId'        => 'NameSpaceShortId',
        'namespaceDescription'    => 'NamespaceDescription',
        'namespaceId'             => 'NamespaceId',
        'namespaceName'           => 'NamespaceName',
    ];

    public function validate()
    {
    }

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
