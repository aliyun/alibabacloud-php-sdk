<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Neuron\V20211115\Models;

use AlibabaCloud\Dara\Model;

class MqConsoleLinkResult extends Model
{
    /**
     * @var string
     */
    public $groupLinkUrl;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $topicLinkUrl;
    protected $_name = [
        'groupLinkUrl' => 'groupLinkUrl',
        'requestId' => 'requestId',
        'topicLinkUrl' => 'topicLinkUrl',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->groupLinkUrl) {
            $res['groupLinkUrl'] = $this->groupLinkUrl;
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        if (null !== $this->topicLinkUrl) {
            $res['topicLinkUrl'] = $this->topicLinkUrl;
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
        if (isset($map['groupLinkUrl'])) {
            $model->groupLinkUrl = $map['groupLinkUrl'];
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        if (isset($map['topicLinkUrl'])) {
            $model->topicLinkUrl = $map['topicLinkUrl'];
        }

        return $model;
    }
}
