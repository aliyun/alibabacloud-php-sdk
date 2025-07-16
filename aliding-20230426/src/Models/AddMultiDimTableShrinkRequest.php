<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Tea\Model;

class AddMultiDimTableShrinkRequest extends Model
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

    public function validate() {}

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return AddMultiDimTableShrinkRequest
     */
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
