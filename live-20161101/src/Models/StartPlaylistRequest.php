<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Tea\Model;

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
    public $resumeMode;

    /**
     * @var string
     */
    public $startItemId;
    protected $_name = [
        'offset'      => 'Offset',
        'ownerId'     => 'OwnerId',
        'programId'   => 'ProgramId',
        'resumeMode'  => 'ResumeMode',
        'startItemId' => 'StartItemId',
    ];

    public function validate()
    {
    }

    public function toMap()
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
        if (null !== $this->resumeMode) {
            $res['ResumeMode'] = $this->resumeMode;
        }
        if (null !== $this->startItemId) {
            $res['StartItemId'] = $this->startItemId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return StartPlaylistRequest
     */
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
        if (isset($map['ResumeMode'])) {
            $model->resumeMode = $map['ResumeMode'];
        }
        if (isset($map['StartItemId'])) {
            $model->startItemId = $map['StartItemId'];
        }

        return $model;
    }
}
