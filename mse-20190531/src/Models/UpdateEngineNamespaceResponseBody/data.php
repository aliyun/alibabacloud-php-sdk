<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\UpdateEngineNamespaceResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $type;

    /**
     * @var string
     */
    public $namespaceShowName;

    /**
     * @var int
     */
    public $quota;

    /**
     * @var string
     */
    public $namespace;

    /**
     * @var string
     */
    public $namespaceDesc;

    /**
     * @var int
     */
    public $configCount;
    protected $_name = [
        'type'              => 'Type',
        'namespaceShowName' => 'NamespaceShowName',
        'quota'             => 'Quota',
        'namespace'         => 'Namespace',
        'namespaceDesc'     => 'NamespaceDesc',
        'configCount'       => 'ConfigCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->namespaceShowName) {
            $res['NamespaceShowName'] = $this->namespaceShowName;
        }
        if (null !== $this->quota) {
            $res['Quota'] = $this->quota;
        }
        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
        }
        if (null !== $this->namespaceDesc) {
            $res['NamespaceDesc'] = $this->namespaceDesc;
        }
        if (null !== $this->configCount) {
            $res['ConfigCount'] = $this->configCount;
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
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['NamespaceShowName'])) {
            $model->namespaceShowName = $map['NamespaceShowName'];
        }
        if (isset($map['Quota'])) {
            $model->quota = $map['Quota'];
        }
        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }
        if (isset($map['NamespaceDesc'])) {
            $model->namespaceDesc = $map['NamespaceDesc'];
        }
        if (isset($map['ConfigCount'])) {
            $model->configCount = $map['ConfigCount'];
        }

        return $model;
    }
}
