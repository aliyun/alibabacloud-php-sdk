<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Tea\Model;

class StopPlaylistRequest extends Model
{
    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $programId;
    protected $_name = [
        'ownerId'   => 'OwnerId',
        'programId' => 'ProgramId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->programId) {
            $res['ProgramId'] = $this->programId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return StopPlaylistRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['ProgramId'])) {
            $model->programId = $map['ProgramId'];
        }

        return $model;
    }
}
