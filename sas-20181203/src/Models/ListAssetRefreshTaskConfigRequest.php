<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;

class ListAssetRefreshTaskConfigRequest extends Model
{
    /**
     * @var int
     */
    public $refreshConfigType;
    /**
     * @var string
     */
    public $regionId;
    /**
     * @var int
     */
    public $targetId;
    protected $_name = [
        'refreshConfigType' => 'RefreshConfigType',
        'regionId'          => 'RegionId',
        'targetId'          => 'TargetId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->refreshConfigType) {
            $res['RefreshConfigType'] = $this->refreshConfigType;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->targetId) {
            $res['TargetId'] = $this->targetId;
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
        if (isset($map['RefreshConfigType'])) {
            $model->refreshConfigType = $map['RefreshConfigType'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['TargetId'])) {
            $model->targetId = $map['TargetId'];
        }

        return $model;
    }
}
