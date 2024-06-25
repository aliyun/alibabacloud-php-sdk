<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Acm\V20200206\Models\DescribeNamespacesResponseBody;

use AlibabaCloud\Tea\Model;

class namespaces extends Model
{
    /**
     * @example 20
     *
     * @var int
     */
    public $configCount;

    /**
     * @example 3115d2bf-1f44-47bf-a855-****
     *
     * @var string
     */
    public $namespaceId;

    /**
     * @var string
     */
    public $namespaceName;

    /**
     * @example 200
     *
     * @var int
     */
    public $quota;

    /**
     * @example 1
     *
     * @var int
     */
    public $type;
    protected $_name = [
        'configCount'   => 'ConfigCount',
        'namespaceId'   => 'NamespaceId',
        'namespaceName' => 'NamespaceName',
        'quota'         => 'Quota',
        'type'          => 'Type',
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
        if (null !== $this->namespaceId) {
            $res['NamespaceId'] = $this->namespaceId;
        }
        if (null !== $this->namespaceName) {
            $res['NamespaceName'] = $this->namespaceName;
        }
        if (null !== $this->quota) {
            $res['Quota'] = $this->quota;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return namespaces
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConfigCount'])) {
            $model->configCount = $map['ConfigCount'];
        }
        if (isset($map['NamespaceId'])) {
            $model->namespaceId = $map['NamespaceId'];
        }
        if (isset($map['NamespaceName'])) {
            $model->namespaceName = $map['NamespaceName'];
        }
        if (isset($map['Quota'])) {
            $model->quota = $map['Quota'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
