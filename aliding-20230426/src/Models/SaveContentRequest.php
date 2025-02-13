<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Aliding\V20230426\Models\SaveContentRequest\contents;
use AlibabaCloud\SDK\Aliding\V20230426\Models\SaveContentRequest\tenantContext;

class SaveContentRequest extends Model
{
    /**
     * @var contents[]
     */
    public $contents;
    /**
     * @var string
     */
    public $ddFrom;
    /**
     * @var string
     */
    public $templateId;
    /**
     * @var tenantContext
     */
    public $tenantContext;
    protected $_name = [
        'contents'      => 'Contents',
        'ddFrom'        => 'DdFrom',
        'templateId'    => 'TemplateId',
        'tenantContext' => 'TenantContext',
    ];

    public function validate()
    {
        if (\is_array($this->contents)) {
            Model::validateArray($this->contents);
        }
        if (null !== $this->tenantContext) {
            $this->tenantContext->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->contents) {
            if (\is_array($this->contents)) {
                $res['Contents'] = [];
                $n1              = 0;
                foreach ($this->contents as $item1) {
                    $res['Contents'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->ddFrom) {
            $res['DdFrom'] = $this->ddFrom;
        }

        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
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
        if (isset($map['Contents'])) {
            if (!empty($map['Contents'])) {
                $model->contents = [];
                $n1              = 0;
                foreach ($map['Contents'] as $item1) {
                    $model->contents[$n1++] = contents::fromMap($item1);
                }
            }
        }

        if (isset($map['DdFrom'])) {
            $model->ddFrom = $map['DdFrom'];
        }

        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }

        if (isset($map['TenantContext'])) {
            $model->tenantContext = tenantContext::fromMap($map['TenantContext']);
        }

        return $model;
    }
}
