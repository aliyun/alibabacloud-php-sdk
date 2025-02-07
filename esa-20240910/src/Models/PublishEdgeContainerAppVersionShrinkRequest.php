<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Dara\Model;

class PublishEdgeContainerAppVersionShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $appId;
    /**
     * @var bool
     */
    public $fullRelease;
    /**
     * @var int
     */
    public $percentage;
    /**
     * @var string
     */
    public $publishEnv;
    /**
     * @var string
     */
    public $publishType;
    /**
     * @var string
     */
    public $regionsShrink;
    /**
     * @var string
     */
    public $remarks;
    /**
     * @var string
     */
    public $startTime;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
