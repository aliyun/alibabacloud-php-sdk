<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceDirectoryMaster\V20220419\Models\ListFoldersForParentResponseBody\folders;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ResourceDirectoryMaster\V20220419\Models\ListFoldersForParentResponseBody\folders\folder\tags;

class folder extends Model
{
    /**
     * @var string
     */
    public $createTime;
    /**
     * @var string
     */
    public $folderId;
    /**
     * @var string
     */
    public $folderName;
    /**
     * @var tags
     */
    public $tags;
    protected $_name = [
        'createTime' => 'CreateTime',
        'folderId'   => 'FolderId',
        'folderName' => 'FolderName',
        'tags'       => 'Tags',
    ];

    public function validate()
    {
        if (null !== $this->tags) {
            $this->tags->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->folderId) {
            $res['FolderId'] = $this->folderId;
        }

        if (null !== $this->folderName) {
            $res['FolderName'] = $this->folderName;
        }

        if (null !== $this->tags) {
            $res['Tags'] = null !== $this->tags ? $this->tags->toArray($noStream) : $this->tags;
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
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['FolderId'])) {
            $model->folderId = $map['FolderId'];
        }

        if (isset($map['FolderName'])) {
            $model->folderName = $map['FolderName'];
        }

        if (isset($map['Tags'])) {
            $model->tags = tags::fromMap($map['Tags']);
        }

        return $model;
    }
}
