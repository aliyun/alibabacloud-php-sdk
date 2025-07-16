<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\SDK\Aliding\V20230426\Models\AddMultiDimTableRequest\fields;
use AlibabaCloud\SDK\Aliding\V20230426\Models\AddMultiDimTableRequest\tenantContext;
use AlibabaCloud\Tea\Model;

class AddMultiDimTableRequest extends Model
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
     * @var fields[]
     */
    public $fields;

    /**
     * @var string
     */
    public $name;

    /**
     * @var tenantContext
     */
    public $tenantContext;
    protected $_name = [
        'baseId' => 'BaseId',
        'fields' => 'Fields',
        'name' => 'Name',
        'tenantContext' => 'TenantContext',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->baseId) {
            $res['BaseId'] = $this->baseId;
        }
        if (null !== $this->fields) {
            $res['Fields'] = [];
            if (null !== $this->fields && \is_array($this->fields)) {
                $n = 0;
                foreach ($this->fields as $item) {
                    $res['Fields'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->tenantContext) {
            $res['TenantContext'] = null !== $this->tenantContext ? $this->tenantContext->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddMultiDimTableRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BaseId'])) {
            $model->baseId = $map['BaseId'];
        }
        if (isset($map['Fields'])) {
            if (!empty($map['Fields'])) {
                $model->fields = [];
                $n = 0;
                foreach ($map['Fields'] as $item) {
                    $model->fields[$n++] = null !== $item ? fields::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['TenantContext'])) {
            $model->tenantContext = tenantContext::fromMap($map['TenantContext']);
        }

        return $model;
    }
}
