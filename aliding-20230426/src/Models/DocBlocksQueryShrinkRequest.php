<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Dara\Model;

class DocBlocksQueryShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $blockType;

    /**
     * @var string
     */
    public $docKey;

    /**
     * @var int
     */
    public $endIndex;

    /**
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

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
