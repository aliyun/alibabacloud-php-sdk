<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pds\V20220301\Models;

use AlibabaCloud\Tea\Model;

class UnLinkAccountRequest extends Model
{
    /**
     * @example 1
     *
     * @var string
     */
    public $extra;

    /**
     * @example 139****
     *
     * @var string
     */
    public $identity;

    /**
     * @example mobile
     *
     * @var string
     */
    public $type;

    /**
     * @example uid1
     *
     * @var string
     */
    public $userId;
    protected $_name = [
        'extra'    => 'extra',
        'identity' => 'identity',
        'type'     => 'type',
        'userId'   => 'user_id',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return UnLinkAccountRequest
     */
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
