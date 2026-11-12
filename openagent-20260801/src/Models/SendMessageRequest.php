<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenAgent\V20260801\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\OpenAgent\V20260801\Models\SendMessageRequest\attachments;
use AlibabaCloud\SDK\OpenAgent\V20260801\Models\SendMessageRequest\resume;

class SendMessageRequest extends Model
{
    /**
     * @var attachments[]
     */
    public $attachments;

    /**
     * @var string
     */
    public $content;

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
    public $type;
    protected $_name = [
        'attachments' => 'attachments',
        'content' => 'content',
        'resume' => 'resume',
        'runId' => 'runId',
        'type' => 'type',
    ];

    public function validate()
    {
        if (\is_array($this->attachments)) {
            Model::validateArray($this->attachments);
        }
        if (\is_array($this->resume)) {
            Model::validateArray($this->resume);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->attachments) {
            if (\is_array($this->attachments)) {
                $res['attachments'] = [];
                $n1 = 0;
                foreach ($this->attachments as $item1) {
                    $res['attachments'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->content) {
            $res['content'] = $this->content;
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

        if (null !== $this->type) {
            $res['type'] = $this->type;
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
        if (isset($map['attachments'])) {
            if (!empty($map['attachments'])) {
                $model->attachments = [];
                $n1 = 0;
                foreach ($map['attachments'] as $item1) {
                    $model->attachments[$n1] = attachments::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['content'])) {
            $model->content = $map['content'];
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

        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
