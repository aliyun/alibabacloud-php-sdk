<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\GetImageDistributeInfoResponseBody\data;

use AlibabaCloud\Dara\Model;

class imageRegionDistributeList extends Model
{
    /**
     * @var int
     */
    public $aliUid;

    /**
     * @var string
     */
    public $ecsImageId;

    /**
     * @var string
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $gmtModified;

    /**
     * @var string
     */
    public $imageId;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $progress;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $unitImageId;

    /**
     * @var string
     */
    public $versionId;
    protected $_name = [
        'aliUid' => 'AliUid',
        'ecsImageId' => 'EcsImageId',
        'gmtCreate' => 'GmtCreate',
        'gmtModified' => 'GmtModified',
        'imageId' => 'ImageId',
        'message' => 'Message',
        'progress' => 'Progress',
        'regionId' => 'RegionId',
        'status' => 'Status',
        'unitImageId' => 'UnitImageId',
        'versionId' => 'VersionId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->aliUid) {
            $res['AliUid'] = $this->aliUid;
        }

        if (null !== $this->ecsImageId) {
            $res['EcsImageId'] = $this->ecsImageId;
        }

        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }

        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }

        if (null !== $this->imageId) {
            $res['ImageId'] = $this->imageId;
        }

        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }

        if (null !== $this->progress) {
            $res['Progress'] = $this->progress;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->unitImageId) {
            $res['UnitImageId'] = $this->unitImageId;
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
        if (isset($map['AliUid'])) {
            $model->aliUid = $map['AliUid'];
        }

        if (isset($map['EcsImageId'])) {
            $model->ecsImageId = $map['EcsImageId'];
        }

        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }

        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }

        if (isset($map['ImageId'])) {
            $model->imageId = $map['ImageId'];
        }

        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }

        if (isset($map['Progress'])) {
            $model->progress = $map['Progress'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['UnitImageId'])) {
            $model->unitImageId = $map['UnitImageId'];
        }

        if (isset($map['VersionId'])) {
            $model->versionId = $map['VersionId'];
        }

        return $model;
    }
}
