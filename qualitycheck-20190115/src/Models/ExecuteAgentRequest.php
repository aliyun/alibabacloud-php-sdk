<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models;

use AlibabaCloud\Dara\Model;

class ExecuteAgentRequest extends Model
{
    /**
     * @var int
     */
    public $baseMeAgentId;

    /**
     * @var string
     */
    public $jsonStr;

    /**
     * @var bool
     */
    public $stream;
    protected $_name = [
        'baseMeAgentId' => 'BaseMeAgentId',
        'jsonStr' => 'JsonStr',
        'stream' => 'Stream',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->baseMeAgentId) {
            $res['BaseMeAgentId'] = $this->baseMeAgentId;
        }

        if (null !== $this->jsonStr) {
            $res['JsonStr'] = $this->jsonStr;
        }

        if (null !== $this->stream) {
            $res['Stream'] = $this->stream;
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
        if (isset($map['BaseMeAgentId'])) {
            $model->baseMeAgentId = $map['BaseMeAgentId'];
        }

        if (isset($map['JsonStr'])) {
            $model->jsonStr = $map['JsonStr'];
        }

        if (isset($map['Stream'])) {
            $model->stream = $map['Stream'];
        }

        return $model;
    }
}
