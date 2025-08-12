<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Dara\Model;

class StartPlaylistRequest extends Model
{
    /**
     * @var int
     */
    public $offset;

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
    public $regionId;

    /**
     * @var string
     */
    public $resumeMode;

    /**
     * @var string
     */
    public $startItemId;
    protected $_name = [
        'offset' => 'Offset',
        'ownerId' => 'OwnerId',
        'programId' => 'ProgramId',
        'regionId' => 'RegionId',
        'resumeMode' => 'ResumeMode',
        'startItemId' => 'StartItemId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->offset) {
            $res['Offset'] = $this->offset;
        }

        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }

        if (null !== $this->programId) {
            $res['ProgramId'] = $this->programId;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->resumeMode) {
            $res['ResumeMode'] = $this->resumeMode;
        }

        if (null !== $this->startItemId) {
            $res['StartItemId'] = $this->startItemId;
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
        if (isset($map['Offset'])) {
            $model->offset = $map['Offset'];
        }

        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }

        if (isset($map['ProgramId'])) {
            $model->programId = $map['ProgramId'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['ResumeMode'])) {
            $model->resumeMode = $map['ResumeMode'];
        }

        if (isset($map['StartItemId'])) {
            $model->startItemId = $map['StartItemId'];
        }

        return $model;
    }
}
