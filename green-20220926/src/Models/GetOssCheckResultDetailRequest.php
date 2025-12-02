<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20220926\Models;

use AlibabaCloud\Dara\Model;

class GetOssCheckResultDetailRequest extends Model
{
    /**
     * @var string
     */
    public $bucket;

    /**
     * @var int
     */
    public $mediaType;

    /**
     * @var string
     */
    public $object;

    /**
     * @var string
     */
    public $parentTaskId;

    /**
     * @var string
     */
    public $queryRequestId;

    /**
     * @var string
     */
    public $regionId;

    /**
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

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
