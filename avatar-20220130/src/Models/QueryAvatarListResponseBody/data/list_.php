<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Avatar\V20220130\Models\QueryAvatarListResponseBody\data;

use AlibabaCloud\SDK\Avatar\V20220130\Models\QueryAvatarListResponseBody\data\list_\supportedResolutions;
use AlibabaCloud\Tea\Model;

class list_ extends Model
{
    /**
     * @example 0
     *
     * @var string
     */
    public $avatarType;

    /**
     * @example CH_2d_37AsLhUrBxacjHP0
     *
     * @var string
     */
    public $code;

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
     * @var string
     */
    public $preview;

    /**
     * @var supportedResolutions
     */
    public $supportedResolutions;
    protected $_name = [
        'avatarType'           => 'AvatarType',
        'code'                 => 'Code',
        'description'          => 'Description',
        'image'                => 'Image',
        'makeFailReason'       => 'MakeFailReason',
        'makeStage'            => 'MakeStage',
        'makeStatus'           => 'MakeStatus',
        'modelType'            => 'ModelType',
        'name'                 => 'Name',
        'portrait'             => 'Portrait',
        'preview'              => 'Preview',
        'supportedResolutions' => 'SupportedResolutions',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->avatarType) {
            $res['AvatarType'] = $this->avatarType;
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
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
        if (null !== $this->preview) {
            $res['Preview'] = $this->preview;
        }
        if (null !== $this->supportedResolutions) {
            $res['SupportedResolutions'] = null !== $this->supportedResolutions ? $this->supportedResolutions->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return list_
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AvatarType'])) {
            $model->avatarType = $map['AvatarType'];
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
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
        if (isset($map['Preview'])) {
            $model->preview = $map['Preview'];
        }
        if (isset($map['SupportedResolutions'])) {
            $model->supportedResolutions = supportedResolutions::fromMap($map['SupportedResolutions']);
        }

        return $model;
    }
}
