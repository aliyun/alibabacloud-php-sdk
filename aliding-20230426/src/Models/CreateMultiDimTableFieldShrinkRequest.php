<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Dara\Model;

class CreateMultiDimTableFieldShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $baseId;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $propertyShrink;

    /**
     * @var string
     */
    public $sheetIdOrName;

    /**
     * @var string
     */
    public $tenantContextShrink;

    /**
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

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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
