<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sddp\V20190103\Models;

use AlibabaCloud\Dara\Model;

class ScanOssObjectV1ShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $bucketName;

    /**
     * @var string
     */
    public $lang;

    /**
     * @var string
     */
    public $objectKeyListShrink;

    /**
     * @var string
     */
    public $serviceRegionId;

    /**
     * @var int
     */
    public $templateId;
    protected $_name = [
        'bucketName' => 'BucketName',
        'lang' => 'Lang',
        'objectKeyListShrink' => 'ObjectKeyList',
        'serviceRegionId' => 'ServiceRegionId',
        'templateId' => 'TemplateId',
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

        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }

        if (null !== $this->objectKeyListShrink) {
            $res['ObjectKeyList'] = $this->objectKeyListShrink;
        }

        if (null !== $this->serviceRegionId) {
            $res['ServiceRegionId'] = $this->serviceRegionId;
        }

        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
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

        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }

        if (isset($map['ObjectKeyList'])) {
            $model->objectKeyListShrink = $map['ObjectKeyList'];
        }

        if (isset($map['ServiceRegionId'])) {
            $model->serviceRegionId = $map['ServiceRegionId'];
        }

        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }

        return $model;
    }
}
