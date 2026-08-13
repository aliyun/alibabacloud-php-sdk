<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WinNexo\V20260512\Models;

use AlibabaCloud\Dara\Model;

class UpdateKnowledgeBaseSourceTagsRequest extends Model
{
    /**
     * @var string
     */
    public $sourceId;

    /**
     * @var string
     */
    public $sourceTags;

    /**
     * @var string
     */
    public $tenantId;
    protected $_name = [
        'sourceId' => 'sourceId',
        'sourceTags' => 'sourceTags',
        'tenantId' => 'tenantId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->sourceId) {
            $res['sourceId'] = $this->sourceId;
        }

        if (null !== $this->sourceTags) {
            $res['sourceTags'] = $this->sourceTags;
        }

        if (null !== $this->tenantId) {
            $res['tenantId'] = $this->tenantId;
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
        if (isset($map['sourceId'])) {
            $model->sourceId = $map['sourceId'];
        }

        if (isset($map['sourceTags'])) {
            $model->sourceTags = $map['sourceTags'];
        }

        if (isset($map['tenantId'])) {
            $model->tenantId = $map['tenantId'];
        }

        return $model;
    }
}
