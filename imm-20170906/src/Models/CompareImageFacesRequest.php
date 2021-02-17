<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20170906\Models;

use AlibabaCloud\Tea\Model;

class CompareImageFacesRequest extends Model
{
    /**
     * @var string
     */
    public $project;

    /**
     * @var string
     */
    public $setId;

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
    public $faceIdA;

    /**
     * @var string
     */
    public $faceIdB;
    protected $_name = [
        'project'   => 'Project',
        'setId'     => 'SetId',
        'imageUriA' => 'ImageUriA',
        'imageUriB' => 'ImageUriB',
        'faceIdA'   => 'FaceIdA',
        'faceIdB'   => 'FaceIdB',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->project) {
            $res['Project'] = $this->project;
        }
        if (null !== $this->setId) {
            $res['SetId'] = $this->setId;
        }
        if (null !== $this->imageUriA) {
            $res['ImageUriA'] = $this->imageUriA;
        }
        if (null !== $this->imageUriB) {
            $res['ImageUriB'] = $this->imageUriB;
        }
        if (null !== $this->faceIdA) {
            $res['FaceIdA'] = $this->faceIdA;
        }
        if (null !== $this->faceIdB) {
            $res['FaceIdB'] = $this->faceIdB;
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
        if (isset($map['Project'])) {
            $model->project = $map['Project'];
        }
        if (isset($map['SetId'])) {
            $model->setId = $map['SetId'];
        }
        if (isset($map['ImageUriA'])) {
            $model->imageUriA = $map['ImageUriA'];
        }
        if (isset($map['ImageUriB'])) {
            $model->imageUriB = $map['ImageUriB'];
        }
        if (isset($map['FaceIdA'])) {
            $model->faceIdA = $map['FaceIdA'];
        }
        if (isset($map['FaceIdB'])) {
            $model->faceIdB = $map['FaceIdB'];
        }

        return $model;
    }
}
