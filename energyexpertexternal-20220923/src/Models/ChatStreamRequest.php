<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models;

use AlibabaCloud\Dara\Model;

class ChatStreamRequest extends Model
{
    /**
     * @var int[]
     */
    public $documentIds;

    /**
     * @var string
     */
    public $question;

    /**
     * @var string
     */
    public $sessionId;
    protected $_name = [
        'documentIds' => 'documentIds',
        'question' => 'question',
        'sessionId' => 'sessionId',
    ];

    public function validate()
    {
        if (\is_array($this->documentIds)) {
            Model::validateArray($this->documentIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->documentIds) {
            if (\is_array($this->documentIds)) {
                $res['documentIds'] = [];
                $n1 = 0;
                foreach ($this->documentIds as $item1) {
                    $res['documentIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->question) {
            $res['question'] = $this->question;
        }

        if (null !== $this->sessionId) {
            $res['sessionId'] = $this->sessionId;
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
        if (isset($map['documentIds'])) {
            if (!empty($map['documentIds'])) {
                $model->documentIds = [];
                $n1 = 0;
                foreach ($map['documentIds'] as $item1) {
                    $model->documentIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['question'])) {
            $model->question = $map['question'];
        }

        if (isset($map['sessionId'])) {
            $model->sessionId = $map['sessionId'];
        }

        return $model;
    }
}
