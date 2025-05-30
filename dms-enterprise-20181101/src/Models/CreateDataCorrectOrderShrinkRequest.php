<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\Dara\Model;

class CreateDataCorrectOrderShrinkRequest extends Model
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
    public $paramShrink;

    /**
     * @var string
     */
    public $realLoginUserUid;

    /**
     * @var string
     */
    public $relatedUserListShrink;

    /**
     * @var int
     */
    public $tid;
    protected $_name = [
        'attachmentKey' => 'AttachmentKey',
        'comment' => 'Comment',
        'paramShrink' => 'Param',
        'realLoginUserUid' => 'RealLoginUserUid',
        'relatedUserListShrink' => 'RelatedUserList',
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

        if (null !== $this->paramShrink) {
            $res['Param'] = $this->paramShrink;
        }

        if (null !== $this->realLoginUserUid) {
            $res['RealLoginUserUid'] = $this->realLoginUserUid;
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
        if (isset($map['AttachmentKey'])) {
            $model->attachmentKey = $map['AttachmentKey'];
        }

        if (isset($map['Comment'])) {
            $model->comment = $map['Comment'];
        }

        if (isset($map['Param'])) {
            $model->paramShrink = $map['Param'];
        }

        if (isset($map['RealLoginUserUid'])) {
            $model->realLoginUserUid = $map['RealLoginUserUid'];
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
