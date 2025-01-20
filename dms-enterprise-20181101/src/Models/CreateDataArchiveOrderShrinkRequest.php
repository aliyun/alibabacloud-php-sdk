<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\Dara\Model;

class CreateDataArchiveOrderShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $comment;
    /**
     * @var string
     */
    public $paramShrink;
    /**
     * @var int
     */
    public $parentId;
    /**
     * @var string
     */
    public $pluginType;
    /**
     * @var string
     */
    public $relatedUserListShrink;
    /**
     * @var int
     */
    public $tid;
    protected $_name = [
        'comment'               => 'Comment',
        'paramShrink'           => 'Param',
        'parentId'              => 'ParentId',
        'pluginType'            => 'PluginType',
        'relatedUserListShrink' => 'RelatedUserList',
        'tid'                   => 'Tid',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->comment) {
            $res['Comment'] = $this->comment;
        }

        if (null !== $this->paramShrink) {
            $res['Param'] = $this->paramShrink;
        }

        if (null !== $this->parentId) {
            $res['ParentId'] = $this->parentId;
        }

        if (null !== $this->pluginType) {
            $res['PluginType'] = $this->pluginType;
        }

        if (null !== $this->relatedUserListShrink) {
            $res['RelatedUserList'] = $this->relatedUserListShrink;
        }

        if (null !== $this->tid) {
            $res['Tid'] = $this->tid;
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
        if (isset($map['Comment'])) {
            $model->comment = $map['Comment'];
        }

        if (isset($map['Param'])) {
            $model->paramShrink = $map['Param'];
        }

        if (isset($map['ParentId'])) {
            $model->parentId = $map['ParentId'];
        }

        if (isset($map['PluginType'])) {
            $model->pluginType = $map['PluginType'];
        }

        if (isset($map['RelatedUserList'])) {
            $model->relatedUserListShrink = $map['RelatedUserList'];
        }

        if (isset($map['Tid'])) {
            $model->tid = $map['Tid'];
        }

        return $model;
    }
}
