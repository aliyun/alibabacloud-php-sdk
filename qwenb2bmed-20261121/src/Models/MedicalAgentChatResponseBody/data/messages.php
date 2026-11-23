<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\QwenB2BMed\V20261121\Models\MedicalAgentChatResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\QwenB2BMed\V20261121\Models\MedicalAgentChatResponseBody\data\messages\metaData;

class messages extends Model
{
    /**
     * @var mixed
     */
    public $content;

    /**
     * @var metaData
     */
    public $metaData;

    /**
     * @var string
     */
    public $mimeType;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'content' => 'content',
        'metaData' => 'metaData',
        'mimeType' => 'mimeType',
        'status' => 'status',
    ];

    public function validate()
    {
        if (null !== $this->metaData) {
            $this->metaData->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->content) {
            $res['content'] = $this->content;
        }

        if (null !== $this->metaData) {
            $res['metaData'] = null !== $this->metaData ? $this->metaData->toArray($noStream) : $this->metaData;
        }

        if (null !== $this->mimeType) {
            $res['mimeType'] = $this->mimeType;
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
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
        if (isset($map['content'])) {
            $model->content = $map['content'];
        }

        if (isset($map['metaData'])) {
            $model->metaData = metaData::fromMap($map['metaData']);
        }

        if (isset($map['mimeType'])) {
            $model->mimeType = $map['mimeType'];
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        return $model;
    }
}
