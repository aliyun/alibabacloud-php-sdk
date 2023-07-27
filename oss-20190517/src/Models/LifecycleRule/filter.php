<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oss\V20190517\Models\LifecycleRule;

use AlibabaCloud\SDK\Oss\V20190517\Models\LifecycleRule\filter\not;
use AlibabaCloud\Tea\Model;

class filter extends Model
{
    /**
     * @var not
     */
    public $not;
    protected $_name = [
        'not' => 'Not',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->not) {
            $res['Not'] = null !== $this->not ? $this->not->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return filter
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Not'])) {
            $model->not = not::fromMap($map['Not']);
        }

        return $model;
    }
}
