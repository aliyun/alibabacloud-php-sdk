<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models;

use AlibabaCloud\Tea\Model;

class RunSearchSimilarArticlesShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $chatConfigShrink;

    /**
     * @example html
     *
     * @var string
     */
    public $docType;

    /**
     * @var string
     */
    public $title;

    /**
     * @description This parameter is required.
     *
     * @example https://xxx/xxx
     *
     * @var string
     */
    public $url;

    /**
     * @description This parameter is required.
     *
     * @example xxxx
     *
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'chatConfigShrink' => 'ChatConfig',
        'docType' => 'DocType',
        'title' => 'Title',
        'url' => 'Url',
        'workspaceId' => 'WorkspaceId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->chatConfigShrink) {
            $res['ChatConfig'] = $this->chatConfigShrink;
        }
        if (null !== $this->docType) {
            $res['DocType'] = $this->docType;
        }
        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }
        if (null !== $this->url) {
            $res['Url'] = $this->url;
        }
        if (null !== $this->workspaceId) {
            $res['WorkspaceId'] = $this->workspaceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RunSearchSimilarArticlesShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ChatConfig'])) {
            $model->chatConfigShrink = $map['ChatConfig'];
        }
        if (isset($map['DocType'])) {
            $model->docType = $map['DocType'];
        }
        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }
        if (isset($map['Url'])) {
            $model->url = $map['Url'];
        }
        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        return $model;
    }
}
