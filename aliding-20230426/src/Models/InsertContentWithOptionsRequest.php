<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\SDK\Aliding\V20230426\Models\InsertContentWithOptionsRequest\tenantContext;
use AlibabaCloud\Tea\Model;

class InsertContentWithOptionsRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example content
     *
     * @var mixed[]
     */
    public $content;

    /**
     * @description This parameter is required.
     *
     * @example documentId
     *
     * @var string
     */
    public $documentId;

    /**
     * @example 1
     *
     * @var int
     */
    public $index;

    /**
     * @example [0,0]
     *
     * @var int[]
     */
    public $path;

    /**
     * @var tenantContext
     */
    public $tenantContext;
    protected $_name = [
        'content' => 'Content',
        'documentId' => 'DocumentId',
        'index' => 'Index',
        'path' => 'Path',
        'tenantContext' => 'TenantContext',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }
        if (null !== $this->documentId) {
            $res['DocumentId'] = $this->documentId;
        }
        if (null !== $this->index) {
            $res['Index'] = $this->index;
        }
        if (null !== $this->path) {
            $res['Path'] = $this->path;
        }
        if (null !== $this->tenantContext) {
            $res['TenantContext'] = null !== $this->tenantContext ? $this->tenantContext->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return InsertContentWithOptionsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }
        if (isset($map['DocumentId'])) {
            $model->documentId = $map['DocumentId'];
        }
        if (isset($map['Index'])) {
            $model->index = $map['Index'];
        }
        if (isset($map['Path'])) {
            if (!empty($map['Path'])) {
                $model->path = $map['Path'];
            }
        }
        if (isset($map['TenantContext'])) {
            $model->tenantContext = tenantContext::fromMap($map['TenantContext']);
        }

        return $model;
    }
}
