<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Tea\Model;

class CreateMultiDimTableFieldShrinkRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example r1R7q3QmWew5lo02fxB7noNyJxxxxxx
     *
     * @var string
     */
    public $baseId;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $propertyShrink;

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

    /**
     * @description This parameter is required.
     *
     * @example text
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'baseId' => 'BaseId',
        'name' => 'Name',
        'propertyShrink' => 'Property',
        'sheetIdOrName' => 'SheetIdOrName',
        'tenantContextShrink' => 'TenantContext',
        'type' => 'Type',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->baseId) {
            $res['BaseId'] = $this->baseId;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->propertyShrink) {
            $res['Property'] = $this->propertyShrink;
        }
        if (null !== $this->sheetIdOrName) {
            $res['SheetIdOrName'] = $this->sheetIdOrName;
        }
        if (null !== $this->tenantContextShrink) {
            $res['TenantContext'] = $this->tenantContextShrink;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateMultiDimTableFieldShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BaseId'])) {
            $model->baseId = $map['BaseId'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Property'])) {
            $model->propertyShrink = $map['Property'];
        }
        if (isset($map['SheetIdOrName'])) {
            $model->sheetIdOrName = $map['SheetIdOrName'];
        }
        if (isset($map['TenantContext'])) {
            $model->tenantContextShrink = $map['TenantContext'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
