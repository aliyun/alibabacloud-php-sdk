<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RdsAi\V20250507\Models\ListContextDatabaseSyncSourceTreeNodesResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $discoveredAt;

    /**
     * @var string
     */
    public $extension;

    /**
     * @var bool
     */
    public $hasChildren;

    /**
     * @var string
     */
    public $kind;

    /**
     * @var string
     */
    public $nodeKey;

    /**
     * @var string
     */
    public $parentKey;

    /**
     * @var string
     */
    public $staleAt;

    /**
     * @var string
     */
    public $title;

    /**
     * @var string
     */
    public $unsupportedReason;
    protected $_name = [
        'discoveredAt' => 'DiscoveredAt',
        'extension' => 'Extension',
        'hasChildren' => 'HasChildren',
        'kind' => 'Kind',
        'nodeKey' => 'NodeKey',
        'parentKey' => 'ParentKey',
        'staleAt' => 'StaleAt',
        'title' => 'Title',
        'unsupportedReason' => 'UnsupportedReason',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->discoveredAt) {
            $res['DiscoveredAt'] = $this->discoveredAt;
        }

        if (null !== $this->extension) {
            $res['Extension'] = $this->extension;
        }

        if (null !== $this->hasChildren) {
            $res['HasChildren'] = $this->hasChildren;
        }

        if (null !== $this->kind) {
            $res['Kind'] = $this->kind;
        }

        if (null !== $this->nodeKey) {
            $res['NodeKey'] = $this->nodeKey;
        }

        if (null !== $this->parentKey) {
            $res['ParentKey'] = $this->parentKey;
        }

        if (null !== $this->staleAt) {
            $res['StaleAt'] = $this->staleAt;
        }

        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }

        if (null !== $this->unsupportedReason) {
            $res['UnsupportedReason'] = $this->unsupportedReason;
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
        if (isset($map['DiscoveredAt'])) {
            $model->discoveredAt = $map['DiscoveredAt'];
        }

        if (isset($map['Extension'])) {
            $model->extension = $map['Extension'];
        }

        if (isset($map['HasChildren'])) {
            $model->hasChildren = $map['HasChildren'];
        }

        if (isset($map['Kind'])) {
            $model->kind = $map['Kind'];
        }

        if (isset($map['NodeKey'])) {
            $model->nodeKey = $map['NodeKey'];
        }

        if (isset($map['ParentKey'])) {
            $model->parentKey = $map['ParentKey'];
        }

        if (isset($map['StaleAt'])) {
            $model->staleAt = $map['StaleAt'];
        }

        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }

        if (isset($map['UnsupportedReason'])) {
            $model->unsupportedReason = $map['UnsupportedReason'];
        }

        return $model;
    }
}
