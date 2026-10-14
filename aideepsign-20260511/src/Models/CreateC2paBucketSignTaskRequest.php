<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AIDeepSign\V20260511\Models;

use AlibabaCloud\Dara\Model;

class CreateC2paBucketSignTaskRequest extends Model
{
    /**
     * @var string
     */
    public $bucketName;

    /**
     * @var string
     */
    public $bucketRegionId;

    /**
     * @var string
     */
    public $softwareAgent;

    /**
     * @var string
     */
    public $sourcePrefix;

    /**
     * @var string
     */
    public $sourceType;
    protected $_name = [
        'bucketName' => 'BucketName',
        'bucketRegionId' => 'BucketRegionId',
        'softwareAgent' => 'SoftwareAgent',
        'sourcePrefix' => 'SourcePrefix',
        'sourceType' => 'SourceType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bucketName) {
            $res['BucketName'] = $this->bucketName;
        }

        if (null !== $this->bucketRegionId) {
            $res['BucketRegionId'] = $this->bucketRegionId;
        }

        if (null !== $this->softwareAgent) {
            $res['SoftwareAgent'] = $this->softwareAgent;
        }

        if (null !== $this->sourcePrefix) {
            $res['SourcePrefix'] = $this->sourcePrefix;
        }

        if (null !== $this->sourceType) {
            $res['SourceType'] = $this->sourceType;
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
        if (isset($map['BucketName'])) {
            $model->bucketName = $map['BucketName'];
        }

        if (isset($map['BucketRegionId'])) {
            $model->bucketRegionId = $map['BucketRegionId'];
        }

        if (isset($map['SoftwareAgent'])) {
            $model->softwareAgent = $map['SoftwareAgent'];
        }

        if (isset($map['SourcePrefix'])) {
            $model->sourcePrefix = $map['SourcePrefix'];
        }

        if (isset($map['SourceType'])) {
            $model->sourceType = $map['SourceType'];
        }

        return $model;
    }
}
