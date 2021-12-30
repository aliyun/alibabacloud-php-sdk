<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dplus\V20201216\Models;

use AlibabaCloud\Tea\Model;

class FaceshifterTRequest extends Model
{
    /**
     * @var int
     */
    public $age;

    /**
     * @var int
     */
    public $gender;

    /**
     * @var string
     */
    public $picUrl;

    /**
     * @var int
     */
    public $race;
    protected $_name = [
        'age'    => 'Age',
        'gender' => 'Gender',
        'picUrl' => 'PicUrl',
        'race'   => 'Race',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->age) {
            $res['Age'] = $this->age;
        }
        if (null !== $this->gender) {
            $res['Gender'] = $this->gender;
        }
        if (null !== $this->picUrl) {
            $res['PicUrl'] = $this->picUrl;
        }
        if (null !== $this->race) {
            $res['Race'] = $this->race;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return FaceshifterTRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Age'])) {
            $model->age = $map['Age'];
        }
        if (isset($map['Gender'])) {
            $model->gender = $map['Gender'];
        }
        if (isset($map['PicUrl'])) {
            $model->picUrl = $map['PicUrl'];
        }
        if (isset($map['Race'])) {
            $model->race = $map['Race'];
        }

        return $model;
    }
}
