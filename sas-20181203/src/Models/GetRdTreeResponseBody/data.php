<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\GetRdTreeResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var mixed[]
     */
    public $children;
    /**
     * @var string
     */
    public $folderId;
    /**
     * @var string
     */
    public $folderName;
    protected $_name = [
        'children'   => 'Children',
        'folderId'   => 'FolderId',
        'folderName' => 'FolderName',
    ];

    public function validate()
    {
        if (\is_array($this->children)) {
            Model::validateArray($this->children);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->children) {
            if (\is_array($this->children)) {
                $res['Children'] = [];
                $n1              = 0;
                foreach ($this->children as $item1) {
                    $res['Children'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->folderId) {
            $res['FolderId'] = $this->folderId;
        }

        if (null !== $this->folderName) {
            $res['FolderName'] = $this->folderName;
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
        if (isset($map['Children'])) {
            if (!empty($map['Children'])) {
                $model->children = [];
                $n1              = 0;
                foreach ($map['Children'] as $item1) {
                    $model->children[$n1++] = $item1;
                }
            }
        }

        if (isset($map['FolderId'])) {
            $model->folderId = $map['FolderId'];
        }

        if (isset($map['FolderName'])) {
            $model->folderName = $map['FolderName'];
        }

        return $model;
    }
}
