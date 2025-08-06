<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Dara\Model;

class GetNodeByUrlShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $optionShrink;

    /**
     * @var string
     */
    public $tenantContextShrink;

    /**
     * @var string
     */
    public $url;
    protected $_name = [
        'optionShrink' => 'Option',
        'tenantContextShrink' => 'TenantContext',
        'url' => 'Url',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->optionShrink) {
            $res['Option'] = $this->optionShrink;
        }

        if (null !== $this->tenantContextShrink) {
            $res['TenantContext'] = $this->tenantContextShrink;
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
            $model->optionShrink = $map['Option'];
        }

        if (isset($map['TenantContext'])) {
            $model->tenantContextShrink = $map['TenantContext'];
        }

        if (isset($map['Url'])) {
            $model->url = $map['Url'];
        }

        return $model;
    }
}
