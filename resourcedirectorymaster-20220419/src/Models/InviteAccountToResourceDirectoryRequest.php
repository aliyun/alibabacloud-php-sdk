<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceDirectoryMaster\V20220419\Models;

use AlibabaCloud\SDK\ResourceDirectoryMaster\V20220419\Models\InviteAccountToResourceDirectoryRequest\tag;
use AlibabaCloud\Tea\Model;

class InviteAccountToResourceDirectoryRequest extends Model
{
    /**
     * @description The description of the invitation.
     *
     * The description can be up to 1,024 characters in length.
     *
     * @example Welcome
     *
     * @var string
     */
    public $note;

    /**
     * @description The ID of the parent folder.
     *
     * @example r-b1****
     *
     * @var string
     */
    public $parentFolderId;

    /**
     * @description The tags.
     *
     * @var tag[]
     */
    public $tag;

    /**
     * @description The ID or logon email address of the account that you want to invite.
     *
     * This parameter is required.
     *
     * @example someone@example.com
     *
     * @var string
     */
    public $targetEntity;

    /**
     * @description The type of the invited account. Valid values:
     *
     *   Account: indicates the ID of the account.
     *   Email: indicates the logon email address of the account.
     *
     * This parameter is required.
     *
     * @example Email
     *
     * @var string
     */
    public $targetType;
    protected $_name = [
        'note' => 'Note',
        'parentFolderId' => 'ParentFolderId',
        'tag' => 'Tag',
        'targetEntity' => 'TargetEntity',
        'targetType' => 'TargetType',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->note) {
            $res['Note'] = $this->note;
        }
        if (null !== $this->parentFolderId) {
            $res['ParentFolderId'] = $this->parentFolderId;
        }
        if (null !== $this->tag) {
            $res['Tag'] = [];
            if (null !== $this->tag && \is_array($this->tag)) {
                $n = 0;
                foreach ($this->tag as $item) {
                    $res['Tag'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->targetEntity) {
            $res['TargetEntity'] = $this->targetEntity;
        }
        if (null !== $this->targetType) {
            $res['TargetType'] = $this->targetType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return InviteAccountToResourceDirectoryRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Note'])) {
            $model->note = $map['Note'];
        }
        if (isset($map['ParentFolderId'])) {
            $model->parentFolderId = $map['ParentFolderId'];
        }
        if (isset($map['Tag'])) {
            if (!empty($map['Tag'])) {
                $model->tag = [];
                $n = 0;
                foreach ($map['Tag'] as $item) {
                    $model->tag[$n++] = null !== $item ? tag::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TargetEntity'])) {
            $model->targetEntity = $map['TargetEntity'];
        }
        if (isset($map['TargetType'])) {
            $model->targetType = $map['TargetType'];
        }

        return $model;
    }
}
