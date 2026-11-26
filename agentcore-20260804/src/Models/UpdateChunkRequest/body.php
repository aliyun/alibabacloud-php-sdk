<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentCore\V20260804\Models\UpdateChunkRequest;

use AlibabaCloud\Dara\Model;

class body extends Model
{
    /**
     * @var string
     */
    public $chunkToken;

    /**
     * @var string
     */
    public $content;

    /**
     * @var bool
     */
    public $enabled;
    protected $_name = [
        'chunkToken' => 'chunkToken',
        'content' => 'content',
        'enabled' => 'enabled',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->chunkToken) {
            $res['chunkToken'] = $this->chunkToken;
        }

        if (null !== $this->content) {
            $res['content'] = $this->content;
        }

        if (null !== $this->enabled) {
            $res['enabled'] = $this->enabled;
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
        if (isset($map['chunkToken'])) {
            $model->chunkToken = $map['chunkToken'];
        }

        if (isset($map['content'])) {
            $model->content = $map['content'];
        }

        if (isset($map['enabled'])) {
            $model->enabled = $map['enabled'];
        }

        return $model;
    }
}
