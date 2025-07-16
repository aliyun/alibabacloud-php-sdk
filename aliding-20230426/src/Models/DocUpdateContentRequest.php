<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\SDK\Aliding\V20230426\Models\DocUpdateContentRequest\tenantContext;
use AlibabaCloud\Tea\Model;

class DocUpdateContentRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example []
     *
     * @var string
     */
    public $content;

    /**
     * @example markdown
     *
     * @var string
     */
    public $dataType;

    /**
     * @description This parameter is required.
     *
     * @example 4j6OJzVEG4jJO3p8
     *
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

    public function validate() {}

    public function toMap()
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
            $res['TenantContext'] = null !== $this->tenantContext ? $this->tenantContext->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DocUpdateContentRequest
     */
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
