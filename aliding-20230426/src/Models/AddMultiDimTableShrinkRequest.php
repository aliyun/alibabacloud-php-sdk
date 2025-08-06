<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Dara\Model;

class AddMultiDimTableShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $baseId;

    /**
     * @var string
     */
    public $fieldsShrink;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $tenantContextShrink;
    protected $_name = [
        'baseId' => 'BaseId',
        'fieldsShrink' => 'Fields',
        'name' => 'Name',
        'tenantContextShrink' => 'TenantContext',
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

        if (null !== $this->fieldsShrink) {
            $res['Fields'] = $this->fieldsShrink;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->tenantContextShrink) {
            $res['TenantContext'] = $this->tenantContextShrink;
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

        if (isset($map['Fields'])) {
            $model->fieldsShrink = $map['Fields'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['TenantContext'])) {
            $model->tenantContextShrink = $map['TenantContext'];
        }

        return $model;
    }
}
