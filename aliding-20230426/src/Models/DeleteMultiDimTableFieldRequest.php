<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\SDK\Aliding\V20230426\Models\DeleteMultiDimTableFieldRequest\tenantContext;
use AlibabaCloud\Tea\Model;

class DeleteMultiDimTableFieldRequest extends Model
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
     * @var string
     */
    public $fieldIdOrName;

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
        'fieldIdOrName' => 'FieldIdOrName',
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
        if (null !== $this->fieldIdOrName) {
            $res['FieldIdOrName'] = $this->fieldIdOrName;
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
     * @return DeleteMultiDimTableFieldRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BaseId'])) {
            $model->baseId = $map['BaseId'];
        }
        if (isset($map['FieldIdOrName'])) {
            $model->fieldIdOrName = $map['FieldIdOrName'];
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
