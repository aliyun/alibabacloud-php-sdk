<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20170906\Models;

use AlibabaCloud\Tea\Model;

class FindSimilarFacesRequest extends Model
{
    /**
     * @var string
     */
    public $faceId;

    /**
     * @var string
     */
    public $imageUri;

    /**
     * @var int
     */
    public $limit;

    /**
     * @var float
     */
    public $minSimilarity;

    /**
     * @var string
     */
    public $project;

    /**
     * @var string
     */
    public $responseFormat;

    /**
     * @var string
     */
    public $setId;
    protected $_name = [
        'faceId'         => 'FaceId',
        'imageUri'       => 'ImageUri',
        'limit'          => 'Limit',
        'minSimilarity'  => 'MinSimilarity',
        'project'        => 'Project',
        'responseFormat' => 'ResponseFormat',
        'setId'          => 'SetId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->faceId) {
            $res['FaceId'] = $this->faceId;
        }
        if (null !== $this->imageUri) {
            $res['ImageUri'] = $this->imageUri;
        }
        if (null !== $this->limit) {
            $res['Limit'] = $this->limit;
        }
        if (null !== $this->minSimilarity) {
            $res['MinSimilarity'] = $this->minSimilarity;
        }
        if (null !== $this->project) {
            $res['Project'] = $this->project;
        }
        if (null !== $this->responseFormat) {
            $res['ResponseFormat'] = $this->responseFormat;
        }
        if (null !== $this->setId) {
            $res['SetId'] = $this->setId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return FindSimilarFacesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FaceId'])) {
            $model->faceId = $map['FaceId'];
        }
        if (isset($map['ImageUri'])) {
            $model->imageUri = $map['ImageUri'];
        }
        if (isset($map['Limit'])) {
            $model->limit = $map['Limit'];
        }
        if (isset($map['MinSimilarity'])) {
            $model->minSimilarity = $map['MinSimilarity'];
        }
        if (isset($map['Project'])) {
            $model->project = $map['Project'];
        }
        if (isset($map['ResponseFormat'])) {
            $model->responseFormat = $map['ResponseFormat'];
        }
        if (isset($map['SetId'])) {
            $model->setId = $map['SetId'];
        }

        return $model;
    }
}
