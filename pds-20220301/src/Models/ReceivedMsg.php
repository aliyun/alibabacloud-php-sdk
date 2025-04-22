<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pds\V20220301\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Pds\V20220301\Models\ReceivedMsg\msgContent;

class ReceivedMsg extends Model
{
    /**
     * @var bool
     */
    public $hasRead;

    /**
     * @var string
     */
    public $msgCategory;

    /**
     * @var msgContent
     */
    public $msgContent;

    /**
     * @var string
     */
    public $msgId;

    /**
     * @var string
     */
    public $msgSubCategory;

    /**
     * @var string
     */
    public $msgType;

    /**
     * @var int
     */
    public $publishAt;

    /**
     * @var int
     */
    public $readAt;
    protected $_name = [
        'hasRead' => 'has_read',
        'msgCategory' => 'msg_category',
        'msgContent' => 'msg_content',
        'msgId' => 'msg_id',
        'msgSubCategory' => 'msg_sub_category',
        'msgType' => 'msg_type',
        'publishAt' => 'publish_at',
        'readAt' => 'read_at',
    ];

    public function validate()
    {
        if (null !== $this->msgContent) {
            $this->msgContent->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->hasRead) {
            $res['has_read'] = $this->hasRead;
        }

        if (null !== $this->msgCategory) {
            $res['msg_category'] = $this->msgCategory;
        }

        if (null !== $this->msgContent) {
            $res['msg_content'] = null !== $this->msgContent ? $this->msgContent->toArray($noStream) : $this->msgContent;
        }

        if (null !== $this->msgId) {
            $res['msg_id'] = $this->msgId;
        }

        if (null !== $this->msgSubCategory) {
            $res['msg_sub_category'] = $this->msgSubCategory;
        }

        if (null !== $this->msgType) {
            $res['msg_type'] = $this->msgType;
        }

        if (null !== $this->publishAt) {
            $res['publish_at'] = $this->publishAt;
        }

        if (null !== $this->readAt) {
            $res['read_at'] = $this->readAt;
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
        if (isset($map['has_read'])) {
            $model->hasRead = $map['has_read'];
        }

        if (isset($map['msg_category'])) {
            $model->msgCategory = $map['msg_category'];
        }

        if (isset($map['msg_content'])) {
            $model->msgContent = msgContent::fromMap($map['msg_content']);
        }

        if (isset($map['msg_id'])) {
            $model->msgId = $map['msg_id'];
        }

        if (isset($map['msg_sub_category'])) {
            $model->msgSubCategory = $map['msg_sub_category'];
        }

        if (isset($map['msg_type'])) {
            $model->msgType = $map['msg_type'];
        }

        if (isset($map['publish_at'])) {
            $model->publishAt = $map['publish_at'];
        }

        if (isset($map['read_at'])) {
            $model->readAt = $map['read_at'];
        }

        return $model;
    }
}
