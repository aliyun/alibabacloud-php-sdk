<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\Dara\Model;

class CheckPolarClawSkillRequest extends Model
{
    /**
     * @var string
     */
    public $bucketRegionId;

    /**
     * @var string
     */
    public $bucketType;

    /**
     * @var string
     */
    public $OSSBucket;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $skillName;

    /**
     * @var string
     */
    public $skillVersion;

    /**
     * @var string
     */
    public $summary;

    /**
     * @var string
     */
    public $tags;

    /**
     * @var string
     */
    public $title;
    protected $_name = [
        'bucketRegionId' => 'BucketRegionId',
        'bucketType' => 'BucketType',
        'OSSBucket' => 'OSSBucket',
        'regionId' => 'RegionId',
        'skillName' => 'SkillName',
        'skillVersion' => 'SkillVersion',
        'summary' => 'Summary',
        'tags' => 'Tags',
        'title' => 'Title',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bucketRegionId) {
            $res['BucketRegionId'] = $this->bucketRegionId;
        }

        if (null !== $this->bucketType) {
            $res['BucketType'] = $this->bucketType;
        }

        if (null !== $this->OSSBucket) {
            $res['OSSBucket'] = $this->OSSBucket;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->skillName) {
            $res['SkillName'] = $this->skillName;
        }

        if (null !== $this->skillVersion) {
            $res['SkillVersion'] = $this->skillVersion;
        }

        if (null !== $this->summary) {
            $res['Summary'] = $this->summary;
        }

        if (null !== $this->tags) {
            $res['Tags'] = $this->tags;
        }

        if (null !== $this->title) {
            $res['Title'] = $this->title;
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
        if (isset($map['BucketRegionId'])) {
            $model->bucketRegionId = $map['BucketRegionId'];
        }

        if (isset($map['BucketType'])) {
            $model->bucketType = $map['BucketType'];
        }

        if (isset($map['OSSBucket'])) {
            $model->OSSBucket = $map['OSSBucket'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['SkillName'])) {
            $model->skillName = $map['SkillName'];
        }

        if (isset($map['SkillVersion'])) {
            $model->skillVersion = $map['SkillVersion'];
        }

        if (isset($map['Summary'])) {
            $model->summary = $map['Summary'];
        }

        if (isset($map['Tags'])) {
            $model->tags = $map['Tags'];
        }

        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }

        return $model;
    }
}
