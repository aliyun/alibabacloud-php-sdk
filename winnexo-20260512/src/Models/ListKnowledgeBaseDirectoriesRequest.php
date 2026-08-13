<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WinNexo\V20260512\Models;

use AlibabaCloud\Dara\Model;

class ListKnowledgeBaseDirectoriesRequest extends Model
{
    /**
     * @var string
     */
    public $directoryId;

    /**
     * @var string
     */
    public $sortField;

    /**
     * @var string
     */
    public $sortOrder;

    /**
     * @var string
     */
    public $tenantId;
    protected $_name = [
        'directoryId' => 'directoryId',
        'sortField' => 'sortField',
        'sortOrder' => 'sortOrder',
        'tenantId' => 'tenantId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->directoryId) {
            $res['directoryId'] = $this->directoryId;
        }

        if (null !== $this->sortField) {
            $res['sortField'] = $this->sortField;
        }

        if (null !== $this->sortOrder) {
            $res['sortOrder'] = $this->sortOrder;
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

        if (isset($map['sortField'])) {
            $model->sortField = $map['sortField'];
        }

        if (isset($map['sortOrder'])) {
            $model->sortOrder = $map['sortOrder'];
        }

        if (isset($map['tenantId'])) {
            $model->tenantId = $map['tenantId'];
        }

        return $model;
    }
}
