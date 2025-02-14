<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sddp\V20190103\Models;

use AlibabaCloud\Dara\Model;

class ScanOssObjectV1Request extends Model
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
     * @var string[]
     */
    public $objectKeyList;
    /**
     * @var string
     */
    public $serviceRegionId;
    /**
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
        if (\is_array($this->objectKeyList)) {
            Model::validateArray($this->objectKeyList);
        }
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

        if (null !== $this->objectKeyList) {
            if (\is_array($this->objectKeyList)) {
                $res['ObjectKeyList'] = [];
                $n1                   = 0;
                foreach ($this->objectKeyList as $item1) {
                    $res['ObjectKeyList'][$n1++] = $item1;
                }
            }
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
            if (!empty($map['ObjectKeyList'])) {
                $model->objectKeyList = [];
                $n1                   = 0;
                foreach ($map['ObjectKeyList'] as $item1) {
                    $model->objectKeyList[$n1++] = $item1;
                }
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
