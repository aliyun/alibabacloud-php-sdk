<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Dara\Model;

class AddWatermarkConsoleRequest extends Model
{
    /**
     * @var string
     */
    public $active;

    /**
     * @var string
     */
    public $bucket;

    /**
     * @var string
     */
    public $fileName;

    /**
     * @var string
     */
    public $height;

    /**
     * @var string
     */
    public $horizontalOffet;

    /**
     * @var string
     */
    public $horizontalOffset;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $object;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $position;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @var int
     */
    public $resourceRealOwnerId;

    /**
     * @var string
     */
    public $screenMode;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $verticalOffset;

    /**
     * @var int
     */
    public $videoHeight;

    /**
     * @var int
     */
    public $videoWidth;

    /**
     * @var string
     */
    public $watermarkConfig;

    /**
     * @var string
     */
    public $width;
    protected $_name = [
        'active' => 'Active',
        'bucket' => 'Bucket',
        'fileName' => 'FileName',
        'height' => 'Height',
        'horizontalOffet' => 'HorizontalOffet',
        'horizontalOffset' => 'HorizontalOffset',
        'name' => 'Name',
        'object' => 'Object',
        'ownerId' => 'OwnerId',
        'position' => 'Position',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'resourceRealOwnerId' => 'ResourceRealOwnerId',
        'screenMode' => 'ScreenMode',
        'type' => 'Type',
        'verticalOffset' => 'VerticalOffset',
        'videoHeight' => 'VideoHeight',
        'videoWidth' => 'VideoWidth',
        'watermarkConfig' => 'WatermarkConfig',
        'width' => 'Width',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->active) {
            $res['Active'] = $this->active;
        }

        if (null !== $this->bucket) {
            $res['Bucket'] = $this->bucket;
        }

        if (null !== $this->fileName) {
            $res['FileName'] = $this->fileName;
        }

        if (null !== $this->height) {
            $res['Height'] = $this->height;
        }

        if (null !== $this->horizontalOffet) {
            $res['HorizontalOffet'] = $this->horizontalOffet;
        }

        if (null !== $this->horizontalOffset) {
            $res['HorizontalOffset'] = $this->horizontalOffset;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->object) {
            $res['Object'] = $this->object;
        }

        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }

        if (null !== $this->position) {
            $res['Position'] = $this->position;
        }

        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }

        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }

        if (null !== $this->resourceRealOwnerId) {
            $res['ResourceRealOwnerId'] = $this->resourceRealOwnerId;
        }

        if (null !== $this->screenMode) {
            $res['ScreenMode'] = $this->screenMode;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        if (null !== $this->verticalOffset) {
            $res['VerticalOffset'] = $this->verticalOffset;
        }

        if (null !== $this->videoHeight) {
            $res['VideoHeight'] = $this->videoHeight;
        }

        if (null !== $this->videoWidth) {
            $res['VideoWidth'] = $this->videoWidth;
        }

        if (null !== $this->watermarkConfig) {
            $res['WatermarkConfig'] = $this->watermarkConfig;
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
        if (isset($map['Active'])) {
            $model->active = $map['Active'];
        }

        if (isset($map['Bucket'])) {
            $model->bucket = $map['Bucket'];
        }

        if (isset($map['FileName'])) {
            $model->fileName = $map['FileName'];
        }

        if (isset($map['Height'])) {
            $model->height = $map['Height'];
        }

        if (isset($map['HorizontalOffet'])) {
            $model->horizontalOffet = $map['HorizontalOffet'];
        }

        if (isset($map['HorizontalOffset'])) {
            $model->horizontalOffset = $map['HorizontalOffset'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['Object'])) {
            $model->object = $map['Object'];
        }

        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }

        if (isset($map['Position'])) {
            $model->position = $map['Position'];
        }

        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }

        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }

        if (isset($map['ResourceRealOwnerId'])) {
            $model->resourceRealOwnerId = $map['ResourceRealOwnerId'];
        }

        if (isset($map['ScreenMode'])) {
            $model->screenMode = $map['ScreenMode'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        if (isset($map['VerticalOffset'])) {
            $model->verticalOffset = $map['VerticalOffset'];
        }

        if (isset($map['VideoHeight'])) {
            $model->videoHeight = $map['VideoHeight'];
        }

        if (isset($map['VideoWidth'])) {
            $model->videoWidth = $map['VideoWidth'];
        }

        if (isset($map['WatermarkConfig'])) {
            $model->watermarkConfig = $map['WatermarkConfig'];
        }

        if (isset($map['Width'])) {
            $model->width = $map['Width'];
        }

        return $model;
    }
}
