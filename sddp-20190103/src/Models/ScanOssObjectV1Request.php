<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sddp\V20190103\Models;

use AlibabaCloud\Tea\Model;

class ScanOssObjectV1Request extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example sddp-api-demo-bucket
     *
     * @var string
     */
    public $bucketName;

    /**
     * @example zh
     *
     * @var string
     */
    public $lang;

    /**
     * @description This parameter is required.
     *
     * @var string[]
     */
    public $objectKeyList;

    /**
     * @description This parameter is required.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $serviceRegionId;

    /**
     * @example 1
     *
     * @var int
     */
    public $templateId;
    protected $_name = [
        'bucketName'      => 'BucketName',
        'lang'            => 'Lang',
        'objectKeyList'   => 'ObjectKeyList',
        'serviceRegionId' => 'ServiceRegionId',
        'templateId'      => 'TemplateId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bucketName) {
            $res['BucketName'] = $this->bucketName;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->objectKeyList) {
            $res['ObjectKeyList'] = $this->objectKeyList;
        }
        if (null !== $this->serviceRegionId) {
            $res['ServiceRegionId'] = $this->serviceRegionId;
        }
        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ScanOssObjectV1Request
     */
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
            if (!empty($map['ObjectKeyList'])) {
                $model->objectKeyList = $map['ObjectKeyList'];
            }
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
