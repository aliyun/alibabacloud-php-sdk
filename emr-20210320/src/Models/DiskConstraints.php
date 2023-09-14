<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320\Models;

use AlibabaCloud\Tea\Model;

class DiskConstraints extends Model
{
    /**
     * @description 支持的磁盘类型。
     *
     * @example ["cloud_efficiency","cloud_ssd","cloud_essd","local_disk"]
     *
     * @var string[]
     */
    public $categories;

    /**
     * @description 磁盘数量最小值。
     *
     * @var ValueConstraints
     */
    public $countConstraint;

    /**
     * @description 磁盘容量限制。
     *
     * @var ValueConstraints
     */
    public $sizeConstraint;
    protected $_name = [
        'categories'      => 'Categories',
        'countConstraint' => 'CountConstraint',
        'sizeConstraint'  => 'SizeConstraint',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->categories) {
            $res['Categories'] = $this->categories;
        }
        if (null !== $this->countConstraint) {
            $res['CountConstraint'] = null !== $this->countConstraint ? $this->countConstraint->toMap() : null;
        }
        if (null !== $this->sizeConstraint) {
            $res['SizeConstraint'] = null !== $this->sizeConstraint ? $this->sizeConstraint->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DiskConstraints
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Categories'])) {
            if (!empty($map['Categories'])) {
                $model->categories = $map['Categories'];
            }
        }
        if (isset($map['CountConstraint'])) {
            $model->countConstraint = ValueConstraints::fromMap($map['CountConstraint']);
        }
        if (isset($map['SizeConstraint'])) {
            $model->sizeConstraint = ValueConstraints::fromMap($map['SizeConstraint']);
        }

        return $model;
    }
}
