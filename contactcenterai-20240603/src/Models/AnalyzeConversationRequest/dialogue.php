<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ContactCenterAI\V20240603\Models\AnalyzeConversationRequest;

use AlibabaCloud\SDK\ContactCenterAI\V20240603\Models\AnalyzeConversationRequest\dialogue\sentences;
use AlibabaCloud\Tea\Model;

class dialogue extends Model
{
    /**
     * @description This parameter is required.
     *
     * @var sentences[]
     */
    public $sentences;

    /**
     * @example session-01
     *
     * @var string
     */
    public $sessionId;
    protected $_name = [
        'sentences' => 'sentences',
        'sessionId' => 'sessionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->sentences) {
            $res['sentences'] = [];
            if (null !== $this->sentences && \is_array($this->sentences)) {
                $n = 0;
                foreach ($this->sentences as $item) {
                    $res['sentences'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->sessionId) {
            $res['sessionId'] = $this->sessionId;
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
        if (isset($map['sentences'])) {
            if (!empty($map['sentences'])) {
                $model->sentences = [];
                $n                = 0;
                foreach ($map['sentences'] as $item) {
                    $model->sentences[$n++] = null !== $item ? sentences::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['sessionId'])) {
            $model->sessionId = $map['sessionId'];
        }

        return $model;
    }
}
