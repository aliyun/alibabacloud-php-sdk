<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20240730\Models\NodeTemplate;

use AlibabaCloud\Tea\Model;

class dataDisks extends Model
{
    /**
     * @example cloud_auto
     *
     * @var string
     */
    public $category;

    /**
     * @example false
     *
     * @var bool
     */
    public $deleteWithInstance;

    /**
     * @example PL0
     *
     * @var string
     */
    public $level;

    /**
     * @example /data1
     *
     * @var string
     */
    public $mountDir;

    /**
     * @example 40
     *
     * @var int
     */
    public $size;
    protected $_name = [
        'category'           => 'Category',
        'deleteWithInstance' => 'DeleteWithInstance',
        'level'              => 'Level',
        'mountDir'           => 'MountDir',
        'size'               => 'Size',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->category) {
            $res['Category'] = $this->category;
        }
        if (null !== $this->deleteWithInstance) {
            $res['DeleteWithInstance'] = $this->deleteWithInstance;
        }
        if (null !== $this->level) {
            $res['Level'] = $this->level;
        }
        if (null !== $this->mountDir) {
            $res['MountDir'] = $this->mountDir;
        }
        if (null !== $this->size) {
            $res['Size'] = $this->size;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dataDisks
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }
        if (isset($map['DeleteWithInstance'])) {
            $model->deleteWithInstance = $map['DeleteWithInstance'];
        }
        if (isset($map['Level'])) {
            $model->level = $map['Level'];
        }
        if (isset($map['MountDir'])) {
            $model->mountDir = $map['MountDir'];
        }
        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }

        return $model;
    }
}
