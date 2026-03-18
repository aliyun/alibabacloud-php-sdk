<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Starrocks\V20221019\Models;

use AlibabaCloud\Dara\Model;

class UpdateBackupRequest extends Model
{
    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $backupTaskId;

    /**
     * @var string
     */
    public $description;
    protected $_name = [
        'regionId' => 'RegionId',
        'backupTaskId' => 'backupTaskId',
        'description' => 'description',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->backupTaskId) {
            $res['backupTaskId'] = $this->backupTaskId;
        }

        if (null !== $this->description) {
            $res['description'] = $this->description;
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
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['backupTaskId'])) {
            $model->backupTaskId = $map['backupTaskId'];
        }

        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        return $model;
    }
}
