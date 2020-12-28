<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Acm\V20200206\Models\DescribeNamespacesResponseBody;

use AlibabaCloud\Tea\Model;

class namespaces extends Model
{
    /**
     * @var int
     */
    public $type;

    /**
     * @var int
     */
    public $quota;

    /**
     * @var string
     */
    public $namespaceId;

    /**
     * @var int
     */
    public $configCount;

    /**
     * @var string
     */
    public $namespaceName;
    protected $_name = [
        'type'          => 'Type',
        'quota'         => 'Quota',
        'namespaceId'   => 'NamespaceId',
        'configCount'   => 'ConfigCount',
        'namespaceName' => 'NamespaceName',
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
        if (null !== $this->quota) {
            $res['Quota'] = $this->quota;
        }
        if (null !== $this->namespaceId) {
            $res['NamespaceId'] = $this->namespaceId;
        }
        if (null !== $this->configCount) {
            $res['ConfigCount'] = $this->configCount;
        }
        if (null !== $this->namespaceName) {
            $res['NamespaceName'] = $this->namespaceName;
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
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['Quota'])) {
            $model->quota = $map['Quota'];
        }
        if (isset($map['NamespaceId'])) {
            $model->namespaceId = $map['NamespaceId'];
        }
        if (isset($map['ConfigCount'])) {
            $model->configCount = $map['ConfigCount'];
        }
        if (isset($map['NamespaceName'])) {
            $model->namespaceName = $map['NamespaceName'];
        }

        return $model;
    }
}
