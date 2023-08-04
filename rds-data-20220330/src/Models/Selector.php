<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rdsdata\V20220330\Models;

use AlibabaCloud\Tea\Model;

class Selector extends Model
{
    /**
     * @var string
     */
    public $eq;

    /**
     * @var string
     */
    public $ge;

    /**
     * @var string
     */
    public $gt;

    /**
     * @var string
     */
    public $le;

    /**
     * @var string
     */
    public $like;

    /**
     * @var string
     */
    public $lt;

    /**
     * @var string
     */
    public $ne;
    protected $_name = [
        'eq'   => 'Eq',
        'ge'   => 'Ge',
        'gt'   => 'Gt',
        'le'   => 'Le',
        'like' => 'Like',
        'lt'   => 'Lt',
        'ne'   => 'Ne',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->eq) {
            $res['Eq'] = $this->eq;
        }
        if (null !== $this->ge) {
            $res['Ge'] = $this->ge;
        }
        if (null !== $this->gt) {
            $res['Gt'] = $this->gt;
        }
        if (null !== $this->le) {
            $res['Le'] = $this->le;
        }
        if (null !== $this->like) {
            $res['Like'] = $this->like;
        }
        if (null !== $this->lt) {
            $res['Lt'] = $this->lt;
        }
        if (null !== $this->ne) {
            $res['Ne'] = $this->ne;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return Selector
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Eq'])) {
            $model->eq = $map['Eq'];
        }
        if (isset($map['Ge'])) {
            $model->ge = $map['Ge'];
        }
        if (isset($map['Gt'])) {
            $model->gt = $map['Gt'];
        }
        if (isset($map['Le'])) {
            $model->le = $map['Le'];
        }
        if (isset($map['Like'])) {
            $model->like = $map['Like'];
        }
        if (isset($map['Lt'])) {
            $model->lt = $map['Lt'];
        }
        if (isset($map['Ne'])) {
            $model->ne = $map['Ne'];
        }

        return $model;
    }
}
