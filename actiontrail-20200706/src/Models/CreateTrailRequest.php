<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Actiontrail\V20200706\Models;

use AlibabaCloud\Dara\Model;

class CreateTrailRequest extends Model
{
    /**
     * @var string
     */
    public $eventRW;

    /**
     * @var bool
     */
    public $isOrganizationTrail;

    /**
     * @var string
     */
    public $maxComputeProjectArn;

    /**
     * @var string
     */
    public $maxComputeWriteRoleArn;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $ossBucketName;

    /**
     * @var string
     */
    public $ossKeyPrefix;

    /**
     * @var string
     */
    public $ossWriteRoleArn;

    /**
     * @var string
     */
    public $slsProjectArn;

    /**
     * @var string
     */
    public $slsWriteRoleArn;

    /**
     * @var string
     */
    public $trailRegion;
    protected $_name = [
        'eventRW' => 'EventRW',
        'isOrganizationTrail' => 'IsOrganizationTrail',
        'maxComputeProjectArn' => 'MaxComputeProjectArn',
        'maxComputeWriteRoleArn' => 'MaxComputeWriteRoleArn',
        'name' => 'Name',
        'ossBucketName' => 'OssBucketName',
        'ossKeyPrefix' => 'OssKeyPrefix',
        'ossWriteRoleArn' => 'OssWriteRoleArn',
        'slsProjectArn' => 'SlsProjectArn',
        'slsWriteRoleArn' => 'SlsWriteRoleArn',
        'trailRegion' => 'TrailRegion',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->eventRW) {
            $res['EventRW'] = $this->eventRW;
        }

        if (null !== $this->isOrganizationTrail) {
            $res['IsOrganizationTrail'] = $this->isOrganizationTrail;
        }

        if (null !== $this->maxComputeProjectArn) {
            $res['MaxComputeProjectArn'] = $this->maxComputeProjectArn;
        }

        if (null !== $this->maxComputeWriteRoleArn) {
            $res['MaxComputeWriteRoleArn'] = $this->maxComputeWriteRoleArn;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->ossBucketName) {
            $res['OssBucketName'] = $this->ossBucketName;
        }

        if (null !== $this->ossKeyPrefix) {
            $res['OssKeyPrefix'] = $this->ossKeyPrefix;
        }

        if (null !== $this->ossWriteRoleArn) {
            $res['OssWriteRoleArn'] = $this->ossWriteRoleArn;
        }

        if (null !== $this->slsProjectArn) {
            $res['SlsProjectArn'] = $this->slsProjectArn;
        }

        if (null !== $this->slsWriteRoleArn) {
            $res['SlsWriteRoleArn'] = $this->slsWriteRoleArn;
        }

        if (null !== $this->trailRegion) {
            $res['TrailRegion'] = $this->trailRegion;
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
        if (isset($map['EventRW'])) {
            $model->eventRW = $map['EventRW'];
        }

        if (isset($map['IsOrganizationTrail'])) {
            $model->isOrganizationTrail = $map['IsOrganizationTrail'];
        }

        if (isset($map['MaxComputeProjectArn'])) {
            $model->maxComputeProjectArn = $map['MaxComputeProjectArn'];
        }

        if (isset($map['MaxComputeWriteRoleArn'])) {
            $model->maxComputeWriteRoleArn = $map['MaxComputeWriteRoleArn'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['OssBucketName'])) {
            $model->ossBucketName = $map['OssBucketName'];
        }

        if (isset($map['OssKeyPrefix'])) {
            $model->ossKeyPrefix = $map['OssKeyPrefix'];
        }

        if (isset($map['OssWriteRoleArn'])) {
            $model->ossWriteRoleArn = $map['OssWriteRoleArn'];
        }

        if (isset($map['SlsProjectArn'])) {
            $model->slsProjectArn = $map['SlsProjectArn'];
        }

        if (isset($map['SlsWriteRoleArn'])) {
            $model->slsWriteRoleArn = $map['SlsWriteRoleArn'];
        }

        if (isset($map['TrailRegion'])) {
            $model->trailRegion = $map['TrailRegion'];
        }

        return $model;
    }
}
