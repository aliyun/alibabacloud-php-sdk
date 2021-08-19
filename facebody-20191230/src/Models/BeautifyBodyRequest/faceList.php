<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Facebody\V20191230\Models\BeautifyBodyRequest;

use AlibabaCloud\SDK\Facebody\V20191230\Models\BeautifyBodyRequest\faceList\faceBox;
use AlibabaCloud\Tea\Model;

class faceList extends Model
{
    /**
     * @var faceBox
     */
    public $faceBox;

    /**
     * @var int
     */
    public $age;

    /**
     * @var int
     */
    public $gender;
    protected $_name = [
        'faceBox' => 'FaceBox',
        'age'     => 'Age',
        'gender'  => 'Gender',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->faceBox) {
            $res['FaceBox'] = null !== $this->faceBox ? $this->faceBox->toMap() : null;
        }
        if (null !== $this->age) {
            $res['Age'] = $this->age;
        }
        if (null !== $this->gender) {
            $res['Gender'] = $this->gender;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return faceList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FaceBox'])) {
            $model->faceBox = faceBox::fromMap($map['FaceBox']);
        }
        if (isset($map['Age'])) {
            $model->age = $map['Age'];
        }
        if (isset($map['Gender'])) {
            $model->gender = $map['Gender'];
        }

        return $model;
    }
}
