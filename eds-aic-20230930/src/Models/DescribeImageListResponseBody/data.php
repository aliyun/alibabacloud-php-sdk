<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsaic\V20230930\Models\DescribeImageListResponseBody;

use AlibabaCloud\SDK\Edsaic\V20230930\Models\DataImageRegionDistributeMapValue;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 117819727354****
     *
     * @var int
     */
    public $aliUid;

    /**
     * @example description
     *
     * @var string
     */
    public $description;

    /**
     * @example 2024-02-01 10:56:36
     *
     * @var string
     */
    public $gmtCreate;

    /**
     * @example 2024-02-01 10:56:36
     *
     * @var string
     */
    public $gmtModified;

    /**
     * @example imgc-075cllfeuazh****
     *
     * @var string
     */
    public $imageId;

    /**
     * @example IMAGE
     *
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
     * @example System
     *
     * @var string
     */
    public $imageType;

    /**
     * @example zh
     *
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
     * @example AVAILABLE
     *
     * @var string
     */
    public $status;

    /**
     * @example Android 12
     *
     * @var string
     */
    public $systemType;
    protected $_name = [
        'aliUid'                   => 'AliUid',
        'description'              => 'Description',
        'gmtCreate'                => 'GmtCreate',
        'gmtModified'              => 'GmtModified',
        'imageId'                  => 'ImageId',
        'imageName'                => 'ImageName',
        'imageRegionDistributeMap' => 'ImageRegionDistributeMap',
        'imageRegionList'          => 'ImageRegionList',
        'imageType'                => 'ImageType',
        'language'                 => 'Language',
        'releaseTime'              => 'ReleaseTime',
        'renderingType'            => 'RenderingType',
        'status'                   => 'Status',
        'systemType'               => 'SystemType',
    ];

    public function validate()
    {
    }

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
