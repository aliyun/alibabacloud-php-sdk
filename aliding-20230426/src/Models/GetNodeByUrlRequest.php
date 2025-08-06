<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetNodeByUrlRequest\option;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetNodeByUrlRequest\tenantContext;

class GetNodeByUrlRequest extends Model
{
    /**
     * @var option
     */
    public $option;

    /**
     * @var tenantContext
     */
    public $tenantContext;

    /**
     * @var string
     */
    public $url;
    protected $_name = [
        'option' => 'Option',
        'tenantContext' => 'TenantContext',
        'url' => 'Url',
    ];

    public function validate()
    {
        if (null !== $this->option) {
            $this->option->validate();
        }
        if (null !== $this->tenantContext) {
            $this->tenantContext->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->option) {
            $res['Option'] = null !== $this->option ? $this->option->toArray($noStream) : $this->option;
        }

        if (null !== $this->tenantContext) {
            $res['TenantContext'] = null !== $this->tenantContext ? $this->tenantContext->toArray($noStream) : $this->tenantContext;
        }

        if (null !== $this->url) {
            $res['Url'] = $this->url;
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
        if (isset($map['Option'])) {
            $model->option = option::fromMap($map['Option']);
        }

        if (isset($map['TenantContext'])) {
            $model->tenantContext = tenantContext::fromMap($map['TenantContext']);
        }

        if (isset($map['Url'])) {
            $model->url = $map['Url'];
        }

        return $model;
    }
}
