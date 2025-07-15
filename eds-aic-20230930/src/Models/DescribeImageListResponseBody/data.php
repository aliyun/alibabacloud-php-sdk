<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsaic\V20230930\Models\DescribeImageListResponseBody;

use AlibabaCloud\SDK\Edsaic\V20230930\Models\DataImageRegionDistributeMapValue;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The ID of the Alibaba Cloud account.
     *
     * @example 117819727354****
     *
     * @var int
     */
    public $aliUid;

    /**
     * @description The description of the image.
     *
     * @example description
     *
     * @var string
     */
    public $description;

    /**
     * @description The time when the image was created.
     *
     * @example 2024-02-01 10:56:36
     *
     * @var string
     */
    public $gmtCreate;

    /**
     * @description The time when the image was last modified.
     *
     * @example 2024-02-01 10:56:36
     *
     * @var string
     */
    public $gmtModified;

    /**
     * @description The ID of the image.
     *
     * @example imgc-075cllfeuazh****
     *
     * @var string
     */
    public $imageId;

    /**
     * @description The name of the image.
     *
     * @example IMAGE
     *
     * @var string
     */
    public $imageName;

    /**
     * @description The region where the image is distributed. The key is the region and the value is the distribution information.
     *
     * @var DataImageRegionDistributeMapValue[]
     */
    public $imageRegionDistributeMap;

    /**
     * @description The list of regions.
     *
     * @var string[]
     */
    public $imageRegionList;

    /**
     * @description The type of the image.
     *
     * Valid values:
     *
     *   User: custom images.
     *   System: system images.
     *
     * @example System
     *
     * @var string
     */
    public $imageType;

    /**
     * @var string
     */
    public $imageVersion;

    /**
     * @description The language of the image.
     *
     * @example zh
     *
     * @var string
     */
    public $language;

    /**
     * @description The time when the image was published.
     *
     * @example 2024-07-25 10:06:45
     *
     * @var string
     */
    public $releaseTime;

    /**
     * @description The rendering type.
     *
     * Valid values:
     *
     *   GPURemote
     *   CPU
     *   GPULocal
     *
     * @example CPU
     *
     * @var string
     */
    public $renderingType;

    /**
     * @description The state of the image.
     *
     * Valid values:
     *
     *   AVAILABLE: The image is available.
     *   DELETE: The image is deleted.
     *   INIT: The image is being initialized.
     *   CREATE_FAILED: The image failed to be created.
     *   CREATING: The image is being created.
     *
     * @example AVAILABLE
     *
     * @var string
     */
    public $status;

    /**
     * @description The OS type of the image.
     *
     * @example Android 12
     *
     * @var string
     */
    public $systemType;
    protected $_name = [
        'aliUid' => 'AliUid',
        'description' => 'Description',
        'gmtCreate' => 'GmtCreate',
        'gmtModified' => 'GmtModified',
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

    public function validate() {}

    public function toMap()
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
        if (null !== $this->imageId) {
            $res['ImageId'] = $this->imageId;
        }
        if (null !== $this->imageName) {
            $res['ImageName'] = $this->imageName;
        }
        if (null !== $this->imageRegionDistributeMap) {
            $res['ImageRegionDistributeMap'] = [];
            if (null !== $this->imageRegionDistributeMap && \is_array($this->imageRegionDistributeMap)) {
                foreach ($this->imageRegionDistributeMap as $key => $val) {
                    $res['ImageRegionDistributeMap'][$key] = null !== $val ? $val->toMap() : $val;
                }
            }
        }
        if (null !== $this->imageRegionList) {
            $res['ImageRegionList'] = $this->imageRegionList;
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

    /**
     * @param array $map
     *
     * @return data
     */
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
        if (isset($map['ImageId'])) {
            $model->imageId = $map['ImageId'];
        }
        if (isset($map['ImageName'])) {
            $model->imageName = $map['ImageName'];
        }
        if (isset($map['ImageRegionDistributeMap'])) {
            $model->imageRegionDistributeMap = $map['ImageRegionDistributeMap'];
        }
        if (isset($map['ImageRegionList'])) {
            if (!empty($map['ImageRegionList'])) {
                $model->imageRegionList = $map['ImageRegionList'];
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
