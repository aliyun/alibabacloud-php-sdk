<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sddp\V20190103\Models;

use AlibabaCloud\Dara\Model;

class RestoreOssImageRequest extends Model
{
    /**
     * @var string
     */
    public $bucket;

    /**
     * @var string
     */
    public $lang;

    /**
     * @var string
     */
    public $objectKey;

    /**
     * @var string
     */
    public $serviceRegionId;

    /**
     * @var string
     */
    public $targetObjectKey;
    protected $_name = [
        'bucket' => 'Bucket',
        'lang' => 'Lang',
        'objectKey' => 'ObjectKey',
        'serviceRegionId' => 'ServiceRegionId',
        'targetObjectKey' => 'TargetObjectKey',
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

        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }

        if (null !== $this->objectKey) {
            $res['ObjectKey'] = $this->objectKey;
        }

        if (null !== $this->serviceRegionId) {
            $res['ServiceRegionId'] = $this->serviceRegionId;
        }

        if (null !== $this->targetObjectKey) {
            $res['TargetObjectKey'] = $this->targetObjectKey;
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

        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }

        if (isset($map['ObjectKey'])) {
            $model->objectKey = $map['ObjectKey'];
        }

        if (isset($map['ServiceRegionId'])) {
            $model->serviceRegionId = $map['ServiceRegionId'];
        }

        if (isset($map['TargetObjectKey'])) {
            $model->targetObjectKey = $map['TargetObjectKey'];
        }

        return $model;
    }
}
