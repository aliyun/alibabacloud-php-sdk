<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models;

use AlibabaCloud\Dara\Model;

class ModifySupabaseProjectResourceRequest extends Model
{
    /**
     * @var string
     */
    public $modifyType;

    /**
     * @var string
     */
    public $projectId;

    /**
     * @var string
     */
    public $projectSpec;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var int
     */
    public $storageSize;
    protected $_name = [
        'modifyType' => 'ModifyType',
        'projectId' => 'ProjectId',
        'projectSpec' => 'ProjectSpec',
        'regionId' => 'RegionId',
        'storageSize' => 'StorageSize',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->modifyType) {
            $res['ModifyType'] = $this->modifyType;
        }

        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }

        if (null !== $this->projectSpec) {
            $res['ProjectSpec'] = $this->projectSpec;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->storageSize) {
            $res['StorageSize'] = $this->storageSize;
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
        if (isset($map['ModifyType'])) {
            $model->modifyType = $map['ModifyType'];
        }

        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }

        if (isset($map['ProjectSpec'])) {
            $model->projectSpec = $map['ProjectSpec'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['StorageSize'])) {
            $model->storageSize = $map['StorageSize'];
        }

        return $model;
    }
}
