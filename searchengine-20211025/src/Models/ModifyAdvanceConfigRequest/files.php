<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchengine\V20211025\Models\ModifyAdvanceConfigRequest;

use AlibabaCloud\Dara\Model;

class files extends Model
{
    /**
     * @var string
     */
    public $fullPathName;

    /**
     * @var bool
     */
    public $isDir;

    /**
     * @var bool
     */
    public $isTemplate;

    /**
     * @var string
     */
    public $name;
    protected $_name = [
        'fullPathName' => 'fullPathName',
        'isDir' => 'isDir',
        'isTemplate' => 'isTemplate',
        'name' => 'name',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->fullPathName) {
            $res['fullPathName'] = $this->fullPathName;
        }

        if (null !== $this->isDir) {
            $res['isDir'] = $this->isDir;
        }

        if (null !== $this->isTemplate) {
            $res['isTemplate'] = $this->isTemplate;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
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
        if (isset($map['fullPathName'])) {
            $model->fullPathName = $map['fullPathName'];
        }

        if (isset($map['isDir'])) {
            $model->isDir = $map['isDir'];
        }

        if (isset($map['isTemplate'])) {
            $model->isTemplate = $map['isTemplate'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        return $model;
    }
}
