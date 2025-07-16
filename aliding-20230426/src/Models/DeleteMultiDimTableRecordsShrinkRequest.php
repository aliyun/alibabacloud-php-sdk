<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Tea\Model;

class DeleteMultiDimTableRecordsShrinkRequest extends Model
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
    public $recordIdsShrink;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $sheetIdOrName;

    /**
     * @var string
     */
    public $tenantContextShrink;
    protected $_name = [
        'baseId' => 'BaseId',
        'recordIdsShrink' => 'RecordIds',
        'sheetIdOrName' => 'SheetIdOrName',
        'tenantContextShrink' => 'TenantContext',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->baseId) {
            $res['BaseId'] = $this->baseId;
        }
        if (null !== $this->recordIdsShrink) {
            $res['RecordIds'] = $this->recordIdsShrink;
        }
        if (null !== $this->sheetIdOrName) {
            $res['SheetIdOrName'] = $this->sheetIdOrName;
        }
        if (null !== $this->tenantContextShrink) {
            $res['TenantContext'] = $this->tenantContextShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteMultiDimTableRecordsShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BaseId'])) {
            $model->baseId = $map['BaseId'];
        }
        if (isset($map['RecordIds'])) {
            $model->recordIdsShrink = $map['RecordIds'];
        }
        if (isset($map['SheetIdOrName'])) {
            $model->sheetIdOrName = $map['SheetIdOrName'];
        }
        if (isset($map['TenantContext'])) {
            $model->tenantContextShrink = $map['TenantContext'];
        }

        return $model;
    }
}
