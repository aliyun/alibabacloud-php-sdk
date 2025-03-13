<?php

declare(strict_types=1);

/*
 * This file is part of PHP CS Fixer.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *     Dariusz Rumiński <dariusz.ruminski@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\Tea\Model;

class CreateDatabaseExportOrderShrinkRequest extends Model
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
     *
     * @example document_test
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
     *
     * @var string
     */
    public $pluginParamShrink;

    /**
     * @description The stakeholders involved in this operation.
     *
     * @var string
     */
    public $relatedUserListShrink;

    /**
     * @description The tenant ID.
     *
     * > To view the ID of the tenant, move the pointer over the profile picture in the upper-right corner of the DMS console. For more information, see the [View information about the current tenant](https://help.aliyun.com/document_detail/181330.html) section of the "Manage DMS tenants" topic.
     *
     * @example 3***
     *
     * @var int
     */
    public $tid;
    protected $_name = [
        'attachmentKey' => 'AttachmentKey',
        'comment' => 'Comment',
        'parentId' => 'ParentId',
        'pluginParamShrink' => 'PluginParam',
        'relatedUserListShrink' => 'RelatedUserList',
        'tid' => 'Tid',
    ];

    public function validate(): void {}

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
        if (null !== $this->pluginParamShrink) {
            $res['PluginParam'] = $this->pluginParamShrink;
        }
        if (null !== $this->relatedUserListShrink) {
            $res['RelatedUserList'] = $this->relatedUserListShrink;
        }
        if (null !== $this->tid) {
            $res['Tid'] = $this->tid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateDatabaseExportOrderShrinkRequest
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
            $model->pluginParamShrink = $map['PluginParam'];
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
