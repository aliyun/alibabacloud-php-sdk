<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentCore\V20260804\Models\UpdateChunksRequest\body;

use AlibabaCloud\Dara\Model;

class chunks extends Model
{
    /**
     * @var int
     */
    public $chunkSeq;

    /**
     * @var string
     */
    public $chunkToken;

    /**
     * @var bool
     */
    public $enabled;
    protected $_name = [
        'chunkSeq' => 'chunkSeq',
        'chunkToken' => 'chunkToken',
        'enabled' => 'enabled',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->chunkSeq) {
            $res['chunkSeq'] = $this->chunkSeq;
        }

        if (null !== $this->chunkToken) {
            $res['chunkToken'] = $this->chunkToken;
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
        if (isset($map['chunkSeq'])) {
            $model->chunkSeq = $map['chunkSeq'];
        }

        if (isset($map['chunkToken'])) {
            $model->chunkToken = $map['chunkToken'];
        }

        if (isset($map['enabled'])) {
            $model->enabled = $map['enabled'];
        }

        return $model;
    }
}
