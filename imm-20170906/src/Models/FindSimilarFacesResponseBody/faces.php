<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20170906\Models\FindSimilarFacesResponseBody;

use AlibabaCloud\SDK\Imm\V20170906\Models\FindSimilarFacesResponseBody\faces\faceAttributes;
use AlibabaCloud\SDK\Imm\V20170906\Models\FindSimilarFacesResponseBody\faces\similarFaces;
use AlibabaCloud\Tea\Model;

class faces extends Model
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
     * @var string
     */
    public $externalId;

    /**
     * @var faceAttributes
     */
    public $faceAttributes;

    /**
     * @var float
     */
    public $similarity;

    /**
     * @var similarFaces[]
     */
    public $similarFaces;
    protected $_name = [
        'faceId'         => 'FaceId',
        'imageUri'       => 'ImageUri',
        'externalId'     => 'ExternalId',
        'faceAttributes' => 'FaceAttributes',
        'similarity'     => 'Similarity',
        'similarFaces'   => 'SimilarFaces',
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
        if (null !== $this->externalId) {
            $res['ExternalId'] = $this->externalId;
        }
        if (null !== $this->faceAttributes) {
            $res['FaceAttributes'] = null !== $this->faceAttributes ? $this->faceAttributes->toMap() : null;
        }
        if (null !== $this->similarity) {
            $res['Similarity'] = $this->similarity;
        }
        if (null !== $this->similarFaces) {
            $res['SimilarFaces'] = [];
            if (null !== $this->similarFaces && \is_array($this->similarFaces)) {
                $n = 0;
                foreach ($this->similarFaces as $item) {
                    $res['SimilarFaces'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (isset($map['FaceId'])) {
            $model->faceId = $map['FaceId'];
        }
        if (isset($map['ImageUri'])) {
            $model->imageUri = $map['ImageUri'];
        }
        if (isset($map['ExternalId'])) {
            $model->externalId = $map['ExternalId'];
        }
        if (isset($map['FaceAttributes'])) {
            $model->faceAttributes = faceAttributes::fromMap($map['FaceAttributes']);
        }
        if (isset($map['Similarity'])) {
            $model->similarity = $map['Similarity'];
        }
        if (isset($map['SimilarFaces'])) {
            if (!empty($map['SimilarFaces'])) {
                $model->similarFaces = [];
                $n                   = 0;
                foreach ($map['SimilarFaces'] as $item) {
                    $model->similarFaces[$n++] = null !== $item ? similarFaces::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
