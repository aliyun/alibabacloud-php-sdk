<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchengine\V20211025\Models\ListAdvanceConfigDirResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @example "/path/wpd/nae"
     *
     * @var string
     */
    public $fullPathName;

    /**
     * @example true
     *
     * @var bool
     */
    public $isDir;

    /**
     * @example true
     *
     * @var bool
     */
    public $isTemplate;

    /**
     * @example file_name_1
     *
     * @var string
     */
    public $name;
    protected $_name = [
        'fullPathName' => 'fullPathName',
        'isDir'        => 'isDir',
        'isTemplate'   => 'isTemplate',
        'name'         => 'name',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return result
     */
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
