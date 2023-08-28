<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchengine\V20211025\Models\GetAdvanceConfigResponseBody\result;

use AlibabaCloud\Tea\Model;

class files extends Model
{
    /**
     * @description The name of the file path.
     *
     * @example ""
     *
     * @var string
     */
    public $fullPathName;

    /**
     * @description Indicates whether it is a directory.
     *
     * @example True
     *
     * @var bool
     */
    public $isDir;

    /**
     * @description Indicates whether it is a template.
     *
     * @example True
     *
     * @var bool
     */
    public $isTemplate;

    /**
     * @description The name.
     *
     * @example ha-cn-2r42ostoc01_qrs
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
     * @return files
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
