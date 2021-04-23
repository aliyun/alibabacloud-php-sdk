<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Tea\Model;

class AddPlaylistItemsRequest extends Model
{
    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $casterId;

    /**
     * @var string
     */
    public $programItems;

    /**
     * @var string
     */
    public $programId;

    /**
     * @var string
     */
    public $programConfig;
    protected $_name = [
        'ownerId'       => 'OwnerId',
        'casterId'      => 'CasterId',
        'programItems'  => 'ProgramItems',
        'programId'     => 'ProgramId',
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
        if (null !== $this->casterId) {
            $res['CasterId'] = $this->casterId;
        }
        if (null !== $this->programItems) {
            $res['ProgramItems'] = $this->programItems;
        }
        if (null !== $this->programId) {
            $res['ProgramId'] = $this->programId;
        }
        if (null !== $this->programConfig) {
            $res['ProgramConfig'] = $this->programConfig;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddPlaylistItemsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['CasterId'])) {
            $model->casterId = $map['CasterId'];
        }
        if (isset($map['ProgramItems'])) {
            $model->programItems = $map['ProgramItems'];
        }
        if (isset($map['ProgramId'])) {
            $model->programId = $map['ProgramId'];
        }
        if (isset($map['ProgramConfig'])) {
            $model->programConfig = $map['ProgramConfig'];
        }

        return $model;
    }
}
