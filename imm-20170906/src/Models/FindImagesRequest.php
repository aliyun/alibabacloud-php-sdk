<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20170906\Models;

use AlibabaCloud\Tea\Model;

class FindImagesRequest extends Model
{
    /**
     * @var string
     */
    public $addressLineContentsMatch;

    /**
     * @var string
     */
    public $ageRange;

    /**
     * @var string
     */
    public $createTimeRange;

    /**
     * @var string
     */
    public $emotion;

    /**
     * @var string
     */
    public $externalId;

    /**
     * @var string
     */
    public $facesModifyTimeRange;

    /**
     * @var string
     */
    public $gender;

    /**
     * @var string
     */
    public $groupId;

    /**
     * @var string
     */
    public $imageSizeRange;

    /**
     * @var string
     */
    public $imageTimeRange;

    /**
     * @var int
     */
    public $limit;

    /**
     * @var string
     */
    public $locationBoundary;

    /**
     * @var string
     */
    public $marker;

    /**
     * @var string
     */
    public $modifyTimeRange;

    /**
     * @var string
     */
    public $OCRContentsMatch;

    /**
     * @var string
     */
    public $order;

    /**
     * @var string
     */
    public $orderBy;

    /**
     * @var string
     */
    public $project;

    /**
     * @var string
     */
    public $remarksAPrefix;

    /**
     * @var string
     */
    public $remarksArrayAIn;

    /**
     * @var string
     */
    public $remarksArrayBIn;

    /**
     * @var string
     */
    public $remarksBPrefix;

    /**
     * @var string
     */
    public $remarksCPrefix;

    /**
     * @var string
     */
    public $remarksDPrefix;

    /**
     * @var string
     */
    public $setId;

    /**
     * @var string
     */
    public $sourceType;

    /**
     * @var string
     */
    public $sourceUriPrefix;

    /**
     * @var string
     */
    public $tagNames;

    /**
     * @var string
     */
    public $tagsModifyTimeRange;
    protected $_name = [
        'addressLineContentsMatch' => 'AddressLineContentsMatch',
        'ageRange'                 => 'AgeRange',
        'createTimeRange'          => 'CreateTimeRange',
        'emotion'                  => 'Emotion',
        'externalId'               => 'ExternalId',
        'facesModifyTimeRange'     => 'FacesModifyTimeRange',
        'gender'                   => 'Gender',
        'groupId'                  => 'GroupId',
        'imageSizeRange'           => 'ImageSizeRange',
        'imageTimeRange'           => 'ImageTimeRange',
        'limit'                    => 'Limit',
        'locationBoundary'         => 'LocationBoundary',
        'marker'                   => 'Marker',
        'modifyTimeRange'          => 'ModifyTimeRange',
        'OCRContentsMatch'         => 'OCRContentsMatch',
        'order'                    => 'Order',
        'orderBy'                  => 'OrderBy',
        'project'                  => 'Project',
        'remarksAPrefix'           => 'RemarksAPrefix',
        'remarksArrayAIn'          => 'RemarksArrayAIn',
        'remarksArrayBIn'          => 'RemarksArrayBIn',
        'remarksBPrefix'           => 'RemarksBPrefix',
        'remarksCPrefix'           => 'RemarksCPrefix',
        'remarksDPrefix'           => 'RemarksDPrefix',
        'setId'                    => 'SetId',
        'sourceType'               => 'SourceType',
        'sourceUriPrefix'          => 'SourceUriPrefix',
        'tagNames'                 => 'TagNames',
        'tagsModifyTimeRange'      => 'TagsModifyTimeRange',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->addressLineContentsMatch) {
            $res['AddressLineContentsMatch'] = $this->addressLineContentsMatch;
        }
        if (null !== $this->ageRange) {
            $res['AgeRange'] = $this->ageRange;
        }
        if (null !== $this->createTimeRange) {
            $res['CreateTimeRange'] = $this->createTimeRange;
        }
        if (null !== $this->emotion) {
            $res['Emotion'] = $this->emotion;
        }
        if (null !== $this->externalId) {
            $res['ExternalId'] = $this->externalId;
        }
        if (null !== $this->facesModifyTimeRange) {
            $res['FacesModifyTimeRange'] = $this->facesModifyTimeRange;
        }
        if (null !== $this->gender) {
            $res['Gender'] = $this->gender;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->imageSizeRange) {
            $res['ImageSizeRange'] = $this->imageSizeRange;
        }
        if (null !== $this->imageTimeRange) {
            $res['ImageTimeRange'] = $this->imageTimeRange;
        }
        if (null !== $this->limit) {
            $res['Limit'] = $this->limit;
        }
        if (null !== $this->locationBoundary) {
            $res['LocationBoundary'] = $this->locationBoundary;
        }
        if (null !== $this->marker) {
            $res['Marker'] = $this->marker;
        }
        if (null !== $this->modifyTimeRange) {
            $res['ModifyTimeRange'] = $this->modifyTimeRange;
        }
        if (null !== $this->OCRContentsMatch) {
            $res['OCRContentsMatch'] = $this->OCRContentsMatch;
        }
        if (null !== $this->order) {
            $res['Order'] = $this->order;
        }
        if (null !== $this->orderBy) {
            $res['OrderBy'] = $this->orderBy;
        }
        if (null !== $this->project) {
            $res['Project'] = $this->project;
        }
        if (null !== $this->remarksAPrefix) {
            $res['RemarksAPrefix'] = $this->remarksAPrefix;
        }
        if (null !== $this->remarksArrayAIn) {
            $res['RemarksArrayAIn'] = $this->remarksArrayAIn;
        }
        if (null !== $this->remarksArrayBIn) {
            $res['RemarksArrayBIn'] = $this->remarksArrayBIn;
        }
        if (null !== $this->remarksBPrefix) {
            $res['RemarksBPrefix'] = $this->remarksBPrefix;
        }
        if (null !== $this->remarksCPrefix) {
            $res['RemarksCPrefix'] = $this->remarksCPrefix;
        }
        if (null !== $this->remarksDPrefix) {
            $res['RemarksDPrefix'] = $this->remarksDPrefix;
        }
        if (null !== $this->setId) {
            $res['SetId'] = $this->setId;
        }
        if (null !== $this->sourceType) {
            $res['SourceType'] = $this->sourceType;
        }
        if (null !== $this->sourceUriPrefix) {
            $res['SourceUriPrefix'] = $this->sourceUriPrefix;
        }
        if (null !== $this->tagNames) {
            $res['TagNames'] = $this->tagNames;
        }
        if (null !== $this->tagsModifyTimeRange) {
            $res['TagsModifyTimeRange'] = $this->tagsModifyTimeRange;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return FindImagesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AddressLineContentsMatch'])) {
            $model->addressLineContentsMatch = $map['AddressLineContentsMatch'];
        }
        if (isset($map['AgeRange'])) {
            $model->ageRange = $map['AgeRange'];
        }
        if (isset($map['CreateTimeRange'])) {
            $model->createTimeRange = $map['CreateTimeRange'];
        }
        if (isset($map['Emotion'])) {
            $model->emotion = $map['Emotion'];
        }
        if (isset($map['ExternalId'])) {
            $model->externalId = $map['ExternalId'];
        }
        if (isset($map['FacesModifyTimeRange'])) {
            $model->facesModifyTimeRange = $map['FacesModifyTimeRange'];
        }
        if (isset($map['Gender'])) {
            $model->gender = $map['Gender'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['ImageSizeRange'])) {
            $model->imageSizeRange = $map['ImageSizeRange'];
        }
        if (isset($map['ImageTimeRange'])) {
            $model->imageTimeRange = $map['ImageTimeRange'];
        }
        if (isset($map['Limit'])) {
            $model->limit = $map['Limit'];
        }
        if (isset($map['LocationBoundary'])) {
            $model->locationBoundary = $map['LocationBoundary'];
        }
        if (isset($map['Marker'])) {
            $model->marker = $map['Marker'];
        }
        if (isset($map['ModifyTimeRange'])) {
            $model->modifyTimeRange = $map['ModifyTimeRange'];
        }
        if (isset($map['OCRContentsMatch'])) {
            $model->OCRContentsMatch = $map['OCRContentsMatch'];
        }
        if (isset($map['Order'])) {
            $model->order = $map['Order'];
        }
        if (isset($map['OrderBy'])) {
            $model->orderBy = $map['OrderBy'];
        }
        if (isset($map['Project'])) {
            $model->project = $map['Project'];
        }
        if (isset($map['RemarksAPrefix'])) {
            $model->remarksAPrefix = $map['RemarksAPrefix'];
        }
        if (isset($map['RemarksArrayAIn'])) {
            $model->remarksArrayAIn = $map['RemarksArrayAIn'];
        }
        if (isset($map['RemarksArrayBIn'])) {
            $model->remarksArrayBIn = $map['RemarksArrayBIn'];
        }
        if (isset($map['RemarksBPrefix'])) {
            $model->remarksBPrefix = $map['RemarksBPrefix'];
        }
        if (isset($map['RemarksCPrefix'])) {
            $model->remarksCPrefix = $map['RemarksCPrefix'];
        }
        if (isset($map['RemarksDPrefix'])) {
            $model->remarksDPrefix = $map['RemarksDPrefix'];
        }
        if (isset($map['SetId'])) {
            $model->setId = $map['SetId'];
        }
        if (isset($map['SourceType'])) {
            $model->sourceType = $map['SourceType'];
        }
        if (isset($map['SourceUriPrefix'])) {
            $model->sourceUriPrefix = $map['SourceUriPrefix'];
        }
        if (isset($map['TagNames'])) {
            $model->tagNames = $map['TagNames'];
        }
        if (isset($map['TagsModifyTimeRange'])) {
            $model->tagsModifyTimeRange = $map['TagsModifyTimeRange'];
        }

        return $model;
    }
}
