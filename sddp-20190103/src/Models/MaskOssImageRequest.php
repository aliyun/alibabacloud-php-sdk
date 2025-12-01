<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sddp\V20190103\Models;

use AlibabaCloud\Dara\Model;

class MaskOssImageRequest extends Model
{
    /**
     * @var string
     */
    public $bucketName;

    /**
     * @var bool
     */
    public $isAlwaysUpload;

    /**
     * @var bool
     */
    public $isSupportRestore;

    /**
     * @var string
     */
    public $lang;

    /**
     * @var string
     */
    public $maskRuleIdList;

    /**
     * @var string
     */
    public $objectKey;

    /**
     * @var string
     */
    public $serviceRegionId;
    protected $_name = [
        'bucketName' => 'BucketName',
        'isAlwaysUpload' => 'IsAlwaysUpload',
        'isSupportRestore' => 'IsSupportRestore',
        'lang' => 'Lang',
        'maskRuleIdList' => 'MaskRuleIdList',
        'objectKey' => 'ObjectKey',
        'serviceRegionId' => 'ServiceRegionId',
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

        if (null !== $this->isAlwaysUpload) {
            $res['IsAlwaysUpload'] = $this->isAlwaysUpload;
        }

        if (null !== $this->isSupportRestore) {
            $res['IsSupportRestore'] = $this->isSupportRestore;
        }

        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }

        if (null !== $this->maskRuleIdList) {
            $res['MaskRuleIdList'] = $this->maskRuleIdList;
        }

        if (null !== $this->objectKey) {
            $res['ObjectKey'] = $this->objectKey;
        }

        if (null !== $this->serviceRegionId) {
            $res['ServiceRegionId'] = $this->serviceRegionId;
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

        if (isset($map['IsAlwaysUpload'])) {
            $model->isAlwaysUpload = $map['IsAlwaysUpload'];
        }

        if (isset($map['IsSupportRestore'])) {
            $model->isSupportRestore = $map['IsSupportRestore'];
        }

        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }

        if (isset($map['MaskRuleIdList'])) {
            $model->maskRuleIdList = $map['MaskRuleIdList'];
        }

        if (isset($map['ObjectKey'])) {
            $model->objectKey = $map['ObjectKey'];
        }

        if (isset($map['ServiceRegionId'])) {
            $model->serviceRegionId = $map['ServiceRegionId'];
        }

        return $model;
    }
}
