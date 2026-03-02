<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SfmMultiModalApp\V20250909\Models;

use AlibabaCloud\Dara\Model;

class UpdateMemoryShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $appId;

    /**
     * @var string
     */
    public $content;

    /**
     * @var string
     */
    public $memoryNodeId;

    /**
     * @var string
     */
    public $metaDataShrink;

    /**
     * @var string
     */
    public $source;

    /**
     * @var string
     */
    public $userDefinedId;

    /**
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'appId' => 'AppId',
        'content' => 'Content',
        'memoryNodeId' => 'MemoryNodeId',
        'metaDataShrink' => 'MetaData',
        'source' => 'Source',
        'userDefinedId' => 'UserDefinedId',
        'workspaceId' => 'WorkspaceId',
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

        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }

        if (null !== $this->memoryNodeId) {
            $res['MemoryNodeId'] = $this->memoryNodeId;
        }

        if (null !== $this->metaDataShrink) {
            $res['MetaData'] = $this->metaDataShrink;
        }

        if (null !== $this->source) {
            $res['Source'] = $this->source;
        }

        if (null !== $this->userDefinedId) {
            $res['UserDefinedId'] = $this->userDefinedId;
        }

        if (null !== $this->workspaceId) {
            $res['WorkspaceId'] = $this->workspaceId;
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

        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }

        if (isset($map['MemoryNodeId'])) {
            $model->memoryNodeId = $map['MemoryNodeId'];
        }

        if (isset($map['MetaData'])) {
            $model->metaDataShrink = $map['MetaData'];
        }

        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }

        if (isset($map['UserDefinedId'])) {
            $model->userDefinedId = $map['UserDefinedId'];
        }

        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        return $model;
    }
}
