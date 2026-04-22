<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListAgentSessionsResponseBody\jsonRpcResponse\result;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListAgentSessionsResponseBody\jsonRpcResponse\result\agentSessions\meta;

class agentSessions extends Model
{
    /**
     * @var meta
     */
    public $meta;

    /**
     * @var int
     */
    public $sessionCreatedAt;

    /**
     * @var string
     */
    public $sessionDescription;

    /**
     * @var string
     */
    public $sessionId;

    /**
     * @var string
     */
    public $sessionTitle;

    /**
     * @var int
     */
    public $sessionUpdatedAt;
    protected $_name = [
        'meta' => 'Meta',
        'sessionCreatedAt' => 'SessionCreatedAt',
        'sessionDescription' => 'SessionDescription',
        'sessionId' => 'SessionId',
        'sessionTitle' => 'SessionTitle',
        'sessionUpdatedAt' => 'SessionUpdatedAt',
    ];

    public function validate()
    {
        if (null !== $this->meta) {
            $this->meta->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->meta) {
            $res['Meta'] = null !== $this->meta ? $this->meta->toArray($noStream) : $this->meta;
        }

        if (null !== $this->sessionCreatedAt) {
            $res['SessionCreatedAt'] = $this->sessionCreatedAt;
        }

        if (null !== $this->sessionDescription) {
            $res['SessionDescription'] = $this->sessionDescription;
        }

        if (null !== $this->sessionId) {
            $res['SessionId'] = $this->sessionId;
        }

        if (null !== $this->sessionTitle) {
            $res['SessionTitle'] = $this->sessionTitle;
        }

        if (null !== $this->sessionUpdatedAt) {
            $res['SessionUpdatedAt'] = $this->sessionUpdatedAt;
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
        if (isset($map['Meta'])) {
            $model->meta = meta::fromMap($map['Meta']);
        }

        if (isset($map['SessionCreatedAt'])) {
            $model->sessionCreatedAt = $map['SessionCreatedAt'];
        }

        if (isset($map['SessionDescription'])) {
            $model->sessionDescription = $map['SessionDescription'];
        }

        if (isset($map['SessionId'])) {
            $model->sessionId = $map['SessionId'];
        }

        if (isset($map['SessionTitle'])) {
            $model->sessionTitle = $map['SessionTitle'];
        }

        if (isset($map['SessionUpdatedAt'])) {
            $model->sessionUpdatedAt = $map['SessionUpdatedAt'];
        }

        return $model;
    }
}
