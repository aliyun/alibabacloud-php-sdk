<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Aliding\V20230426\Models\DocBlocksModifyRequest\tenantContext;

class DocBlocksModifyRequest extends Model
{
    /**
     * @var string
     */
    public $blockId;

    /**
     * @var string
     */
    public $dentryUuid;

    /**
     * @var mixed[]
     */
    public $element;

    /**
     * @var tenantContext
     */
    public $tenantContext;
    protected $_name = [
        'blockId' => 'BlockId',
        'dentryUuid' => 'DentryUuid',
        'element' => 'Element',
        'tenantContext' => 'TenantContext',
    ];

    public function validate()
    {
        if (\is_array($this->element)) {
            Model::validateArray($this->element);
        }
        if (null !== $this->tenantContext) {
            $this->tenantContext->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->blockId) {
            $res['BlockId'] = $this->blockId;
        }

        if (null !== $this->dentryUuid) {
            $res['DentryUuid'] = $this->dentryUuid;
        }

        if (null !== $this->element) {
            if (\is_array($this->element)) {
                $res['Element'] = [];
                foreach ($this->element as $key1 => $value1) {
                    $res['Element'][$key1] = $value1;
                }
            }
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
        if (isset($map['BlockId'])) {
            $model->blockId = $map['BlockId'];
        }

        if (isset($map['DentryUuid'])) {
            $model->dentryUuid = $map['DentryUuid'];
        }

        if (isset($map['Element'])) {
            if (!empty($map['Element'])) {
                $model->element = [];
                foreach ($map['Element'] as $key1 => $value1) {
                    $model->element[$key1] = $value1;
                }
            }
        }

        if (isset($map['TenantContext'])) {
            $model->tenantContext = tenantContext::fromMap($map['TenantContext']);
        }

        return $model;
    }
}
