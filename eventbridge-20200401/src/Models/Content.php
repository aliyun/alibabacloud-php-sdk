<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models;

use AlibabaCloud\Dara\Model;

class Content extends Model
{
    /**
     * @var AguiMessage[]
     */
    public $messageAttachments;

    /**
     * @var QueryAttachment[]
     */
    public $queryAttachments;

    /**
     * @var string[]
     */
    public $textAttachments;
    protected $_name = [
        'messageAttachments' => 'MessageAttachments',
        'queryAttachments' => 'QueryAttachments',
        'textAttachments' => 'TextAttachments',
    ];

    public function validate()
    {
        if (\is_array($this->messageAttachments)) {
            Model::validateArray($this->messageAttachments);
        }
        if (\is_array($this->queryAttachments)) {
            Model::validateArray($this->queryAttachments);
        }
        if (\is_array($this->textAttachments)) {
            Model::validateArray($this->textAttachments);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->messageAttachments) {
            if (\is_array($this->messageAttachments)) {
                $res['MessageAttachments'] = [];
                $n1 = 0;
                foreach ($this->messageAttachments as $item1) {
                    $res['MessageAttachments'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->queryAttachments) {
            if (\is_array($this->queryAttachments)) {
                $res['QueryAttachments'] = [];
                $n1 = 0;
                foreach ($this->queryAttachments as $item1) {
                    $res['QueryAttachments'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->textAttachments) {
            if (\is_array($this->textAttachments)) {
                $res['TextAttachments'] = [];
                $n1 = 0;
                foreach ($this->textAttachments as $item1) {
                    $res['TextAttachments'][$n1] = $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['MessageAttachments'])) {
            if (!empty($map['MessageAttachments'])) {
                $model->messageAttachments = [];
                $n1 = 0;
                foreach ($map['MessageAttachments'] as $item1) {
                    $model->messageAttachments[$n1] = AguiMessage::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['QueryAttachments'])) {
            if (!empty($map['QueryAttachments'])) {
                $model->queryAttachments = [];
                $n1 = 0;
                foreach ($map['QueryAttachments'] as $item1) {
                    $model->queryAttachments[$n1] = QueryAttachment::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['TextAttachments'])) {
            if (!empty($map['TextAttachments'])) {
                $model->textAttachments = [];
                $n1 = 0;
                foreach ($map['TextAttachments'] as $item1) {
                    $model->textAttachments[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
