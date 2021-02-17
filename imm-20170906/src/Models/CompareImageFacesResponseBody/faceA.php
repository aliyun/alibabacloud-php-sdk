<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20170906\Models\CompareImageFacesResponseBody;

use AlibabaCloud\SDK\Imm\V20170906\Models\CompareImageFacesResponseBody\faceA\faceAttributes;
use AlibabaCloud\Tea\Model;

class faceA extends Model
{
    /**
     * @var string
     */
    public $faceId;

    /**
     * @var faceAttributes
     */
    public $faceAttributes;
    protected $_name = [
        'faceId'         => 'FaceId',
        'faceAttributes' => 'FaceAttributes',
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
        if (null !== $this->faceAttributes) {
            $res['FaceAttributes'] = null !== $this->faceAttributes ? $this->faceAttributes->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return faceA
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FaceId'])) {
            $model->faceId = $map['FaceId'];
        }
        if (isset($map['FaceAttributes'])) {
            $model->faceAttributes = faceAttributes::fromMap($map['FaceAttributes']);
        }

        return $model;
    }
}
