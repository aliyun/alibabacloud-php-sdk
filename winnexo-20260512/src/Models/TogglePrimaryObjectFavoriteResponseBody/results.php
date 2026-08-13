<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WinNexo\V20260512\Models\TogglePrimaryObjectFavoriteResponseBody;

use AlibabaCloud\Dara\Model;

class results extends Model
{
    /**
     * @var bool
     */
    public $isFavorited;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $objectId;

    /**
     * @var bool
     */
    public $success;
    protected $_name = [
        'isFavorited' => 'isFavorited',
        'message' => 'message',
        'objectId' => 'objectId',
        'success' => 'success',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->isFavorited) {
            $res['isFavorited'] = $this->isFavorited;
        }

        if (null !== $this->message) {
            $res['message'] = $this->message;
        }

        if (null !== $this->objectId) {
            $res['objectId'] = $this->objectId;
        }

        if (null !== $this->success) {
            $res['success'] = $this->success;
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
        if (isset($map['isFavorited'])) {
            $model->isFavorited = $map['isFavorited'];
        }

        if (isset($map['message'])) {
            $model->message = $map['message'];
        }

        if (isset($map['objectId'])) {
            $model->objectId = $map['objectId'];
        }

        if (isset($map['success'])) {
            $model->success = $map['success'];
        }

        return $model;
    }
}
