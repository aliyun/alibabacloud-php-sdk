<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\Dara\Model;

class CreateOrderShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $attachmentKey;

    /**
     * @var string
     */
    public $comment;

    /**
     * @var string
     */
    public $pluginParamShrink;

    /**
     * @var string
     */
    public $pluginType;

    /**
     * @var string
     */
    public $realLoginUserUid;

    /**
     * @var string
     */
    public $relatedUserList;

    /**
     * @var int
     */
    public $tid;
    protected $_name = [
        'attachmentKey' => 'AttachmentKey',
        'comment' => 'Comment',
        'pluginParamShrink' => 'PluginParam',
        'pluginType' => 'PluginType',
        'realLoginUserUid' => 'RealLoginUserUid',
        'relatedUserList' => 'RelatedUserList',
        'tid' => 'Tid',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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

        if (isset($map['RealLoginUserUid'])) {
            $model->realLoginUserUid = $map['RealLoginUserUid'];
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
