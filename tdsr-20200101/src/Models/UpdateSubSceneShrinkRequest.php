<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Tdsr\V20200101\Models;

use AlibabaCloud\Tea\Model;

class UpdateSubSceneShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $viewPointShrink;
    protected $_name = [
        'id'              => 'Id',
        'name'            => 'Name',
        'viewPointShrink' => 'ViewPoint',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->viewPointShrink) {
            $res['ViewPoint'] = $this->viewPointShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateSubSceneShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['ViewPoint'])) {
            $model->viewPointShrink = $map['ViewPoint'];
        }

        return $model;
    }
}
