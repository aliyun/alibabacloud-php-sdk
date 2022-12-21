<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\Tea\Model;

class CreateOrderShrinkRequest extends Model
{
    /**
     * @description The key of an attachment that is returned after the attachment is uploaded. You can call the [GetUserUploadFileJob](~~206069~~) operation to query the key of the attachment.
     *
     * @example test_AttachmentKey
     *
     * @var string
     */
    public $attachmentKey;

    /**
     * @description The description of the ticket to be created.
     *
     * @example test
     *
     * @var string
     */
    public $comment;

    /**
     * @description The ticket creation parameter. The value is a JSON string. The value of this parameter differs based on the type of the ticket. For more information, see the **PluginParam parameter** section in this topic.
     *
     * @example {PluginParam_test}
     *
     * @var string
     */
    public $pluginParamShrink;

    /**
     * @description The type of the ticket. For more information, see [PluginType parameter](~~429109~~).
     *
     * @example DATA_EXPORT
     *
     * @var string
     */
    public $pluginType;

    /**
     * @description The IDs of the stakeholders that are involved in the ticket. Separate multiple IDs with commas (,).
     *
     * @example user1,user2
     *
     * @var string
     */
    public $relatedUserList;

    /**
     * @description The ID of the tenant. You can call the [GetUserActiveTenant](~~198073~~) or [ListUserTenants](~~198074~~) operation to obtain the tenant ID.
     *
     * @example 3***
     *
     * @var int
     */
    public $tid;
    protected $_name = [
        'attachmentKey'     => 'AttachmentKey',
        'comment'           => 'Comment',
        'pluginParamShrink' => 'PluginParam',
        'pluginType'        => 'PluginType',
        'relatedUserList'   => 'RelatedUserList',
        'tid'               => 'Tid',
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
        if (null !== $this->pluginParamShrink) {
            $res['PluginParam'] = $this->pluginParamShrink;
        }
        if (null !== $this->pluginType) {
            $res['PluginType'] = $this->pluginType;
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
     * @return CreateOrderShrinkRequest
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
        if (isset($map['PluginParam'])) {
            $model->pluginParamShrink = $map['PluginParam'];
        }
        if (isset($map['PluginType'])) {
            $model->pluginType = $map['PluginType'];
        }
        if (isset($map['RelatedUserList'])) {
            $model->relatedUserList = $map['RelatedUserList'];
        }
        if (isset($map['Tid'])) {
            $model->tid = $map['Tid'];
        }

        return $model;
    }
}
