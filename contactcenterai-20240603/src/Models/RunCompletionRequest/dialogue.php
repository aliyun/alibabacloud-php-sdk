<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ContactCenterAI\V20240603\Models\RunCompletionRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ContactCenterAI\V20240603\Models\RunCompletionRequest\dialogue\sentences;

class dialogue extends Model
{
    /**
     * @var sentences[]
     */
    public $sentences;

    /**
     * @var string
     */
    public $sessionId;
    protected $_name = [
        'sentences' => 'Sentences',
        'sessionId' => 'SessionId',
    ];

    public function validate()
    {
        if (\is_array($this->sentences)) {
            Model::validateArray($this->sentences);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->sentences) {
            if (\is_array($this->sentences)) {
                $res['Sentences'] = [];
                $n1 = 0;
                foreach ($this->sentences as $item1) {
                    $res['Sentences'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->sessionId) {
            $res['SessionId'] = $this->sessionId;
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
        if (isset($map['Sentences'])) {
            if (!empty($map['Sentences'])) {
                $model->sentences = [];
                $n1 = 0;
                foreach ($map['Sentences'] as $item1) {
                    $model->sentences[$n1] = sentences::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['SessionId'])) {
            $model->sessionId = $map['SessionId'];
        }

        return $model;
    }
}
