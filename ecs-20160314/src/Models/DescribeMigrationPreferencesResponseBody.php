<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20160314\Models;

use AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeMigrationPreferencesResponseBody\targetZoneIdSet;
use AlibabaCloud\Tea\Model;

class DescribeMigrationPreferencesResponseBody extends Model
{
    /**
     * @var string
     */
    public $migrationNetworkType;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var targetZoneIdSet
     */
    public $targetZoneIdSet;
    protected $_name = [
        'migrationNetworkType' => 'MigrationNetworkType',
        'regionId'             => 'RegionId',
        'requestId'            => 'RequestId',
        'targetZoneIdSet'      => 'TargetZoneIdSet',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->migrationNetworkType) {
            $res['MigrationNetworkType'] = $this->migrationNetworkType;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->targetZoneIdSet) {
            $res['TargetZoneIdSet'] = null !== $this->targetZoneIdSet ? $this->targetZoneIdSet->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeMigrationPreferencesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MigrationNetworkType'])) {
            $model->migrationNetworkType = $map['MigrationNetworkType'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TargetZoneIdSet'])) {
            $model->targetZoneIdSet = targetZoneIdSet::fromMap($map['TargetZoneIdSet']);
        }

        return $model;
    }
}
