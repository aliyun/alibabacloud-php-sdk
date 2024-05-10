<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Tea\Model;

class CreateReportShrinkRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example []
     *
     * @var string
     */
    public $contentsShrink;

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
     * @var string
     */
    public $tenantContextShrink;

    /**
     * @description This parameter is required.
     *
     * @example true
     *
     * @var bool
     */
    public $toChat;

    /**
     * @example []
     *
     * @var string
     */
    public $toCidsShrink;

    /**
     * @example [123,456]
     *
     * @var string
     */
    public $toUseridsShrink;
    protected $_name = [
        'contentsShrink'      => 'Contents',
        'ddFrom'              => 'DdFrom',
        'templateId'          => 'TemplateId',
        'tenantContextShrink' => 'TenantContext',
        'toChat'              => 'ToChat',
        'toCidsShrink'        => 'ToCids',
        'toUseridsShrink'     => 'ToUserids',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->contentsShrink) {
            $res['Contents'] = $this->contentsShrink;
        }
        if (null !== $this->ddFrom) {
            $res['DdFrom'] = $this->ddFrom;
        }
        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
        }
        if (null !== $this->tenantContextShrink) {
            $res['TenantContext'] = $this->tenantContextShrink;
        }
        if (null !== $this->toChat) {
            $res['ToChat'] = $this->toChat;
        }
        if (null !== $this->toCidsShrink) {
            $res['ToCids'] = $this->toCidsShrink;
        }
        if (null !== $this->toUseridsShrink) {
            $res['ToUserids'] = $this->toUseridsShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateReportShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Contents'])) {
            $model->contentsShrink = $map['Contents'];
        }
        if (isset($map['DdFrom'])) {
            $model->ddFrom = $map['DdFrom'];
        }
        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }
        if (isset($map['TenantContext'])) {
            $model->tenantContextShrink = $map['TenantContext'];
        }
        if (isset($map['ToChat'])) {
            $model->toChat = $map['ToChat'];
        }
        if (isset($map['ToCids'])) {
            $model->toCidsShrink = $map['ToCids'];
        }
        if (isset($map['ToUserids'])) {
            $model->toUseridsShrink = $map['ToUserids'];
        }

        return $model;
    }
}
