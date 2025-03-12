<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class ModifyInterceptionTargetRequest extends Model
{
    /**
     * @description The name of the application.
     *
     * > You can call the [DescribeContainerTags](~~DescribeContainerTags~~) operation to obtain the value of this parameter.
     * @example yasintt-daemonst
     *
     * @var string
     */
    public $appName;

    /**
     * @description An array that consists of images.
     *
     * > You can call the [DescribeContainerTags](~~DescribeContainerTags~~) operation to obtain the value of this parameter.
     * @var string[]
     */
    public $imageList;

    /**
     * @description The namespace.
     *
     * This parameter is required.
     * @example demo4
     *
     * @var string
     */
    public $namespace;

    /**
     * @description An array that consists of tags.
     *
     * > You can call the [DescribeContainerTags](~~DescribeContainerTags~~) operation to obtain the value of this parameter.
     * @var string[]
     */
    public $tagList;

    /**
     * @description The ID of the network object.
     *
     * This parameter is required.
     * @example 400913
     *
     * @var int
     */
    public $targetId;

    /**
     * @description The name.
     *
     * This parameter is required.
     * @example test001
     *
     * @var string
     */
    public $targetName;

    /**
     * @description The object type. Valid values:
     *
     *   **IMAGE**
     *
     * This parameter is required.
     * @example IMAGE
     *
     * @var string
     */
    public $targetType;
    protected $_name = [
        'appName'    => 'AppName',
        'imageList'  => 'ImageList',
        'namespace'  => 'Namespace',
        'tagList'    => 'TagList',
        'targetId'   => 'TargetId',
        'targetName' => 'TargetName',
        'targetType' => 'TargetType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }
        if (null !== $this->imageList) {
            $res['ImageList'] = $this->imageList;
        }
        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
        }
        if (null !== $this->tagList) {
            $res['TagList'] = $this->tagList;
        }
        if (null !== $this->targetId) {
            $res['TargetId'] = $this->targetId;
        }
        if (null !== $this->targetName) {
            $res['TargetName'] = $this->targetName;
        }
        if (null !== $this->targetType) {
            $res['TargetType'] = $this->targetType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyInterceptionTargetRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }
        if (isset($map['ImageList'])) {
            if (!empty($map['ImageList'])) {
                $model->imageList = $map['ImageList'];
            }
        }
        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }
        if (isset($map['TagList'])) {
            if (!empty($map['TagList'])) {
                $model->tagList = $map['TagList'];
            }
        }
        if (isset($map['TargetId'])) {
            $model->targetId = $map['TargetId'];
        }
        if (isset($map['TargetName'])) {
            $model->targetName = $map['TargetName'];
        }
        if (isset($map['TargetType'])) {
            $model->targetType = $map['TargetType'];
        }

        return $model;
    }
}
