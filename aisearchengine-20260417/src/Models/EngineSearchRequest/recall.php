<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiSearchEngine\V20260417\Models\EngineSearchRequest;

use AlibabaCloud\Dara\Model;

class recall extends Model
{
    /**
     * @var bool
     */
    public $closeRecallAsr;

    /**
     * @var bool
     */
    public $needMergeSegments;
    protected $_name = [
        'closeRecallAsr' => 'closeRecallAsr',
        'needMergeSegments' => 'needMergeSegments',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->closeRecallAsr) {
            $res['closeRecallAsr'] = $this->closeRecallAsr;
        }

        if (null !== $this->needMergeSegments) {
            $res['needMergeSegments'] = $this->needMergeSegments;
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
        if (isset($map['closeRecallAsr'])) {
            $model->closeRecallAsr = $map['closeRecallAsr'];
        }

        if (isset($map['needMergeSegments'])) {
            $model->needMergeSegments = $map['needMergeSegments'];
        }

        return $model;
    }
}
