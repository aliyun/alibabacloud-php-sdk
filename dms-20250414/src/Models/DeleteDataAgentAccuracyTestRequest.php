<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dms\V20250414\Models;

use AlibabaCloud\Dara\Model;

class DeleteDataAgentAccuracyTestRequest extends Model
{
    /**
     * @var string
     */
    public $accuracyTestInsId;

    /**
     * @var string
     */
    public $dmsUnit;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'accuracyTestInsId' => 'AccuracyTestInsId',
        'dmsUnit' => 'DmsUnit',
        'regionId' => 'RegionId',
        'workspaceId' => 'WorkspaceId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accuracyTestInsId) {
            $res['AccuracyTestInsId'] = $this->accuracyTestInsId;
        }

        if (null !== $this->dmsUnit) {
            $res['DmsUnit'] = $this->dmsUnit;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->workspaceId) {
            $res['WorkspaceId'] = $this->workspaceId;
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
        if (isset($map['AccuracyTestInsId'])) {
            $model->accuracyTestInsId = $map['AccuracyTestInsId'];
        }

        if (isset($map['DmsUnit'])) {
            $model->dmsUnit = $map['DmsUnit'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        return $model;
    }
}
