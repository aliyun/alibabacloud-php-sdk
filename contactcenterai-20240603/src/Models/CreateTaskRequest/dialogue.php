<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ContactCenterAI\V20240603\Models\CreateTaskRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ContactCenterAI\V20240603\Models\CreateTaskRequest\dialogue\sentences;

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
        'sentences' => 'sentences',
        'sessionId' => 'sessionId',
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
                $res['sentences'] = [];
                $n1 = 0;
                foreach ($this->sentences as $item1) {
                    $res['sentences'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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
        if (isset($map['sentences'])) {
            if (!empty($map['sentences'])) {
                $model->sentences = [];
                $n1 = 0;
                foreach ($map['sentences'] as $item1) {
                    $model->sentences[$n1++] = sentences::fromMap($item1);
                }
            }
        }

        if (isset($map['sessionId'])) {
            $model->sessionId = $map['sessionId'];
        }

        return $model;
    }
}
