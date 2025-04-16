<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models;

use AlibabaCloud\Dara\Model;

class ListApprovalSchemasRequest extends Model
{
    /**
     * @var int
     */
    public $currentPage;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $policyType;

    /**
     * @var string[]
     */
    public $schemaIds;

    /**
     * @var string
     */
    public $schemaName;
    protected $_name = [
        'currentPage' => 'CurrentPage',
        'pageSize' => 'PageSize',
        'policyType' => 'PolicyType',
        'schemaIds' => 'SchemaIds',
        'schemaName' => 'SchemaName',
    ];

    public function validate()
    {
        if (\is_array($this->schemaIds)) {
            Model::validateArray($this->schemaIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->policyType) {
            $res['PolicyType'] = $this->policyType;
        }

        if (null !== $this->schemaIds) {
            if (\is_array($this->schemaIds)) {
                $res['SchemaIds'] = [];
                $n1 = 0;
                foreach ($this->schemaIds as $item1) {
                    $res['SchemaIds'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->schemaName) {
            $res['SchemaName'] = $this->schemaName;
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
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['PolicyType'])) {
            $model->policyType = $map['PolicyType'];
        }

        if (isset($map['SchemaIds'])) {
            if (!empty($map['SchemaIds'])) {
                $model->schemaIds = [];
                $n1 = 0;
                foreach ($map['SchemaIds'] as $item1) {
                    $model->schemaIds[$n1++] = $item1;
                }
            }
        }

        if (isset($map['SchemaName'])) {
            $model->schemaName = $map['SchemaName'];
        }

        return $model;
    }
}
