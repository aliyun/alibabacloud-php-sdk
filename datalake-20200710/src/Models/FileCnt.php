<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DataLake\V20200710\Models;

use AlibabaCloud\Tea\Model;

class FileCnt extends Model
{
    /**
     * @var int
     */
    public $large;

    /**
     * @var int
     */
    public $middle;

    /**
     * @var int
     */
    public $small;

    /**
     * @var int
     */
    public $tiny;
    protected $_name = [
        'large'  => 'Large',
        'middle' => 'Middle',
        'small'  => 'Small',
        'tiny'   => 'Tiny',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->large) {
            $res['Large'] = $this->large;
        }
        if (null !== $this->middle) {
            $res['Middle'] = $this->middle;
        }
        if (null !== $this->small) {
            $res['Small'] = $this->small;
        }
        if (null !== $this->tiny) {
            $res['Tiny'] = $this->tiny;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return FileCnt
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Large'])) {
            $model->large = $map['Large'];
        }
        if (isset($map['Middle'])) {
            $model->middle = $map['Middle'];
        }
        if (isset($map['Small'])) {
            $model->small = $map['Small'];
        }
        if (isset($map['Tiny'])) {
            $model->tiny = $map['Tiny'];
        }

        return $model;
    }
}
