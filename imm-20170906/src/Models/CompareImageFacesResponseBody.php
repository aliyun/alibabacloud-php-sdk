<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20170906\Models;

use AlibabaCloud\SDK\Imm\V20170906\Models\CompareImageFacesResponseBody\faceA;
use AlibabaCloud\SDK\Imm\V20170906\Models\CompareImageFacesResponseBody\faceB;
use AlibabaCloud\Tea\Model;

class CompareImageFacesResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var float
     */
    public $similarity;

    /**
     * @var string
     */
    public $setId;

    /**
     * @var faceA
     */
    public $faceA;

    /**
     * @var faceB
     */
    public $faceB;
    protected $_name = [
        'requestId'  => 'RequestId',
        'similarity' => 'Similarity',
        'setId'      => 'SetId',
        'faceA'      => 'FaceA',
        'faceB'      => 'FaceB',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->similarity) {
            $res['Similarity'] = $this->similarity;
        }
        if (null !== $this->setId) {
            $res['SetId'] = $this->setId;
        }
        if (null !== $this->faceA) {
            $res['FaceA'] = null !== $this->faceA ? $this->faceA->toMap() : null;
        }
        if (null !== $this->faceB) {
            $res['FaceB'] = null !== $this->faceB ? $this->faceB->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CompareImageFacesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Similarity'])) {
            $model->similarity = $map['Similarity'];
        }
        if (isset($map['SetId'])) {
            $model->setId = $map['SetId'];
        }
        if (isset($map['FaceA'])) {
            $model->faceA = faceA::fromMap($map['FaceA']);
        }
        if (isset($map['FaceB'])) {
            $model->faceB = faceB::fromMap($map['FaceB']);
        }

        return $model;
    }
}
