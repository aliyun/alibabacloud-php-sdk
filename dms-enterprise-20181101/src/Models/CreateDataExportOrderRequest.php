<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\CreateDataExportOrderRequest\pluginParam;
use AlibabaCloud\Tea\Model;

class CreateDataExportOrderRequest extends Model
{
    /**
     * @example order_attachment.txt
     *
     * @var string
     */
    public $attachmentKey;

    /**
     * @var string
     */
    public $comment;

    /**
     * @example 877****
     *
     * @var int
     */
    public $parentId;

    /**
     * @var pluginParam
     */
    public $pluginParam;

    /**
     * @var int[]
     */
    public $relatedUserList;

    /**
     * @example 3***
     *
     * @var int
     */
    public $tid;
    protected $_name = [
        'attachmentKey'   => 'AttachmentKey',
        'comment'         => 'Comment',
        'parentId'        => 'ParentId',
        'pluginParam'     => 'PluginParam',
        'relatedUserList' => 'RelatedUserList',
        'tid'             => 'Tid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->attachmentKey) {
            $res['AttachmentKey'] = $this->attachmentKey;
        }
        if (null !== $this->comment) {
            $res['Comment'] = $this->comment;
        }
        if (null !== $this->parentId) {
            $res['ParentId'] = $this->parentId;
        }
        if (null !== $this->pluginParam) {
            $res['PluginParam'] = null !== $this->pluginParam ? $this->pluginParam->toMap() : null;
        }
        if (null !== $this->relatedUserList) {
            $res['RelatedUserList'] = $this->relatedUserList;
        }
        if (null !== $this->tid) {
            $res['Tid'] = $this->tid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateDataExportOrderRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AttachmentKey'])) {
            $model->attachmentKey = $map['AttachmentKey'];
        }
        if (isset($map['Comment'])) {
            $model->comment = $map['Comment'];
        }
        if (isset($map['ParentId'])) {
            $model->parentId = $map['ParentId'];
        }
        if (isset($map['PluginParam'])) {
            $model->pluginParam = pluginParam::fromMap($map['PluginParam']);
        }
        if (isset($map['RelatedUserList'])) {
            if (!empty($map['RelatedUserList'])) {
                $model->relatedUserList = $map['RelatedUserList'];
            }
        }
        if (isset($map['Tid'])) {
            $model->tid = $map['Tid'];
        }

        return $model;
    }
}
