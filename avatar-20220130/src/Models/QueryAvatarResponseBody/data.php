<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Avatar\V20220130\Models\QueryAvatarResponseBody;

use AlibabaCloud\SDK\Avatar\V20220130\Models\QueryAvatarResponseBody\data\supportedResolutions;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var mixed[]
     */
    public $allLocateImages;

    /**
     * @example 0
     *
     * @var string
     */
    public $avatarType;

    /**
     * @var string
     */
    public $description;

    /**
     * @example https://virtual-human-assets.oss-cn-beijing.aliyuncs.com/2d_assets/xxx/xxx/xxx.png?Expires=xxx&OSSAccessKeyId=xxx&Signature=xxx
     *
     * @var string
     */
    public $image;

    /**
     * @var string
     */
    public $makeFailReason;

    /**
     * @var string
     */
    public $makeStage;

    /**
     * @var string
     */
    public $makeStatus;

    /**
     * @example 2d
     *
     * @var string
     */
    public $modelType;

    /**
     * @var string
     */
    public $name;

    /**
     * @example https://virtual-human-assets.oss-cn-beijing.aliyuncs.com/2d_assets/xxx/xxx/xxx.png?Expires=xxx&OSSAccessKeyId=xxx&Signature=xxx
     *
     * @var string
     */
    public $portrait;

    /**
     * @var supportedResolutions
     */
    public $supportedResolutions;
    protected $_name = [
        'allLocateImages'      => 'AllLocateImages',
        'avatarType'           => 'AvatarType',
        'description'          => 'Description',
        'image'                => 'Image',
        'makeFailReason'       => 'MakeFailReason',
        'makeStage'            => 'MakeStage',
        'makeStatus'           => 'MakeStatus',
        'modelType'            => 'ModelType',
        'name'                 => 'Name',
        'portrait'             => 'Portrait',
        'supportedResolutions' => 'SupportedResolutions',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->allLocateImages) {
            $res['AllLocateImages'] = $this->allLocateImages;
        }
        if (null !== $this->avatarType) {
            $res['AvatarType'] = $this->avatarType;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->image) {
            $res['Image'] = $this->image;
        }
        if (null !== $this->makeFailReason) {
            $res['MakeFailReason'] = $this->makeFailReason;
        }
        if (null !== $this->makeStage) {
            $res['MakeStage'] = $this->makeStage;
        }
        if (null !== $this->makeStatus) {
            $res['MakeStatus'] = $this->makeStatus;
        }
        if (null !== $this->modelType) {
            $res['ModelType'] = $this->modelType;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->portrait) {
            $res['Portrait'] = $this->portrait;
        }
        if (null !== $this->supportedResolutions) {
            $res['SupportedResolutions'] = null !== $this->supportedResolutions ? $this->supportedResolutions->toMap() : null;
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
        if (isset($map['AllLocateImages'])) {
            $model->allLocateImages = $map['AllLocateImages'];
        }
        if (isset($map['AvatarType'])) {
            $model->avatarType = $map['AvatarType'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Image'])) {
            $model->image = $map['Image'];
        }
        if (isset($map['MakeFailReason'])) {
            $model->makeFailReason = $map['MakeFailReason'];
        }
        if (isset($map['MakeStage'])) {
            $model->makeStage = $map['MakeStage'];
        }
        if (isset($map['MakeStatus'])) {
            $model->makeStatus = $map['MakeStatus'];
        }
        if (isset($map['ModelType'])) {
            $model->modelType = $map['ModelType'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Portrait'])) {
            $model->portrait = $map['Portrait'];
        }
        if (isset($map['SupportedResolutions'])) {
            $model->supportedResolutions = supportedResolutions::fromMap($map['SupportedResolutions']);
        }

        return $model;
    }
}
