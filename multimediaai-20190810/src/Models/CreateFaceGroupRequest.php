<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Multimediaai\V20190810\Models;

use AlibabaCloud\Tea\Model;

class CreateFaceGroupRequest extends Model
{
    /**
     * @var string
     */
    public $faceGroupName;

    /**
     * @var string
     */
    public $description;
    protected $_name = [
        'faceGroupName' => 'FaceGroupName',
        'description'   => 'Description',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->faceGroupName) {
            $res['FaceGroupName'] = $this->faceGroupName;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateFaceGroupRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FaceGroupName'])) {
            $model->faceGroupName = $map['FaceGroupName'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        return $model;
    }
}
