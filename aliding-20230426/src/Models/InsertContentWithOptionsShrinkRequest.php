<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Tea\Model;

class InsertContentWithOptionsShrinkRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example content
     *
     * @var string
     */
    public $contentShrink;

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
     * @var string
     */
    public $pathShrink;

    /**
     * @var string
     */
    public $tenantContextShrink;
    protected $_name = [
        'contentShrink' => 'Content',
        'documentId' => 'DocumentId',
        'index' => 'Index',
        'pathShrink' => 'Path',
        'tenantContextShrink' => 'TenantContext',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->contentShrink) {
            $res['Content'] = $this->contentShrink;
        }
        if (null !== $this->documentId) {
            $res['DocumentId'] = $this->documentId;
        }
        if (null !== $this->index) {
            $res['Index'] = $this->index;
        }
        if (null !== $this->pathShrink) {
            $res['Path'] = $this->pathShrink;
        }
        if (null !== $this->tenantContextShrink) {
            $res['TenantContext'] = $this->tenantContextShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return InsertContentWithOptionsShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Content'])) {
            $model->contentShrink = $map['Content'];
        }
        if (isset($map['DocumentId'])) {
            $model->documentId = $map['DocumentId'];
        }
        if (isset($map['Index'])) {
            $model->index = $map['Index'];
        }
        if (isset($map['Path'])) {
            $model->pathShrink = $map['Path'];
        }
        if (isset($map['TenantContext'])) {
            $model->tenantContextShrink = $map['TenantContext'];
        }

        return $model;
    }
}
