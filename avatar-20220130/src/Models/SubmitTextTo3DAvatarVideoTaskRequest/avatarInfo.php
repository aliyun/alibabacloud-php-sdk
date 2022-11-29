<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Avatar\V20220130\Models\SubmitTextTo3DAvatarVideoTaskRequest;

use AlibabaCloud\Tea\Model;

class avatarInfo extends Model
{
    /**
     * @var int
     */
    public $angle;

    /**
     * @var int
     */
    public $locate;
    protected $_name = [
        'angle'  => 'Angle',
        'locate' => 'Locate',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->angle) {
            $res['Angle'] = $this->angle;
        }
        if (null !== $this->locate) {
            $res['Locate'] = $this->locate;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return avatarInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Angle'])) {
            $model->angle = $map['Angle'];
        }
        if (isset($map['Locate'])) {
            $model->locate = $map['Locate'];
        }

        return $model;
    }
}
