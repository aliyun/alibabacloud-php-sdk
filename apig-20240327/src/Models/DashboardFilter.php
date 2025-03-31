<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models;

use AlibabaCloud\Dara\Model;

class DashboardFilter extends Model
{
    /**
     * @var string
     */
    public $routeName;
    protected $_name = [
        'routeName' => 'routeName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->routeName) {
            $res['routeName'] = $this->routeName;
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
        if (isset($map['routeName'])) {
            $model->routeName = $map['routeName'];
        }

        return $model;
    }
}
