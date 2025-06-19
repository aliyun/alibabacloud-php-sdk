<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Aliding\V20230426\Models\DeleteMultiDimTableRecordsRequest\tenantContext;

class DeleteMultiDimTableRecordsRequest extends Model
{
    /**
     * @var string
     */
    public $baseId;

    /**
     * @var string[]
     */
    public $recordIds;

    /**
     * @var string
     */
    public $sheetIdOrName;

    /**
     * @var tenantContext
     */
    public $tenantContext;
    protected $_name = [
        'baseId' => 'BaseId',
        'recordIds' => 'RecordIds',
        'sheetIdOrName' => 'SheetIdOrName',
        'tenantContext' => 'TenantContext',
    ];

    public function validate()
    {
        if (\is_array($this->recordIds)) {
            Model::validateArray($this->recordIds);
        }
        if (null !== $this->tenantContext) {
            $this->tenantContext->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->baseId) {
            $res['BaseId'] = $this->baseId;
        }

        if (null !== $this->recordIds) {
            if (\is_array($this->recordIds)) {
                $res['RecordIds'] = [];
                $n1 = 0;
                foreach ($this->recordIds as $item1) {
                    $res['RecordIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->sheetIdOrName) {
            $res['SheetIdOrName'] = $this->sheetIdOrName;
        }

        if (null !== $this->tenantContext) {
            $res['TenantContext'] = null !== $this->tenantContext ? $this->tenantContext->toArray($noStream) : $this->tenantContext;
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
        if (isset($map['BaseId'])) {
            $model->baseId = $map['BaseId'];
        }

        if (isset($map['RecordIds'])) {
            if (!empty($map['RecordIds'])) {
                $model->recordIds = [];
                $n1 = 0;
                foreach ($map['RecordIds'] as $item1) {
                    $model->recordIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['SheetIdOrName'])) {
            $model->sheetIdOrName = $map['SheetIdOrName'];
        }

        if (isset($map['TenantContext'])) {
            $model->tenantContext = tenantContext::fromMap($map['TenantContext']);
        }

        return $model;
    }
}
