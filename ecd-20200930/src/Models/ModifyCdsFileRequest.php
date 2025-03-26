<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Dara\Model;

class ModifyCdsFileRequest extends Model
{
    /**
     * @var string
     */
    public $cdsId;

    /**
     * @var string
     */
    public $conflictPolicy;

    /**
     * @var string
     */
    public $endUserId;

    /**
     * @var string
     */
    public $fileId;

    /**
     * @var string
     */
    public $fileName;

    /**
     * @var string
     */
    public $groupId;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'cdsId' => 'CdsId',
        'conflictPolicy' => 'ConflictPolicy',
        'endUserId' => 'EndUserId',
        'fileId' => 'FileId',
        'fileName' => 'FileName',
        'groupId' => 'GroupId',
        'regionId' => 'RegionId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cdsId) {
            $res['CdsId'] = $this->cdsId;
        }

        if (null !== $this->conflictPolicy) {
            $res['ConflictPolicy'] = $this->conflictPolicy;
        }

        if (null !== $this->endUserId) {
            $res['EndUserId'] = $this->endUserId;
        }

        if (null !== $this->fileId) {
            $res['FileId'] = $this->fileId;
        }

        if (null !== $this->fileName) {
            $res['FileName'] = $this->fileName;
        }

        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
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
        if (isset($map['CdsId'])) {
            $model->cdsId = $map['CdsId'];
        }

        if (isset($map['ConflictPolicy'])) {
            $model->conflictPolicy = $map['ConflictPolicy'];
        }

        if (isset($map['EndUserId'])) {
            $model->endUserId = $map['EndUserId'];
        }

        if (isset($map['FileId'])) {
            $model->fileId = $map['FileId'];
        }

        if (isset($map['FileName'])) {
            $model->fileName = $map['FileName'];
        }

        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
