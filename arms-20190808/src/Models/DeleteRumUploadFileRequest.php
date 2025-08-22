<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Dara\Model;

class DeleteRumUploadFileRequest extends Model
{
    /**
     * @var string
     */
    public $batchItems;

    /**
     * @var string
     */
    public $fileName;

    /**
     * @var string
     */
    public $pid;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $uuid;

    /**
     * @var string
     */
    public $versionId;
    protected $_name = [
        'batchItems' => 'BatchItems',
        'fileName' => 'FileName',
        'pid' => 'Pid',
        'regionId' => 'RegionId',
        'uuid' => 'Uuid',
        'versionId' => 'VersionId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->batchItems) {
            $res['BatchItems'] = $this->batchItems;
        }

        if (null !== $this->fileName) {
            $res['FileName'] = $this->fileName;
        }

        if (null !== $this->pid) {
            $res['Pid'] = $this->pid;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->uuid) {
            $res['Uuid'] = $this->uuid;
        }

        if (null !== $this->versionId) {
            $res['VersionId'] = $this->versionId;
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
        if (isset($map['BatchItems'])) {
            $model->batchItems = $map['BatchItems'];
        }

        if (isset($map['FileName'])) {
            $model->fileName = $map['FileName'];
        }

        if (isset($map['Pid'])) {
            $model->pid = $map['Pid'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['Uuid'])) {
            $model->uuid = $map['Uuid'];
        }

        if (isset($map['VersionId'])) {
            $model->versionId = $map['VersionId'];
        }

        return $model;
    }
}
