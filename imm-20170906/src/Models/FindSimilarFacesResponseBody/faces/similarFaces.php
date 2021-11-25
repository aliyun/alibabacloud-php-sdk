<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20170906\Models\FindSimilarFacesResponseBody\faces;

use AlibabaCloud\SDK\Imm\V20170906\Models\FindSimilarFacesResponseBody\faces\similarFaces\faceAttributes;
use AlibabaCloud\Tea\Model;

class similarFaces extends Model
{
    /**
     * @var string
     */
    public $externalId;

    /**
     * @var faceAttributes
     */
    public $faceAttributes;

    /**
     * @var string
     */
    public $faceId;

    /**
     * @var string
     */
    public $imageUri;

    /**
     * @var float
     */
    public $similarity;
    protected $_name = [
        'externalId'     => 'ExternalId',
        'faceAttributes' => 'FaceAttributes',
        'faceId'         => 'FaceId',
        'imageUri'       => 'ImageUri',
        'similarity'     => 'Similarity',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->externalId) {
            $res['ExternalId'] = $this->externalId;
        }
        if (null !== $this->faceAttributes) {
            $res['FaceAttributes'] = null !== $this->faceAttributes ? $this->faceAttributes->toMap() : null;
        }
        if (null !== $this->faceId) {
            $res['FaceId'] = $this->faceId;
        }
        if (null !== $this->imageUri) {
            $res['ImageUri'] = $this->imageUri;
        }
        if (null !== $this->similarity) {
            $res['Similarity'] = $this->similarity;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return similarFaces
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ExternalId'])) {
            $model->externalId = $map['ExternalId'];
        }
        if (isset($map['FaceAttributes'])) {
            $model->faceAttributes = faceAttributes::fromMap($map['FaceAttributes']);
        }
        if (isset($map['FaceId'])) {
            $model->faceId = $map['FaceId'];
        }
        if (isset($map['ImageUri'])) {
            $model->imageUri = $map['ImageUri'];
        }
        if (isset($map['Similarity'])) {
            $model->similarity = $map['Similarity'];
        }

        return $model;
    }
}
