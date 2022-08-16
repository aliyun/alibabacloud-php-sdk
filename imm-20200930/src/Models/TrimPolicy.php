<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Tea\Model;

class TrimPolicy extends Model
{
    /**
     * @var bool
     */
    public $disableDeleteEmptyCell;

    /**
     * @var bool
     */
    public $disableDeleteRepeatedStyle;

    /**
     * @var bool
     */
    public $disableDeleteUnusedPicture;

    /**
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
