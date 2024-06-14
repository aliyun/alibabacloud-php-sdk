<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ContactCenterAI\V20240603\Models\RunCompletionRequest;

use AlibabaCloud\SDK\ContactCenterAI\V20240603\Models\RunCompletionRequest\dialogue\sentences;
use AlibabaCloud\Tea\Model;

class dialogue extends Model
{
    /**
     * @var sentences[]
     */
    public $sentences;

    /**
     * @example d25zc9c7004f8dad2b454d
     *
     * @var string
     */
    public $sessionId;
    protected $_name = [
        'sentences' => 'Sentences',
        'sessionId' => 'SessionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->sentences) {
            $res['Sentences'] = [];
            if (null !== $this->sentences && \is_array($this->sentences)) {
                $n = 0;
                foreach ($this->sentences as $item) {
                    $res['Sentences'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->sessionId) {
            $res['SessionId'] = $this->sessionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dialogue
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Sentences'])) {
            if (!empty($map['Sentences'])) {
                $model->sentences = [];
                $n                = 0;
                foreach ($map['Sentences'] as $item) {
                    $model->sentences[$n++] = null !== $item ? sentences::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['SessionId'])) {
            $model->sessionId = $map['SessionId'];
        }

        return $model;
    }
}
