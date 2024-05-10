<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\SDK\Aliding\V20230426\Models\SaveContentRequest\contents;
use AlibabaCloud\SDK\Aliding\V20230426\Models\SaveContentRequest\tenantContext;
use AlibabaCloud\Tea\Model;

class SaveContentRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example []
     *
     * @var contents[]
     */
    public $contents;

    /**
     * @description This parameter is required.
     *
     * @example client
     *
     * @var string
     */
    public $ddFrom;

    /**
     * @description This parameter is required.
     *
     * @example sdfafdsfsafdfsaf
     *
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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->contents) {
            $res['Contents'] = [];
            if (null !== $this->contents && \is_array($this->contents)) {
                $n = 0;
                foreach ($this->contents as $item) {
                    $res['Contents'][$n++] = null !== $item ? $item->toMap() : $item;
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
            $res['TenantContext'] = null !== $this->tenantContext ? $this->tenantContext->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SaveContentRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Contents'])) {
            if (!empty($map['Contents'])) {
                $model->contents = [];
                $n               = 0;
                foreach ($map['Contents'] as $item) {
                    $model->contents[$n++] = null !== $item ? contents::fromMap($item) : $item;
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
