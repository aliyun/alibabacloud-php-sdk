<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Tea\Model;

class DocBlocksQueryShrinkRequest extends Model
{
    /**
     * @example heading
     *
     * @var string
     */
    public $blockType;

    /**
     * @description This parameter is required.
     *
     * @example xxxx
     *
     * @var string
     */
    public $docKey;

    /**
     * @example 1
     *
     * @var int
     */
    public $endIndex;

    /**
     * @example 0
     *
     * @var int
     */
    public $startIndex;

    /**
     * @var string
     */
    public $tenantContextShrink;
    protected $_name = [
        'blockType' => 'BlockType',
        'docKey' => 'DocKey',
        'endIndex' => 'EndIndex',
        'startIndex' => 'StartIndex',
        'tenantContextShrink' => 'TenantContext',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->blockType) {
            $res['BlockType'] = $this->blockType;
        }
        if (null !== $this->docKey) {
            $res['DocKey'] = $this->docKey;
        }
        if (null !== $this->endIndex) {
            $res['EndIndex'] = $this->endIndex;
        }
        if (null !== $this->startIndex) {
            $res['StartIndex'] = $this->startIndex;
        }
        if (null !== $this->tenantContextShrink) {
            $res['TenantContext'] = $this->tenantContextShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DocBlocksQueryShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BlockType'])) {
            $model->blockType = $map['BlockType'];
        }
        if (isset($map['DocKey'])) {
            $model->docKey = $map['DocKey'];
        }
        if (isset($map['EndIndex'])) {
            $model->endIndex = $map['EndIndex'];
        }
        if (isset($map['StartIndex'])) {
            $model->startIndex = $map['StartIndex'];
        }
        if (isset($map['TenantContext'])) {
            $model->tenantContextShrink = $map['TenantContext'];
        }

        return $model;
    }
}
