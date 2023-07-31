<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Avatar\V20220130\Models;

use AlibabaCloud\Tea\Model;

class Update2dAvatarRequest extends Model
{
    /**
     * @example false
     *
     * @var bool
     */
    public $callback;

    /**
     * @example CH_2d_xxxxxx
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
    public $name;

    /**
     * @example 1
     *
     * @var int
     */
    public $orientation;

    /**
     * @example https://virtual-human-assets.oss-cn-beijing.aliyuncs.com/2d_assets/xxx/xxx/xxx.png?Expires=xxx&OSSAccessKeyId=xxx&Signature=xxx
     *
     * @var string
     */
    public $portrait;

    /**
     * @example 9185
     *
     * @var int
     */
    public $tenantId;

    /**
     * @example true
     *
     * @var bool
     */
    public $transparent;

    /**
     * @example https://virtual-human-assets.oss-cn-beijing.aliyuncs.com/2d_assets/xxx/xxx/xxx.mov?Expires=xxx&OSSAccessKeyId=xxx&Signature=xxx
     *
     * @var string
     */
    public $video;
    protected $_name = [
        'callback'    => 'Callback',
        'code'        => 'Code',
        'description' => 'Description',
        'image'       => 'Image',
        'name'        => 'Name',
        'orientation' => 'Orientation',
        'portrait'    => 'Portrait',
        'tenantId'    => 'TenantId',
        'transparent' => 'Transparent',
        'video'       => 'Video',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->callback) {
            $res['Callback'] = $this->callback;
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
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->orientation) {
            $res['Orientation'] = $this->orientation;
        }
        if (null !== $this->portrait) {
            $res['Portrait'] = $this->portrait;
        }
        if (null !== $this->tenantId) {
            $res['TenantId'] = $this->tenantId;
        }
        if (null !== $this->transparent) {
            $res['Transparent'] = $this->transparent;
        }
        if (null !== $this->video) {
            $res['Video'] = $this->video;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return Update2dAvatarRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Callback'])) {
            $model->callback = $map['Callback'];
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
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Orientation'])) {
            $model->orientation = $map['Orientation'];
        }
        if (isset($map['Portrait'])) {
            $model->portrait = $map['Portrait'];
        }
        if (isset($map['TenantId'])) {
            $model->tenantId = $map['TenantId'];
        }
        if (isset($map['Transparent'])) {
            $model->transparent = $map['Transparent'];
        }
        if (isset($map['Video'])) {
            $model->video = $map['Video'];
        }

        return $model;
    }
}
