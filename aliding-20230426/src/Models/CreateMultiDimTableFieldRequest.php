<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Aliding\V20230426\Models\CreateMultiDimTableFieldRequest\tenantContext;

class CreateMultiDimTableFieldRequest extends Model
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
     * @var mixed[]
     */
    public $property;

    /**
     * @var string
     */
    public $sheetIdOrName;

    /**
     * @var tenantContext
     */
    public $tenantContext;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'baseId' => 'BaseId',
        'name' => 'Name',
        'property' => 'Property',
        'sheetIdOrName' => 'SheetIdOrName',
        'tenantContext' => 'TenantContext',
        'type' => 'Type',
    ];

    public function validate()
    {
        if (\is_array($this->property)) {
            Model::validateArray($this->property);
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

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->property) {
            if (\is_array($this->property)) {
                $res['Property'] = [];
                foreach ($this->property as $key1 => $value1) {
                    $res['Property'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->sheetIdOrName) {
            $res['SheetIdOrName'] = $this->sheetIdOrName;
        }

        if (null !== $this->tenantContext) {
            $res['TenantContext'] = null !== $this->tenantContext ? $this->tenantContext->toArray($noStream) : $this->tenantContext;
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
            if (!empty($map['Property'])) {
                $model->property = [];
                foreach ($map['Property'] as $key1 => $value1) {
                    $model->property[$key1] = $value1;
                }
            }
        }

        if (isset($map['SheetIdOrName'])) {
            $model->sheetIdOrName = $map['SheetIdOrName'];
        }

        if (isset($map['TenantContext'])) {
            $model->tenantContext = tenantContext::fromMap($map['TenantContext']);
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
