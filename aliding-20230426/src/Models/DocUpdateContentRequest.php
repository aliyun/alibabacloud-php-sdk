<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Aliding\V20230426\Models\DocUpdateContentRequest\tenantContext;

class DocUpdateContentRequest extends Model
{
    /**
     * @var string
     */
    public $content;

    /**
     * @var string
     */
    public $dataType;

    /**
     * @var string
     */
    public $docKey;

    /**
     * @var tenantContext
     */
    public $tenantContext;
    protected $_name = [
        'content' => 'Content',
        'dataType' => 'DataType',
        'docKey' => 'DocKey',
        'tenantContext' => 'TenantContext',
    ];

    public function validate()
    {
        if (null !== $this->tenantContext) {
            $this->tenantContext->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }

        if (null !== $this->dataType) {
            $res['DataType'] = $this->dataType;
        }

        if (null !== $this->docKey) {
            $res['DocKey'] = $this->docKey;
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
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }

        if (isset($map['DataType'])) {
            $model->dataType = $map['DataType'];
        }

        if (isset($map['DocKey'])) {
            $model->docKey = $map['DocKey'];
        }

        if (isset($map['TenantContext'])) {
            $model->tenantContext = tenantContext::fromMap($map['TenantContext']);
        }

        return $model;
    }
}
