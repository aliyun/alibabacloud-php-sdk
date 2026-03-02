<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Neuron\V20211115\Models;

use AlibabaCloud\Dara\Model;

class ListMetadataInfosRequest extends Model
{
    /**
     * @var string
     */
    public $env;

    /**
     * @var int
     */
    public $namespaceId;

    /**
     * @var string
     */
    public $namespaceName;

    /**
     * @var string
     */
    public $orderBy;

    /**
     * @var string
     */
    public $orderDirection;

    /**
     * @var int
     */
    public $orgId;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var int
     */
    public $pbcId;
    protected $_name = [
        'env' => 'env',
        'namespaceId' => 'namespace_id',
        'namespaceName' => 'namespace_name',
        'orderBy' => 'order_by',
        'orderDirection' => 'order_direction',
        'orgId' => 'org_id',
        'pageNumber' => 'page_number',
        'pageSize' => 'page_size',
        'pbcId' => 'pbc_id',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->env) {
            $res['env'] = $this->env;
        }

        if (null !== $this->namespaceId) {
            $res['namespace_id'] = $this->namespaceId;
        }

        if (null !== $this->namespaceName) {
            $res['namespace_name'] = $this->namespaceName;
        }

        if (null !== $this->orderBy) {
            $res['order_by'] = $this->orderBy;
        }

        if (null !== $this->orderDirection) {
            $res['order_direction'] = $this->orderDirection;
        }

        if (null !== $this->orgId) {
            $res['org_id'] = $this->orgId;
        }

        if (null !== $this->pageNumber) {
            $res['page_number'] = $this->pageNumber;
        }

        if (null !== $this->pageSize) {
            $res['page_size'] = $this->pageSize;
        }

        if (null !== $this->pbcId) {
            $res['pbc_id'] = $this->pbcId;
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
        if (isset($map['env'])) {
            $model->env = $map['env'];
        }

        if (isset($map['namespace_id'])) {
            $model->namespaceId = $map['namespace_id'];
        }

        if (isset($map['namespace_name'])) {
            $model->namespaceName = $map['namespace_name'];
        }

        if (isset($map['order_by'])) {
            $model->orderBy = $map['order_by'];
        }

        if (isset($map['order_direction'])) {
            $model->orderDirection = $map['order_direction'];
        }

        if (isset($map['org_id'])) {
            $model->orgId = $map['org_id'];
        }

        if (isset($map['page_number'])) {
            $model->pageNumber = $map['page_number'];
        }

        if (isset($map['page_size'])) {
            $model->pageSize = $map['page_size'];
        }

        if (isset($map['pbc_id'])) {
            $model->pbcId = $map['pbc_id'];
        }

        return $model;
    }
}
