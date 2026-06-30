<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Dara\Model;

class DisableSceneGroupTemplateShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $openConversationId;

    /**
     * @var string
     */
    public $templateId;

    /**
     * @var string
     */
    public $tenantContextShrink;
    protected $_name = [
        'openConversationId' => 'OpenConversationId',
        'templateId' => 'TemplateId',
        'tenantContextShrink' => 'TenantContext',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->openConversationId) {
            $res['OpenConversationId'] = $this->openConversationId;
        }

        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
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
        if (isset($map['OpenConversationId'])) {
            $model->openConversationId = $map['OpenConversationId'];
        }

        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }

        if (isset($map['TenantContext'])) {
            $model->tenantContextShrink = $map['TenantContext'];
        }

        return $model;
    }
}
