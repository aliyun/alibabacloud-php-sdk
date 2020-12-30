<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudPhoto\V20170711\Models\ListPhotoFacesResponseBody;

use AlibabaCloud\Tea\Model;

class faces extends Model
{
    /**
     * @var string
     */
    public $faceIdStr;

    /**
     * @var string
     */
    public $faceName;

    /**
     * @var int
     */
    public $faceId;

    /**
     * @var string[]
     */
    public $axis;
    protected $_name = [
        'faceIdStr' => 'FaceIdStr',
        'faceName'  => 'FaceName',
        'faceId'    => 'FaceId',
        'axis'      => 'Axis',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->faceIdStr) {
            $res['FaceIdStr'] = $this->faceIdStr;
        }
        if (null !== $this->faceName) {
            $res['FaceName'] = $this->faceName;
        }
        if (null !== $this->faceId) {
            $res['FaceId'] = $this->faceId;
        }
        if (null !== $this->axis) {
            $res['Axis'] = $this->axis;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return faces
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FaceIdStr'])) {
            $model->faceIdStr = $map['FaceIdStr'];
        }
        if (isset($map['FaceName'])) {
            $model->faceName = $map['FaceName'];
        }
        if (isset($map['FaceId'])) {
            $model->faceId = $map['FaceId'];
        }
        if (isset($map['Axis'])) {
            if (!empty($map['Axis'])) {
                $model->axis = $map['Axis'];
            }
        }

        return $model;
    }
}
