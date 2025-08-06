<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetMultiDimTableRecordRequest\tenantContext;

class GetMultiDimTableRecordRequest extends Model
{
    /**
     * @var string
     */
    public $baseId;

    /**
     * @var string
     */
    public $recordId;

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
        'recordId' => 'RecordId',
        'sheetIdOrName' => 'SheetIdOrName',
        'tenantContext' => 'TenantContext',
    ];

    public function validate()
    {
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

        if (null !== $this->recordId) {
            $res['RecordId'] = $this->recordId;
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

        if (isset($map['RecordId'])) {
            $model->recordId = $map['RecordId'];
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
