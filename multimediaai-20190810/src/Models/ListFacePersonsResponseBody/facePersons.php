<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Multimediaai\V20190810\Models\ListFacePersonsResponseBody;

use AlibabaCloud\Tea\Model;

class facePersons extends Model
{
    /**
     * @var string
     */
    public $imageUrl;

    /**
     * @var int
     */
    public $imageCount;

    /**
     * @var int
     */
    public $facePersonId;

    /**
     * @var string
     */
    public $facePersonName;
    protected $_name = [
        'imageUrl'       => 'ImageUrl',
        'imageCount'     => 'ImageCount',
        'facePersonId'   => 'FacePersonId',
        'facePersonName' => 'FacePersonName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->imageUrl) {
            $res['ImageUrl'] = $this->imageUrl;
        }
        if (null !== $this->imageCount) {
            $res['ImageCount'] = $this->imageCount;
        }
        if (null !== $this->facePersonId) {
            $res['FacePersonId'] = $this->facePersonId;
        }
        if (null !== $this->facePersonName) {
            $res['FacePersonName'] = $this->facePersonName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return facePersons
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ImageUrl'])) {
            $model->imageUrl = $map['ImageUrl'];
        }
        if (isset($map['ImageCount'])) {
            $model->imageCount = $map['ImageCount'];
        }
        if (isset($map['FacePersonId'])) {
            $model->facePersonId = $map['FacePersonId'];
        }
        if (isset($map['FacePersonName'])) {
            $model->facePersonName = $map['FacePersonName'];
        }

        return $model;
    }
}
