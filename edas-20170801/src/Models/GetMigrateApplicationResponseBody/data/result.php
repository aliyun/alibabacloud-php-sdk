<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\GetMigrateApplicationResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Edas\V20170801\Models\GetMigrateApplicationResponseBody\data\result\extraInfo;

class result extends Model
{
    /**
     * @var string
     */
    public $appDetailState;

    /**
     * @var int
     */
    public $binaryCleaned;

    /**
     * @var int
     */
    public $createTime;

    /**
     * @var extraInfo
     */
    public $extraInfo;

    /**
     * @var string
     */
    public $migrationId;

    /**
     * @var int
     */
    public $migrationType;

    /**
     * @var string
     */
    public $owner;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $state;

    /**
     * @var string
     */
    public $statePercent;

    /**
     * @var int
     */
    public $updateTime;
    protected $_name = [
        'appDetailState' => 'appDetailState',
        'binaryCleaned' => 'binaryCleaned',
        'createTime' => 'createTime',
        'extraInfo' => 'extraInfo',
        'migrationId' => 'migrationId',
        'migrationType' => 'migrationType',
        'owner' => 'owner',
        'regionId' => 'regionId',
        'state' => 'state',
        'statePercent' => 'statePercent',
        'updateTime' => 'updateTime',
    ];

    public function validate()
    {
        if (null !== $this->extraInfo) {
            $this->extraInfo->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appDetailState) {
            $res['appDetailState'] = $this->appDetailState;
        }

        if (null !== $this->binaryCleaned) {
            $res['binaryCleaned'] = $this->binaryCleaned;
        }

        if (null !== $this->createTime) {
            $res['createTime'] = $this->createTime;
        }

        if (null !== $this->extraInfo) {
            $res['extraInfo'] = null !== $this->extraInfo ? $this->extraInfo->toArray($noStream) : $this->extraInfo;
        }

        if (null !== $this->migrationId) {
            $res['migrationId'] = $this->migrationId;
        }

        if (null !== $this->migrationType) {
            $res['migrationType'] = $this->migrationType;
        }

        if (null !== $this->owner) {
            $res['owner'] = $this->owner;
        }

        if (null !== $this->regionId) {
            $res['regionId'] = $this->regionId;
        }

        if (null !== $this->state) {
            $res['state'] = $this->state;
        }

        if (null !== $this->statePercent) {
            $res['statePercent'] = $this->statePercent;
        }

        if (null !== $this->updateTime) {
            $res['updateTime'] = $this->updateTime;
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
        if (isset($map['appDetailState'])) {
            $model->appDetailState = $map['appDetailState'];
        }

        if (isset($map['binaryCleaned'])) {
            $model->binaryCleaned = $map['binaryCleaned'];
        }

        if (isset($map['createTime'])) {
            $model->createTime = $map['createTime'];
        }

        if (isset($map['extraInfo'])) {
            $model->extraInfo = extraInfo::fromMap($map['extraInfo']);
        }

        if (isset($map['migrationId'])) {
            $model->migrationId = $map['migrationId'];
        }

        if (isset($map['migrationType'])) {
            $model->migrationType = $map['migrationType'];
        }

        if (isset($map['owner'])) {
            $model->owner = $map['owner'];
        }

        if (isset($map['regionId'])) {
            $model->regionId = $map['regionId'];
        }

        if (isset($map['state'])) {
            $model->state = $map['state'];
        }

        if (isset($map['statePercent'])) {
            $model->statePercent = $map['statePercent'];
        }

        if (isset($map['updateTime'])) {
            $model->updateTime = $map['updateTime'];
        }

        return $model;
    }
}
