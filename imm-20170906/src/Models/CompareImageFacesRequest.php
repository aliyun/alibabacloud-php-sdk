<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20170906\Models;

use AlibabaCloud\Tea\Model;

class CompareImageFacesRequest extends Model
{
    /**
     * @var string
     */
    public $faceIdA;

    /**
     * @var string
     */
    public $faceIdB;

    /**
     * @var string
     */
    public $imageUriA;

    /**
     * @var string
     */
    public $imageUriB;

    /**
     * @var string
     */
    public $project;

    /**
     * @var string
     */
    public $setId;
    protected $_name = [
        'faceIdA'   => 'FaceIdA',
        'faceIdB'   => 'FaceIdB',
        'imageUriA' => 'ImageUriA',
        'imageUriB' => 'ImageUriB',
        'project'   => 'Project',
        'setId'     => 'SetId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->faceIdA) {
            $res['FaceIdA'] = $this->faceIdA;
        }
        if (null !== $this->faceIdB) {
            $res['FaceIdB'] = $this->faceIdB;
        }
        if (null !== $this->imageUriA) {
            $res['ImageUriA'] = $this->imageUriA;
        }
        if (null !== $this->imageUriB) {
            $res['ImageUriB'] = $this->imageUriB;
        }
        if (null !== $this->project) {
            $res['Project'] = $this->project;
        }
        if (null !== $this->setId) {
            $res['SetId'] = $this->setId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CompareImageFacesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FaceIdA'])) {
            $model->faceIdA = $map['FaceIdA'];
        }
        if (isset($map['FaceIdB'])) {
            $model->faceIdB = $map['FaceIdB'];
        }
        if (isset($map['ImageUriA'])) {
            $model->imageUriA = $map['ImageUriA'];
        }
        if (isset($map['ImageUriB'])) {
            $model->imageUriB = $map['ImageUriB'];
        }
        if (isset($map['Project'])) {
            $model->project = $map['Project'];
        }
        if (isset($map['SetId'])) {
            $model->setId = $map['SetId'];
        }

        return $model;
    }
}
