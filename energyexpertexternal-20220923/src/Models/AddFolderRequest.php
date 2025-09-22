<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models;

use AlibabaCloud\Dara\Model;

class AddFolderRequest extends Model
{
    /**
     * @var string
     */
    public $folderName;

    /**
     * @var string
     */
    public $parentFolderId;
    protected $_name = [
        'folderName' => 'folderName',
        'parentFolderId' => 'parentFolderId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->folderName) {
            $res['folderName'] = $this->folderName;
        }

        if (null !== $this->parentFolderId) {
            $res['parentFolderId'] = $this->parentFolderId;
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
        if (isset($map['folderName'])) {
            $model->folderName = $map['folderName'];
        }

        if (isset($map['parentFolderId'])) {
            $model->parentFolderId = $map['parentFolderId'];
        }

        return $model;
    }
}
