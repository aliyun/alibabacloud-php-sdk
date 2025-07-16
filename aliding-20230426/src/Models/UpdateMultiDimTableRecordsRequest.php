<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\SDK\Aliding\V20230426\Models\UpdateMultiDimTableRecordsRequest\recordIds;
use AlibabaCloud\SDK\Aliding\V20230426\Models\UpdateMultiDimTableRecordsRequest\tenantContext;
use AlibabaCloud\Tea\Model;

class UpdateMultiDimTableRecordsRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example r1R7q3QmWew5lo02fxB7nxxxxxxxx
     *
     * @var string
     */
    public $baseId;

    /**
     * @description This parameter is required.
     *
     * @var recordIds[]
     */
    public $recordIds;

    /**
     * @description This parameter is required.
     *
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

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->baseId) {
            $res['BaseId'] = $this->baseId;
        }
        if (null !== $this->recordIds) {
            $res['RecordIds'] = [];
            if (null !== $this->recordIds && \is_array($this->recordIds)) {
                $n = 0;
                foreach ($this->recordIds as $item) {
                    $res['RecordIds'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->sheetIdOrName) {
            $res['SheetIdOrName'] = $this->sheetIdOrName;
        }
        if (null !== $this->tenantContext) {
            $res['TenantContext'] = null !== $this->tenantContext ? $this->tenantContext->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateMultiDimTableRecordsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BaseId'])) {
            $model->baseId = $map['BaseId'];
        }
        if (isset($map['RecordIds'])) {
            if (!empty($map['RecordIds'])) {
                $model->recordIds = [];
                $n = 0;
                foreach ($map['RecordIds'] as $item) {
                    $model->recordIds[$n++] = null !== $item ? recordIds::fromMap($item) : $item;
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
