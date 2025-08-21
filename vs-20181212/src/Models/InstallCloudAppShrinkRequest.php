<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212\Models;

use AlibabaCloud\Dara\Model;

class InstallCloudAppShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $appId;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $patchId;

    /**
     * @var string
     */
    public $projectId;

    /**
     * @var string
     */
    public $renderingInstanceId;

    /**
     * @var string
     */
    public $renderingInstanceIdsShrink;
    protected $_name = [
        'appId' => 'AppId',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'patchId' => 'PatchId',
        'projectId' => 'ProjectId',
        'renderingInstanceId' => 'RenderingInstanceId',
        'renderingInstanceIdsShrink' => 'RenderingInstanceIds',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }

        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->patchId) {
            $res['PatchId'] = $this->patchId;
        }

        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }

        if (null !== $this->renderingInstanceId) {
            $res['RenderingInstanceId'] = $this->renderingInstanceId;
        }

        if (null !== $this->renderingInstanceIdsShrink) {
            $res['RenderingInstanceIds'] = $this->renderingInstanceIdsShrink;
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
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }

        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['PatchId'])) {
            $model->patchId = $map['PatchId'];
        }

        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }

        if (isset($map['RenderingInstanceId'])) {
            $model->renderingInstanceId = $map['RenderingInstanceId'];
        }

        if (isset($map['RenderingInstanceIds'])) {
            $model->renderingInstanceIdsShrink = $map['RenderingInstanceIds'];
        }

        return $model;
    }
}
