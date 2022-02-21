<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212\Models;

use AlibabaCloud\Tea\Model;

class StopTransferStreamRequest extends Model
{
    /**
     * @var string
     */
    public $id;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $transcode;
    protected $_name = [
        'id'        => 'Id',
        'ownerId'   => 'OwnerId',
        'transcode' => 'Transcode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->transcode) {
            $res['Transcode'] = $this->transcode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return StopTransferStreamRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['Transcode'])) {
            $model->transcode = $map['Transcode'];
        }

        return $model;
    }
}
