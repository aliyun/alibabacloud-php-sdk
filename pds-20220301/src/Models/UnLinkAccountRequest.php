<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pds\V20220301\Models;

use AlibabaCloud\Dara\Model;

class UnLinkAccountRequest extends Model
{
    /**
     * @var string
     */
    public $extra;

    /**
     * @var string
     */
    public $identity;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $userId;
    protected $_name = [
        'extra' => 'extra',
        'identity' => 'identity',
        'type' => 'type',
        'userId' => 'user_id',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->extra) {
            $res['extra'] = $this->extra;
        }

        if (null !== $this->identity) {
            $res['identity'] = $this->identity;
        }

        if (null !== $this->type) {
            $res['type'] = $this->type;
        }

        if (null !== $this->userId) {
            $res['user_id'] = $this->userId;
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
        if (isset($map['extra'])) {
            $model->extra = $map['extra'];
        }

        if (isset($map['identity'])) {
            $model->identity = $map['identity'];
        }

        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        if (isset($map['user_id'])) {
            $model->userId = $map['user_id'];
        }

        return $model;
    }
}
