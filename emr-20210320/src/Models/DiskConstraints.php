<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320\Models;

use AlibabaCloud\Dara\Model;

class DiskConstraints extends Model
{
    /**
     * @var string[]
     */
    public $categories;

    /**
     * @var ValueConstraints
     */
    public $countConstraint;

    /**
     * @var ValueConstraints
     */
    public $sizeConstraint;
    protected $_name = [
        'categories' => 'Categories',
        'countConstraint' => 'CountConstraint',
        'sizeConstraint' => 'SizeConstraint',
    ];

    public function validate()
    {
        if (\is_array($this->categories)) {
            Model::validateArray($this->categories);
        }
        if (null !== $this->countConstraint) {
            $this->countConstraint->validate();
        }
        if (null !== $this->sizeConstraint) {
            $this->sizeConstraint->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->categories) {
            if (\is_array($this->categories)) {
                $res['Categories'] = [];
                $n1 = 0;
                foreach ($this->categories as $item1) {
                    $res['Categories'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->countConstraint) {
            $res['CountConstraint'] = null !== $this->countConstraint ? $this->countConstraint->toArray($noStream) : $this->countConstraint;
        }

        if (null !== $this->sizeConstraint) {
            $res['SizeConstraint'] = null !== $this->sizeConstraint ? $this->sizeConstraint->toArray($noStream) : $this->sizeConstraint;
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
        if (isset($map['Categories'])) {
            if (!empty($map['Categories'])) {
                $model->categories = [];
                $n1 = 0;
                foreach ($map['Categories'] as $item1) {
                    $model->categories[$n1] = $item1;
                    ++$n1;
                }
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
