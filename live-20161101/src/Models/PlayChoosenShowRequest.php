<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Tea\Model;

class PlayChoosenShowRequest extends Model
{
    /**
     * @var string
     */
    public $casterId;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $showId;
    protected $_name = [
        'casterId' => 'CasterId',
        'ownerId'  => 'OwnerId',
        'showId'   => 'ShowId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->casterId) {
            $res['CasterId'] = $this->casterId;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->showId) {
            $res['ShowId'] = $this->showId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PlayChoosenShowRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CasterId'])) {
            $model->casterId = $map['CasterId'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['ShowId'])) {
            $model->showId = $map['ShowId'];
        }

        return $model;
    }
}
