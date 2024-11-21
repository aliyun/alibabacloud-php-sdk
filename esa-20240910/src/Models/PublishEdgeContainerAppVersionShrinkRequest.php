<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Tea\Model;

class PublishEdgeContainerAppVersionShrinkRequest extends Model
{
    /**
     * @description The application ID.
     *
     * This parameter is required.
     * @example app-88068867578379****
     *
     * @var string
     */
    public $appId;

    /**
     * @description Specifies whether to fully release the version. This parameter takes effect only when PublishType is set to region.
     *
     * @example true
     *
     * @var bool
     */
    public $fullRelease;

    /**
     * @description The release percentage. Valid values: 1 to 100. Default value: 100.
     *
     * @example 100
     *
     * @var int
     */
    public $percentage;

    /**
     * @description The environment to which you want to release the version. Valid values:
     *
     *   prod: the production environment.
     *   staging: the staging environment.
     *
     * This parameter is required.
     * @example prod
     *
     * @var string
     */
    public $publishEnv;

    /**
     * @description Specifies how the version is released. Valid values:
     *
     *   percentage: releases the version by percentage.
     *   region: releases the version by region.
     *
     * If you do not specify this parameter, the version is released by percentage by default.
     * @example percentage
     *
     * @var string
     */
    public $publishType;

    /**
     * @description The regions to which the version is released.
     *
     * @var string
     */
    public $regionsShrink;

    /**
     * @description The remarks. This parameter is empty by default.
     *
     * @example test publish app
     *
     * @var string
     */
    public $remarks;

    /**
     * @description The time when the application version starts to be released. If you do not specify this parameter, the current time is used by default.
     *
     * Specify the time in the ISO 8601 standard in the yyyy-MM-ddTHH:mm:ssZ format. The time must be in UTC.
     * @example 2023-06-05T16:00:00Z
     *
     * @var string
     */
    public $startTime;

    /**
     * @description The version ID.
     *
     * This parameter is required.
     * @example ver-87962637161651****
     *
     * @var string
     */
    public $versionId;
    protected $_name = [
        'appId'         => 'AppId',
        'fullRelease'   => 'FullRelease',
        'percentage'    => 'Percentage',
        'publishEnv'    => 'PublishEnv',
        'publishType'   => 'PublishType',
        'regionsShrink' => 'Regions',
        'remarks'       => 'Remarks',
        'startTime'     => 'StartTime',
        'versionId'     => 'VersionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->fullRelease) {
            $res['FullRelease'] = $this->fullRelease;
        }
        if (null !== $this->percentage) {
            $res['Percentage'] = $this->percentage;
        }
        if (null !== $this->publishEnv) {
            $res['PublishEnv'] = $this->publishEnv;
        }
        if (null !== $this->publishType) {
            $res['PublishType'] = $this->publishType;
        }
        if (null !== $this->regionsShrink) {
            $res['Regions'] = $this->regionsShrink;
        }
        if (null !== $this->remarks) {
            $res['Remarks'] = $this->remarks;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->versionId) {
            $res['VersionId'] = $this->versionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PublishEdgeContainerAppVersionShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['FullRelease'])) {
            $model->fullRelease = $map['FullRelease'];
        }
        if (isset($map['Percentage'])) {
            $model->percentage = $map['Percentage'];
        }
        if (isset($map['PublishEnv'])) {
            $model->publishEnv = $map['PublishEnv'];
        }
        if (isset($map['PublishType'])) {
            $model->publishType = $map['PublishType'];
        }
        if (isset($map['Regions'])) {
            $model->regionsShrink = $map['Regions'];
        }
        if (isset($map['Remarks'])) {
            $model->remarks = $map['Remarks'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['VersionId'])) {
            $model->versionId = $map['VersionId'];
        }

        return $model;
    }
}
