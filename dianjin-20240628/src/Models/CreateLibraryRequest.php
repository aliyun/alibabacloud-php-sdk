<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DianJin\V20240628\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\DianJin\V20240628\Models\CreateLibraryRequest\indexSetting;

class CreateLibraryRequest extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @var indexSetting
     */
    public $indexSetting;

    /**
     * @var string
     */
    public $libraryName;
    protected $_name = [
        'description' => 'description',
        'indexSetting' => 'indexSetting',
        'libraryName' => 'libraryName',
    ];

    public function validate()
    {
        if (null !== $this->indexSetting) {
            $this->indexSetting->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->indexSetting) {
            $res['indexSetting'] = null !== $this->indexSetting ? $this->indexSetting->toArray($noStream) : $this->indexSetting;
        }

        if (null !== $this->libraryName) {
            $res['libraryName'] = $this->libraryName;
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
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['indexSetting'])) {
            $model->indexSetting = indexSetting::fromMap($map['indexSetting']);
        }

        if (isset($map['libraryName'])) {
            $model->libraryName = $map['libraryName'];
        }

        return $model;
    }
}
