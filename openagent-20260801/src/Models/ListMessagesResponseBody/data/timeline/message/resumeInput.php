<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenAgent\V20260801\Models\ListMessagesResponseBody\data\timeline\message;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\OpenAgent\V20260801\Models\ListMessagesResponseBody\data\timeline\message\resumeInput\resume;

class resumeInput extends Model
{
    /**
     * @var string
     */
    public $resolvedAt;

    /**
     * @var resume[]
     */
    public $resume;

    /**
     * @var string
     */
    public $runId;

    /**
     * @var string
     */
    public $source;
    protected $_name = [
        'resolvedAt' => 'resolvedAt',
        'resume' => 'resume',
        'runId' => 'runId',
        'source' => 'source',
    ];

    public function validate()
    {
        if (\is_array($this->resume)) {
            Model::validateArray($this->resume);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->resolvedAt) {
            $res['resolvedAt'] = $this->resolvedAt;
        }

        if (null !== $this->resume) {
            if (\is_array($this->resume)) {
                $res['resume'] = [];
                $n1 = 0;
                foreach ($this->resume as $item1) {
                    $res['resume'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->runId) {
            $res['runId'] = $this->runId;
        }

        if (null !== $this->source) {
            $res['source'] = $this->source;
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
        if (isset($map['resolvedAt'])) {
            $model->resolvedAt = $map['resolvedAt'];
        }

        if (isset($map['resume'])) {
            if (!empty($map['resume'])) {
                $model->resume = [];
                $n1 = 0;
                foreach ($map['resume'] as $item1) {
                    $model->resume[$n1] = resume::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['runId'])) {
            $model->runId = $map['runId'];
        }

        if (isset($map['source'])) {
            $model->source = $map['source'];
        }

        return $model;
    }
}
