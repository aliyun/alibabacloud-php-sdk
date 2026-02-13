<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models;

use AlibabaCloud\Dara\Model;

class AISearchStreamRequest extends Model
{
    /**
     * @var string
     */
    public $folderId;

    /**
     * @var AISearchMessageItem[]
     */
    public $message;

    /**
     * @var string
     */
    public $question;

    /**
     * @var string[]
     */
    public $resourceTypeNeeded;
    protected $_name = [
        'folderId' => 'folderId',
        'message' => 'message',
        'question' => 'question',
        'resourceTypeNeeded' => 'resourceTypeNeeded',
    ];

    public function validate()
    {
        if (\is_array($this->message)) {
            Model::validateArray($this->message);
        }
        if (\is_array($this->resourceTypeNeeded)) {
            Model::validateArray($this->resourceTypeNeeded);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->folderId) {
            $res['folderId'] = $this->folderId;
        }

        if (null !== $this->message) {
            if (\is_array($this->message)) {
                $res['message'] = [];
                $n1 = 0;
                foreach ($this->message as $item1) {
                    $res['message'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->question) {
            $res['question'] = $this->question;
        }

        if (null !== $this->resourceTypeNeeded) {
            if (\is_array($this->resourceTypeNeeded)) {
                $res['resourceTypeNeeded'] = [];
                $n1 = 0;
                foreach ($this->resourceTypeNeeded as $item1) {
                    $res['resourceTypeNeeded'][$n1] = $item1;
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
        if (isset($map['folderId'])) {
            $model->folderId = $map['folderId'];
        }

        if (isset($map['message'])) {
            if (!empty($map['message'])) {
                $model->message = [];
                $n1 = 0;
                foreach ($map['message'] as $item1) {
                    $model->message[$n1] = AISearchMessageItem::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['question'])) {
            $model->question = $map['question'];
        }

        if (isset($map['resourceTypeNeeded'])) {
            if (!empty($map['resourceTypeNeeded'])) {
                $model->resourceTypeNeeded = [];
                $n1 = 0;
                foreach ($map['resourceTypeNeeded'] as $item1) {
                    $model->resourceTypeNeeded[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
