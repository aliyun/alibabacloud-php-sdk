<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models\DescribeNamespaceResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description Indicates whether the SAE built-in registry is enabled.
     * Valid values:
     * true
     * false
     *
     * @example true
     *
     * @var bool
     */
    public $enableMicroRegistration;

    /**
     * @description The short ID of the namespace.
     *
     * @example test
     *
     * @var string
     */
    public $nameSpaceShortId;

    /**
     * @description The description of the namespace.
     *
     * @example desc
     *
     * @var string
     */
    public $namespaceDescription;

    /**
     * @description The ID of the namespace. The information about the default namespace cannot be queried or modified. The default namespace cannot be deleted.
     *
     * @example cn-beijing:test
     *
     * @var string
     */
    public $namespaceId;

    /**
     * @description The name of the namespace.
     *
     * @example name
     *
     * @var string
     */
    public $namespaceName;

    /**
     * @description The region ID.
     *
     * @example cn-beijing
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'enableMicroRegistration' => 'EnableMicroRegistration',
        'nameSpaceShortId'        => 'NameSpaceShortId',
        'namespaceDescription'    => 'NamespaceDescription',
        'namespaceId'             => 'NamespaceId',
        'namespaceName'           => 'NamespaceName',
        'regionId'                => 'RegionId',
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
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
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
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
