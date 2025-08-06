<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsaic\V20230930\Models\DescribeImageListResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\DataImageRegionDistributeMapValue;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\DescribeImageListResponseBody\data\imageBizTags;

class data extends Model
{
    /**
     * @var int
     */
    public $aliUid;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $gmtModified;

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
     * @var DataImageRegionDistributeMapValue[]
     */
    public $imageRegionDistributeMap;

    /**
     * @var string[]
     */
    public $imageRegionList;

    /**
     * @var string
     */
    public $imageType;

    /**
     * @var string
     */
    public $imageVersion;

    /**
     * @var string
     */
    public $language;

    /**
     * @var string
     */
    public $releaseTime;

    /**
     * @var string
     */
    public $renderingType;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $systemType;
    protected $_name = [
        'aliUid' => 'AliUid',
        'description' => 'Description',
        'gmtCreate' => 'GmtCreate',
        'gmtModified' => 'GmtModified',
        'imageBizTags' => 'ImageBizTags',
        'imageId' => 'ImageId',
        'imageName' => 'ImageName',
        'imageRegionDistributeMap' => 'ImageRegionDistributeMap',
        'imageRegionList' => 'ImageRegionList',
        'imageType' => 'ImageType',
        'imageVersion' => 'ImageVersion',
        'language' => 'Language',
        'releaseTime' => 'ReleaseTime',
        'renderingType' => 'RenderingType',
        'status' => 'Status',
        'systemType' => 'SystemType',
    ];

    public function validate()
    {
        if (\is_array($this->imageBizTags)) {
            Model::validateArray($this->imageBizTags);
        }
        if (\is_array($this->imageRegionDistributeMap)) {
            Model::validateArray($this->imageRegionDistributeMap);
        }
        if (\is_array($this->imageRegionList)) {
            Model::validateArray($this->imageRegionList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->aliUid) {
            $res['AliUid'] = $this->aliUid;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }

        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }

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

        if (null !== $this->imageRegionDistributeMap) {
            if (\is_array($this->imageRegionDistributeMap)) {
                $res['ImageRegionDistributeMap'] = [];
                foreach ($this->imageRegionDistributeMap as $key1 => $value1) {
                    $res['ImageRegionDistributeMap'][$key1] = null !== $value1 ? $value1->toArray($noStream) : $value1;
                }
            }
        }

        if (null !== $this->imageRegionList) {
            if (\is_array($this->imageRegionList)) {
                $res['ImageRegionList'] = [];
                $n1 = 0;
                foreach ($this->imageRegionList as $item1) {
                    $res['ImageRegionList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->imageType) {
            $res['ImageType'] = $this->imageType;
        }

        if (null !== $this->imageVersion) {
            $res['ImageVersion'] = $this->imageVersion;
        }

        if (null !== $this->language) {
            $res['Language'] = $this->language;
        }

        if (null !== $this->releaseTime) {
            $res['ReleaseTime'] = $this->releaseTime;
        }

        if (null !== $this->renderingType) {
            $res['RenderingType'] = $this->renderingType;
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
        if (isset($map['AliUid'])) {
            $model->aliUid = $map['AliUid'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }

        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }

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

        if (isset($map['ImageRegionDistributeMap'])) {
            if (!empty($map['ImageRegionDistributeMap'])) {
                $model->imageRegionDistributeMap = [];
                foreach ($map['ImageRegionDistributeMap'] as $key1 => $value1) {
                    $model->imageRegionDistributeMap[$key1] = DataImageRegionDistributeMapValue::fromMap($value1);
                }
            }
        }

        if (isset($map['ImageRegionList'])) {
            if (!empty($map['ImageRegionList'])) {
                $model->imageRegionList = [];
                $n1 = 0;
                foreach ($map['ImageRegionList'] as $item1) {
                    $model->imageRegionList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['ImageType'])) {
            $model->imageType = $map['ImageType'];
        }

        if (isset($map['ImageVersion'])) {
            $model->imageVersion = $map['ImageVersion'];
        }

        if (isset($map['Language'])) {
            $model->language = $map['Language'];
        }

        if (isset($map['ReleaseTime'])) {
            $model->releaseTime = $map['ReleaseTime'];
        }

        if (isset($map['RenderingType'])) {
            $model->renderingType = $map['RenderingType'];
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
