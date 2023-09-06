<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\SDK\Aliding\V20230426\Models\CreateReportRequest\contents;
use AlibabaCloud\SDK\Aliding\V20230426\Models\CreateReportRequest\tenantContext;
use AlibabaCloud\Tea\Model;

class CreateReportRequest extends Model
{
    /**
     * @example []
     *
     * @var contents[]
     */
    public $contents;

    /**
     * @example client
     *
     * @var string
     */
    public $ddFrom;

    /**
     * @example sdfafdsfsafdfsaf
     *
     * @var string
     */
    public $templateId;

    /**
     * @var tenantContext
     */
    public $tenantContext;

    /**
     * @example true
     *
     * @var bool
     */
    public $toChat;

    /**
     * @example []
     *
     * @var string[]
     */
    public $toCids;

    /**
     * @example [123,456]
     *
     * @var string[]
     */
    public $toUserids;
    protected $_name = [
        'contents'      => 'Contents',
        'ddFrom'        => 'DdFrom',
        'templateId'    => 'TemplateId',
        'tenantContext' => 'TenantContext',
        'toChat'        => 'ToChat',
        'toCids'        => 'ToCids',
        'toUserids'     => 'ToUserids',
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
        if (null !== $this->toChat) {
            $res['ToChat'] = $this->toChat;
        }
        if (null !== $this->toCids) {
            $res['ToCids'] = $this->toCids;
        }
        if (null !== $this->toUserids) {
            $res['ToUserids'] = $this->toUserids;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateReportRequest
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
        if (isset($map['ToChat'])) {
            $model->toChat = $map['ToChat'];
        }
        if (isset($map['ToCids'])) {
            if (!empty($map['ToCids'])) {
                $model->toCids = $map['ToCids'];
            }
        }
        if (isset($map['ToUserids'])) {
            if (!empty($map['ToUserids'])) {
                $model->toUserids = $map['ToUserids'];
            }
        }

        return $model;
    }
}
