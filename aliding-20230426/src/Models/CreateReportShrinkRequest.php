<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Dara\Model;

class CreateReportShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $contentsShrink;
    /**
     * @var string
     */
    public $ddFrom;
    /**
     * @var string
     */
    public $templateId;
    /**
     * @var string
     */
    public $tenantContextShrink;
    /**
     * @var bool
     */
    public $toChat;
    /**
     * @var string
     */
    public $toCidsShrink;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
