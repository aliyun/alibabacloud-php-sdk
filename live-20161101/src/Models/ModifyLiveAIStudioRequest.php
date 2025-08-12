<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Live\V20161101\Models\ModifyLiveAIStudioRequest\mattingLayout;
use AlibabaCloud\SDK\Live\V20161101\Models\ModifyLiveAIStudioRequest\mediaLayout;

class ModifyLiveAIStudioRequest extends Model
{
    /**
     * @var string
     */
    public $backgroundResourceId;

    /**
     * @var string
     */
    public $backgroundResourceUrl;

    /**
     * @var string
     */
    public $backgroundType;

    /**
     * @var string
     */
    public $description;

    /**
     * @var int
     */
    public $height;

    /**
     * @var mattingLayout
     */
    public $mattingLayout;

    /**
     * @var string
     */
    public $mattingType;

    /**
     * @var mediaLayout
     */
    public $mediaLayout;

    /**
     * @var string
     */
    public $mediaResourceId;

    /**
     * @var string
     */
    public $mediaResourceUrl;

    /**
     * @var string
     */
    public $mediaType;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $studioName;

    /**
     * @var int
     */
    public $width;
    protected $_name = [
        'backgroundResourceId' => 'BackgroundResourceId',
        'backgroundResourceUrl' => 'BackgroundResourceUrl',
        'backgroundType' => 'BackgroundType',
        'description' => 'Description',
        'height' => 'Height',
        'mattingLayout' => 'MattingLayout',
        'mattingType' => 'MattingType',
        'mediaLayout' => 'MediaLayout',
        'mediaResourceId' => 'MediaResourceId',
        'mediaResourceUrl' => 'MediaResourceUrl',
        'mediaType' => 'MediaType',
        'ownerId' => 'OwnerId',
        'regionId' => 'RegionId',
        'studioName' => 'StudioName',
        'width' => 'Width',
    ];

    public function validate()
    {
        if (null !== $this->mattingLayout) {
            $this->mattingLayout->validate();
        }
        if (null !== $this->mediaLayout) {
            $this->mediaLayout->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->backgroundResourceId) {
            $res['BackgroundResourceId'] = $this->backgroundResourceId;
        }

        if (null !== $this->backgroundResourceUrl) {
            $res['BackgroundResourceUrl'] = $this->backgroundResourceUrl;
        }

        if (null !== $this->backgroundType) {
            $res['BackgroundType'] = $this->backgroundType;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->height) {
            $res['Height'] = $this->height;
        }

        if (null !== $this->mattingLayout) {
            $res['MattingLayout'] = null !== $this->mattingLayout ? $this->mattingLayout->toArray($noStream) : $this->mattingLayout;
        }

        if (null !== $this->mattingType) {
            $res['MattingType'] = $this->mattingType;
        }

        if (null !== $this->mediaLayout) {
            $res['MediaLayout'] = null !== $this->mediaLayout ? $this->mediaLayout->toArray($noStream) : $this->mediaLayout;
        }

        if (null !== $this->mediaResourceId) {
            $res['MediaResourceId'] = $this->mediaResourceId;
        }

        if (null !== $this->mediaResourceUrl) {
            $res['MediaResourceUrl'] = $this->mediaResourceUrl;
        }

        if (null !== $this->mediaType) {
            $res['MediaType'] = $this->mediaType;
        }

        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->studioName) {
            $res['StudioName'] = $this->studioName;
        }

        if (null !== $this->width) {
            $res['Width'] = $this->width;
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
        if (isset($map['BackgroundResourceId'])) {
            $model->backgroundResourceId = $map['BackgroundResourceId'];
        }

        if (isset($map['BackgroundResourceUrl'])) {
            $model->backgroundResourceUrl = $map['BackgroundResourceUrl'];
        }

        if (isset($map['BackgroundType'])) {
            $model->backgroundType = $map['BackgroundType'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['Height'])) {
            $model->height = $map['Height'];
        }

        if (isset($map['MattingLayout'])) {
            $model->mattingLayout = mattingLayout::fromMap($map['MattingLayout']);
        }

        if (isset($map['MattingType'])) {
            $model->mattingType = $map['MattingType'];
        }

        if (isset($map['MediaLayout'])) {
            $model->mediaLayout = mediaLayout::fromMap($map['MediaLayout']);
        }

        if (isset($map['MediaResourceId'])) {
            $model->mediaResourceId = $map['MediaResourceId'];
        }

        if (isset($map['MediaResourceUrl'])) {
            $model->mediaResourceUrl = $map['MediaResourceUrl'];
        }

        if (isset($map['MediaType'])) {
            $model->mediaType = $map['MediaType'];
        }

        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['StudioName'])) {
            $model->studioName = $map['StudioName'];
        }

        if (isset($map['Width'])) {
            $model->width = $map['Width'];
        }

        return $model;
    }
}
