<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class ListInterceptionTargetPageRequest extends Model
{
    /**
     * @description The name of the application to which the network object belongs.
     *
     * @example frontend
     *
     * @var string
     */
    public $appName;

    /**
     * @description The number of the page to return. Default value: **1**.
     *
     * @example 1
     *
     * @var int
     */
    public $currentPage;

    /**
     * @description The images of the network object.
     *
     * @var string[]
     */
    public $imageList;

    /**
     * @description The namespace to which the network object belongs.
     *
     * @example default
     *
     * @var string
     */
    public $namespace;

    /**
     * @description The number of entries to return on each page. Default value: 20. If you leave this parameter empty, 20 entries are returned on each page.
     *
     * > We recommend that you do not leave this parameter empty.
     * @example 20
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The labels specified for the network object.
     *
     * @var string[]
     */
    public $tagList;

    /**
     * @description The name of the network object.
     *
     * @example source-test-obj-0****
     *
     * @var string
     */
    public $targetName;

    /**
     * @description The type of the network object. Valid values:
     *
     *   IMAGE
     *
     * @example IMAGE
     *
     * @var string
     */
    public $targetType;
    protected $_name = [
        'appName'     => 'AppName',
        'currentPage' => 'CurrentPage',
        'imageList'   => 'ImageList',
        'namespace'   => 'Namespace',
        'pageSize'    => 'PageSize',
        'tagList'     => 'TagList',
        'targetName'  => 'TargetName',
        'targetType'  => 'TargetType',
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
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }
        if (null !== $this->imageList) {
            $res['ImageList'] = $this->imageList;
        }
        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->tagList) {
            $res['TagList'] = $this->tagList;
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
     * @return ListInterceptionTargetPageRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['ImageList'])) {
            if (!empty($map['ImageList'])) {
                $model->imageList = $map['ImageList'];
            }
        }
        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['TagList'])) {
            if (!empty($map['TagList'])) {
                $model->tagList = $map['TagList'];
            }
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
