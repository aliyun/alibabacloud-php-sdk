<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Aliding\V20230426\Models\DocBlocksQueryRequest\tenantContext;

class DocBlocksQueryRequest extends Model
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
     * @var tenantContext
     */
    public $tenantContext;
    protected $_name = [
        'blockType' => 'BlockType',
        'docKey' => 'DocKey',
        'endIndex' => 'EndIndex',
        'startIndex' => 'StartIndex',
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
            $model->tenantContext = tenantContext::fromMap($map['TenantContext']);
        }

        return $model;
    }
}
