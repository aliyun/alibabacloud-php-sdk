<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20220926\Models;

use AlibabaCloud\Tea\Model;

class GetOssCheckResultDetailRequest extends Model
{
    /**
     * @example oss-tmp
     *
     * @var string
     */
    public $bucket;

    /**
     * @example 1
     *
     * @var int
     */
    public $mediaType;

    /**
     * @example 1748396909030.jpg
     *
     * @var string
     */
    public $object;

    /**
     * @var string
     */
    public $parentTaskId;

    /**
     * @example 62E97001-1255-50A9-8E1E-4FD05473D952
     *
     * @var string
     */
    public $queryRequestId;

    /**
     * @example cn-shanghai
     *
     * @var string
     */
    public $regionId;

    /**
     * @example audio_media_detection_01
     *
     * @var string
     */
    public $serviceCode;
    protected $_name = [
        'bucket' => 'Bucket',
        'mediaType' => 'MediaType',
        'object' => 'Object',
        'parentTaskId' => 'ParentTaskId',
        'queryRequestId' => 'QueryRequestId',
        'regionId' => 'RegionId',
        'serviceCode' => 'ServiceCode',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->bucket) {
            $res['Bucket'] = $this->bucket;
        }
        if (null !== $this->mediaType) {
            $res['MediaType'] = $this->mediaType;
        }
        if (null !== $this->object) {
            $res['Object'] = $this->object;
        }
        if (null !== $this->parentTaskId) {
            $res['ParentTaskId'] = $this->parentTaskId;
        }
        if (null !== $this->queryRequestId) {
            $res['QueryRequestId'] = $this->queryRequestId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->serviceCode) {
            $res['ServiceCode'] = $this->serviceCode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetOssCheckResultDetailRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Bucket'])) {
            $model->bucket = $map['Bucket'];
        }
        if (isset($map['MediaType'])) {
            $model->mediaType = $map['MediaType'];
        }
        if (isset($map['Object'])) {
            $model->object = $map['Object'];
        }
        if (isset($map['ParentTaskId'])) {
            $model->parentTaskId = $map['ParentTaskId'];
        }
        if (isset($map['QueryRequestId'])) {
            $model->queryRequestId = $map['QueryRequestId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ServiceCode'])) {
            $model->serviceCode = $map['ServiceCode'];
        }

        return $model;
    }
}
