<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models;

use AlibabaCloud\Dara\Model;

class ChatFolderItem extends Model
{
    /**
     * @var string
     */
    public $folderId;

    /**
     * @var string
     */
    public $folderName;

    /**
     * @var ChatItem[]
     */
    public $subFolders;
    protected $_name = [
        'folderId' => 'folderId',
        'folderName' => 'folderName',
        'subFolders' => 'subFolders',
    ];

    public function validate()
    {
        if (\is_array($this->subFolders)) {
            Model::validateArray($this->subFolders);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->folderId) {
            $res['folderId'] = $this->folderId;
        }

        if (null !== $this->folderName) {
            $res['folderName'] = $this->folderName;
        }

        if (null !== $this->subFolders) {
            if (\is_array($this->subFolders)) {
                $res['subFolders'] = [];
                $n1 = 0;
                foreach ($this->subFolders as $item1) {
                    $res['subFolders'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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
        if (isset($map['folderId'])) {
            $model->folderId = $map['folderId'];
        }

        if (isset($map['folderName'])) {
            $model->folderName = $map['folderName'];
        }

        if (isset($map['subFolders'])) {
            if (!empty($map['subFolders'])) {
                $model->subFolders = [];
                $n1 = 0;
                foreach ($map['subFolders'] as $item1) {
                    $model->subFolders[$n1++] = ChatItem::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
