<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Aliding\V20230426\Models\CreateReportRequest\contents;
use AlibabaCloud\SDK\Aliding\V20230426\Models\CreateReportRequest\tenantContext;

class CreateReportRequest extends Model
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

    /**
     * @var bool
     */
    public $toChat;

    /**
     * @var string[]
     */
    public $toCids;

    /**
     * @var string[]
     */
    public $toUserids;
    protected $_name = [
        'contents' => 'Contents',
        'ddFrom' => 'DdFrom',
        'templateId' => 'TemplateId',
        'tenantContext' => 'TenantContext',
        'toChat' => 'ToChat',
        'toCids' => 'ToCids',
        'toUserids' => 'ToUserids',
    ];

    public function validate()
    {
        if (\is_array($this->contents)) {
            Model::validateArray($this->contents);
        }
        if (null !== $this->tenantContext) {
            $this->tenantContext->validate();
        }
        if (\is_array($this->toCids)) {
            Model::validateArray($this->toCids);
        }
        if (\is_array($this->toUserids)) {
            Model::validateArray($this->toUserids);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->contents) {
            if (\is_array($this->contents)) {
                $res['Contents'] = [];
                $n1 = 0;
                foreach ($this->contents as $item1) {
                    $res['Contents'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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

        if (null !== $this->toChat) {
            $res['ToChat'] = $this->toChat;
        }

        if (null !== $this->toCids) {
            if (\is_array($this->toCids)) {
                $res['ToCids'] = [];
                $n1 = 0;
                foreach ($this->toCids as $item1) {
                    $res['ToCids'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->toUserids) {
            if (\is_array($this->toUserids)) {
                $res['ToUserids'] = [];
                $n1 = 0;
                foreach ($this->toUserids as $item1) {
                    $res['ToUserids'][$n1] = $item1;
                    ++$n1;
                }
            }
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
                $n1 = 0;
                foreach ($map['Contents'] as $item1) {
                    $model->contents[$n1] = contents::fromMap($item1);
                    ++$n1;
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
                $model->toCids = [];
                $n1 = 0;
                foreach ($map['ToCids'] as $item1) {
                    $model->toCids[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['ToUserids'])) {
            if (!empty($map['ToUserids'])) {
                $model->toUserids = [];
                $n1 = 0;
                foreach ($map['ToUserids'] as $item1) {
                    $model->toUserids[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
