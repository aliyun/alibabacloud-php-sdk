<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ververica\V20220718\Models;

use AlibabaCloud\Tea\Model;

class BriefDeploymentTarget extends Model
{
    /**
     * @var string
     */
    public $mode;

    /**
     * @var string
     */
    public $name;
    protected $_name = [
        'mode' => 'mode',
        'name' => 'name',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->mode) {
            $res['mode'] = $this->mode;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return BriefDeploymentTarget
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['mode'])) {
            $model->mode = $map['mode'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        return $model;
    }
}
