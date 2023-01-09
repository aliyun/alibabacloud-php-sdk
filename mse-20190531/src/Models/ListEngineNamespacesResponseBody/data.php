<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\ListEngineNamespacesResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The quota value.
     *
     * @example 1
     *
     * @var int
     */
    public $configCount;

    /**
     * @description The namespace.
     *
     * @example DEFAULT
     *
     * @var string
     */
    public $namespace;

    /**
     * @description The description of the namespace.
     *
     * @example mytest
     *
     * @var string
     */
    public $namespaceDesc;

    /**
     * @description The name of the namespace.
     *
     * @example public
     *
     * @var string
     */
    public $namespaceShowName;

    /**
     * @description The quota of configurations.
     *
     * @example 200
     *
     * @var int
     */
    public $quota;

    /**
     * @description The number of active services.
     *
     * @example 3
     *
     * @var string
     */
    public $serviceCount;

    /**
     * @description The type of the namespace. Valid values:
     *
     *   `0`: global configuration
     *   `1`: default namespace
     *   `2`: custom namespace
     *
     * @example 0
     *
     * @var int
     */
    public $type;
    protected $_name = [
        'configCount'       => 'ConfigCount',
        'namespace'         => 'Namespace',
        'namespaceDesc'     => 'NamespaceDesc',
        'namespaceShowName' => 'NamespaceShowName',
        'quota'             => 'Quota',
        'serviceCount'      => 'ServiceCount',
        'type'              => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->configCount) {
            $res['ConfigCount'] = $this->configCount;
        }
        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
        }
        if (null !== $this->namespaceDesc) {
            $res['NamespaceDesc'] = $this->namespaceDesc;
        }
        if (null !== $this->namespaceShowName) {
            $res['NamespaceShowName'] = $this->namespaceShowName;
        }
        if (null !== $this->quota) {
            $res['Quota'] = $this->quota;
        }
        if (null !== $this->serviceCount) {
            $res['ServiceCount'] = $this->serviceCount;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
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
        if (isset($map['ConfigCount'])) {
            $model->configCount = $map['ConfigCount'];
        }
        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }
        if (isset($map['NamespaceDesc'])) {
            $model->namespaceDesc = $map['NamespaceDesc'];
        }
        if (isset($map['NamespaceShowName'])) {
            $model->namespaceShowName = $map['NamespaceShowName'];
        }
        if (isset($map['Quota'])) {
            $model->quota = $map['Quota'];
        }
        if (isset($map['ServiceCount'])) {
            $model->serviceCount = $map['ServiceCount'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
