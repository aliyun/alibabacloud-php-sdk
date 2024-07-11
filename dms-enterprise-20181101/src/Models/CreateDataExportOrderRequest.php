<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\CreateDataExportOrderRequest\pluginParam;
use AlibabaCloud\Tea\Model;

class CreateDataExportOrderRequest extends Model
{
    /**
     * @description The key of the attachment that provides more instructions for the ticket. You can call the [GetUserUploadFileJob](https://help.aliyun.com/document_detail/206069.html) operation to obtain the attachment key.
     *
     * @example order_attachment.txt
     *
     * @var string
     */
    public $attachmentKey;

    /**
     * @description The purpose or objective of the ticket. This parameter helps reduce unnecessary communication.
     *
     * This parameter is required.
     * @example business_test
     *
     * @var string
     */
    public $comment;

    /**
     * @description The ID of the parent ticket.
     *
     * @example 877****
     *
     * @var int
     */
    public $parentId;

    /**
     * @description The parameters of the ticket.
     *
     * This parameter is required.
     * @var pluginParam
     */
    public $pluginParam;

    /**
     * @var string
     */
    public $realLoginUserUid;

    /**
     * @description The stakeholders involved in this operation.
     *
     * @var int[]
     */
    public $relatedUserList;

    /**
     * @description The tenant ID.
     *
     * > To view the ID of the tenant, move the pointer over the profile picture in the upper-right corner of the DMS console. For more information, see the [View information about the current tenant](https://help.aliyun.com/document_detail/181330.html) section of the "Manage DMS tenants" topic.
     * @example 3***
     *
     * @var int
     */
    public $tid;
    protected $_name = [
        'attachmentKey'    => 'AttachmentKey',
        'comment'          => 'Comment',
        'parentId'         => 'ParentId',
        'pluginParam'      => 'PluginParam',
        'realLoginUserUid' => 'RealLoginUserUid',
        'relatedUserList'  => 'RelatedUserList',
        'tid'              => 'Tid',
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
        if (null !== $this->realLoginUserUid) {
            $res['RealLoginUserUid'] = $this->realLoginUserUid;
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
        if (isset($map['RealLoginUserUid'])) {
            $model->realLoginUserUid = $map['RealLoginUserUid'];
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
