<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Dara\Model;

class DocUpdateContentShrinkRequest extends Model
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
     * @var string
     */
    public $tenantContextShrink;
    protected $_name = [
        'content' => 'Content',
        'dataType' => 'DataType',
        'docKey' => 'DocKey',
        'tenantContextShrink' => 'TenantContext',
    ];

    public function validate()
    {
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
            $model->tenantContextShrink = $map['TenantContext'];
        }

        return $model;
    }
}
