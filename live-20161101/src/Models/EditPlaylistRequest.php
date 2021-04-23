<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Tea\Model;

class EditPlaylistRequest extends Model
{
    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $programId;

    /**
     * @var string
     */
    public $programItems;

    /**
     * @var string
     */
    public $programConfig;
    protected $_name = [
        'ownerId'       => 'OwnerId',
        'programId'     => 'ProgramId',
        'programItems'  => 'ProgramItems',
        'programConfig' => 'ProgramConfig',
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
        if (null !== $this->programItems) {
            $res['ProgramItems'] = $this->programItems;
        }
        if (null !== $this->programConfig) {
            $res['ProgramConfig'] = $this->programConfig;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return EditPlaylistRequest
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
        if (isset($map['ProgramItems'])) {
            $model->programItems = $map['ProgramItems'];
        }
        if (isset($map['ProgramConfig'])) {
            $model->programConfig = $map['ProgramConfig'];
        }

        return $model;
    }
}
