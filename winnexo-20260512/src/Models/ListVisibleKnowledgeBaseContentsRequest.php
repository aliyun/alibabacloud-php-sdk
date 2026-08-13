<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WinNexo\V20260512\Models;

use AlibabaCloud\Dara\Model;

class ListVisibleKnowledgeBaseContentsRequest extends Model
{
    /**
     * @var string
     */
    public $directoryId;

    /**
     * @var string
     */
    public $operatingObjectName;

    /**
     * @var int
     */
    public $page;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $sortField;

    /**
     * @var string
     */
    public $sortOrder;

    /**
     * @var string[]
     */
    public $sourceTypes;

    /**
     * @var string
     */
    public $tenantId;
    protected $_name = [
        'directoryId' => 'directoryId',
        'operatingObjectName' => 'operatingObjectName',
        'page' => 'page',
        'pageSize' => 'pageSize',
        'sortField' => 'sortField',
        'sortOrder' => 'sortOrder',
        'sourceTypes' => 'sourceTypes',
        'tenantId' => 'tenantId',
    ];

    public function validate()
    {
        if (\is_array($this->sourceTypes)) {
            Model::validateArray($this->sourceTypes);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->directoryId) {
            $res['directoryId'] = $this->directoryId;
        }

        if (null !== $this->operatingObjectName) {
            $res['operatingObjectName'] = $this->operatingObjectName;
        }

        if (null !== $this->page) {
            $res['page'] = $this->page;
        }

        if (null !== $this->pageSize) {
            $res['pageSize'] = $this->pageSize;
        }

        if (null !== $this->sortField) {
            $res['sortField'] = $this->sortField;
        }

        if (null !== $this->sortOrder) {
            $res['sortOrder'] = $this->sortOrder;
        }

        if (null !== $this->sourceTypes) {
            if (\is_array($this->sourceTypes)) {
                $res['sourceTypes'] = [];
                $n1 = 0;
                foreach ($this->sourceTypes as $item1) {
                    $res['sourceTypes'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->tenantId) {
            $res['tenantId'] = $this->tenantId;
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
        if (isset($map['directoryId'])) {
            $model->directoryId = $map['directoryId'];
        }

        if (isset($map['operatingObjectName'])) {
            $model->operatingObjectName = $map['operatingObjectName'];
        }

        if (isset($map['page'])) {
            $model->page = $map['page'];
        }

        if (isset($map['pageSize'])) {
            $model->pageSize = $map['pageSize'];
        }

        if (isset($map['sortField'])) {
            $model->sortField = $map['sortField'];
        }

        if (isset($map['sortOrder'])) {
            $model->sortOrder = $map['sortOrder'];
        }

        if (isset($map['sourceTypes'])) {
            if (!empty($map['sourceTypes'])) {
                $model->sourceTypes = [];
                $n1 = 0;
                foreach ($map['sourceTypes'] as $item1) {
                    $model->sourceTypes[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['tenantId'])) {
            $model->tenantId = $map['tenantId'];
        }

        return $model;
    }
}
