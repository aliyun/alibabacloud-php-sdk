<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WinNexo\V20260512\Models\RetryKnowledgeBaseFailedSourcesResponseBody;

use AlibabaCloud\Dara\Model;

class failedSources extends Model
{
    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $sourceId;

    /**
     * @var string
     */
    public $sourceType;
    protected $_name = [
        'name' => 'name',
        'sourceId' => 'sourceId',
        'sourceType' => 'sourceType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->sourceId) {
            $res['sourceId'] = $this->sourceId;
        }

        if (null !== $this->sourceType) {
            $res['sourceType'] = $this->sourceType;
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
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['sourceId'])) {
            $model->sourceId = $map['sourceId'];
        }

        if (isset($map['sourceType'])) {
            $model->sourceType = $map['sourceType'];
        }

        return $model;
    }
}
