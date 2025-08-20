<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\LingMou\V20250527\Models;

use AlibabaCloud\Dara\Model;

class ChatSessionInfo extends Model
{
    /**
     * @var int
     */
    public $createdAt;

    /**
     * @var int
     */
    public $mainAccountId;

    /**
     * @var string
     */
    public $sessionId;
    protected $_name = [
        'createdAt' => 'createdAt',
        'mainAccountId' => 'mainAccountId',
        'sessionId' => 'sessionId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createdAt) {
            $res['createdAt'] = $this->createdAt;
        }

        if (null !== $this->mainAccountId) {
            $res['mainAccountId'] = $this->mainAccountId;
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
        if (isset($map['createdAt'])) {
            $model->createdAt = $map['createdAt'];
        }

        if (isset($map['mainAccountId'])) {
            $model->mainAccountId = $map['mainAccountId'];
        }

        if (isset($map['sessionId'])) {
            $model->sessionId = $map['sessionId'];
        }

        return $model;
    }
}
