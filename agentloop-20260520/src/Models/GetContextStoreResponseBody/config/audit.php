<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentLoop\V20260520\Models\GetContextStoreResponseBody\config;

use AlibabaCloud\Dara\Model;

class audit extends Model
{
    /**
     * @var bool
     */
    public $droppedCandidates;

    /**
     * @var string
     */
    public $queryMode;

    /**
     * @var int
     */
    public $retentionDays;
    protected $_name = [
        'droppedCandidates' => 'droppedCandidates',
        'queryMode' => 'queryMode',
        'retentionDays' => 'retentionDays',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->droppedCandidates) {
            $res['droppedCandidates'] = $this->droppedCandidates;
        }

        if (null !== $this->queryMode) {
            $res['queryMode'] = $this->queryMode;
        }

        if (null !== $this->retentionDays) {
            $res['retentionDays'] = $this->retentionDays;
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
        if (isset($map['droppedCandidates'])) {
            $model->droppedCandidates = $map['droppedCandidates'];
        }

        if (isset($map['queryMode'])) {
            $model->queryMode = $map['queryMode'];
        }

        if (isset($map['retentionDays'])) {
            $model->retentionDays = $map['retentionDays'];
        }

        return $model;
    }
}
