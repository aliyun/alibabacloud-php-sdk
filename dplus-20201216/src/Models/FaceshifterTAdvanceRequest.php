<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dplus\V20201216\Models;

use AlibabaCloud\Tea\Model;
use GuzzleHttp\Psr7\Stream;

class FaceshifterTAdvanceRequest extends Model
{
    /**
     * @var Stream
     */
    public $picUrlObject;

    /**
     * @var int
     */
    public $age;

    /**
     * @var int
     */
    public $gender;

    /**
     * @var int
     */
    public $race;
    protected $_name = [
        'picUrlObject' => 'PicUrlObject',
        'age'          => 'Age',
        'gender'       => 'Gender',
        'race'         => 'Race',
    ];

    public function validate()
    {
        Model::validateRequired('picUrlObject', $this->picUrlObject, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->picUrlObject) {
            $res['PicUrlObject'] = $this->picUrlObject;
        }
        if (null !== $this->age) {
            $res['Age'] = $this->age;
        }
        if (null !== $this->gender) {
            $res['Gender'] = $this->gender;
        }
        if (null !== $this->race) {
            $res['Race'] = $this->race;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return FaceshifterTAdvanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PicUrlObject'])) {
            $model->picUrlObject = $map['PicUrlObject'];
        }
        if (isset($map['Age'])) {
            $model->age = $map['Age'];
        }
        if (isset($map['Gender'])) {
            $model->gender = $map['Gender'];
        }
        if (isset($map['Race'])) {
            $model->race = $map['Race'];
        }

        return $model;
    }
}
