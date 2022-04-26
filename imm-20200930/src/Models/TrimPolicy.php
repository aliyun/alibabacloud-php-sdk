<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Tea\Model;

class TrimPolicy extends Model
{
    /**
     * @description 禁止删除所有空单元格
     *
     * @var bool
     */
    public $disableDeleteEmptyCell;

    /**
     * @description 禁止删除所有重复样式
     *
     * @var bool
     */
    public $disableDeleteRepeatedStyle;

    /**
     * @description 禁止删除未使用的单元格图片
     *
     * @var bool
     */
    public $disableDeleteUnusedPicture;

    /**
     * @description 禁止删除没有使用的Shape
     *
     * @var bool
     */
    public $disableDeleteUnusedShape;
    protected $_name = [
        'disableDeleteEmptyCell'     => 'DisableDeleteEmptyCell',
        'disableDeleteRepeatedStyle' => 'DisableDeleteRepeatedStyle',
        'disableDeleteUnusedPicture' => 'DisableDeleteUnusedPicture',
        'disableDeleteUnusedShape'   => 'DisableDeleteUnusedShape',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->disableDeleteEmptyCell) {
            $res['DisableDeleteEmptyCell'] = $this->disableDeleteEmptyCell;
        }
        if (null !== $this->disableDeleteRepeatedStyle) {
            $res['DisableDeleteRepeatedStyle'] = $this->disableDeleteRepeatedStyle;
        }
        if (null !== $this->disableDeleteUnusedPicture) {
            $res['DisableDeleteUnusedPicture'] = $this->disableDeleteUnusedPicture;
        }
        if (null !== $this->disableDeleteUnusedShape) {
            $res['DisableDeleteUnusedShape'] = $this->disableDeleteUnusedShape;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return TrimPolicy
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DisableDeleteEmptyCell'])) {
            $model->disableDeleteEmptyCell = $map['DisableDeleteEmptyCell'];
        }
        if (isset($map['DisableDeleteRepeatedStyle'])) {
            $model->disableDeleteRepeatedStyle = $map['DisableDeleteRepeatedStyle'];
        }
        if (isset($map['DisableDeleteUnusedPicture'])) {
            $model->disableDeleteUnusedPicture = $map['DisableDeleteUnusedPicture'];
        }
        if (isset($map['DisableDeleteUnusedShape'])) {
            $model->disableDeleteUnusedShape = $map['DisableDeleteUnusedShape'];
        }

        return $model;
    }
}
