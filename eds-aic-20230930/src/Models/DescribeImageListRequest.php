<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsaic\V20230930\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\DescribeImageListRequest\imageBizTags;

class DescribeImageListRequest extends Model
{
    /**
     * @var imageBizTags[]
     */
    public $imageBizTags;

    /**
     * @var string
     */
    public $imageId;

    /**
     * @var string
     */
    public $imageName;

    /**
     * @var string
     */
    public $imagePackageType;

    /**
     * @var string
     */
    public $imageType;

    /**
     * @var string
     */
    public $instanceType;

    /**
     * @var int
     */
    public $maxResults;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $systemType;
    protected $_name = [
        'imageBizTags' => 'ImageBizTags',
        'imageId' => 'ImageId',
        'imageName' => 'ImageName',
        'imagePackageType' => 'ImagePackageType',
        'imageType' => 'ImageType',
        'instanceType' => 'InstanceType',
        'maxResults' => 'MaxResults',
        'nextToken' => 'NextToken',
        'status' => 'Status',
        'systemType' => 'SystemType',
    ];

    public function validate()
    {
        if (\is_array($this->imageBizTags)) {
            Model::validateArray($this->imageBizTags);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->imageBizTags) {
            if (\is_array($this->imageBizTags)) {
                $res['ImageBizTags'] = [];
                $n1 = 0;
                foreach ($this->imageBizTags as $item1) {
                    $res['ImageBizTags'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->imageId) {
            $res['ImageId'] = $this->imageId;
        }

        if (null !== $this->imageName) {
            $res['ImageName'] = $this->imageName;
        }

        if (null !== $this->imagePackageType) {
            $res['ImagePackageType'] = $this->imagePackageType;
        }

        if (null !== $this->imageType) {
            $res['ImageType'] = $this->imageType;
        }

        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }

        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }

        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->systemType) {
            $res['SystemType'] = $this->systemType;
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
        if (isset($map['ImageBizTags'])) {
            if (!empty($map['ImageBizTags'])) {
                $model->imageBizTags = [];
                $n1 = 0;
                foreach ($map['ImageBizTags'] as $item1) {
                    $model->imageBizTags[$n1] = imageBizTags::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['ImageId'])) {
            $model->imageId = $map['ImageId'];
        }

        if (isset($map['ImageName'])) {
            $model->imageName = $map['ImageName'];
        }

        if (isset($map['ImagePackageType'])) {
            $model->imagePackageType = $map['ImagePackageType'];
        }

        if (isset($map['ImageType'])) {
            $model->imageType = $map['ImageType'];
        }

        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }

        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }

        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['SystemType'])) {
            $model->systemType = $map['SystemType'];
        }

        return $model;
    }
}
