<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20170906\Models\CompareImageFacesResponseBody;

use AlibabaCloud\SDK\Imm\V20170906\Models\CompareImageFacesResponseBody\faceB\faceAttributes;
use AlibabaCloud\Tea\Model;

class faceB extends Model
{
    /**
     * @var faceAttributes
     */
    public $faceAttributes;

    /**
     * @var string
     */
    public $faceId;
    protected $_name = [
        'faceAttributes' => 'FaceAttributes',
        'faceId'         => 'FaceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->faceAttributes) {
            $res['FaceAttributes'] = null !== $this->faceAttributes ? $this->faceAttributes->toMap() : null;
        }
        if (null !== $this->faceId) {
            $res['FaceId'] = $this->faceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return faceB
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FaceAttributes'])) {
            $model->faceAttributes = faceAttributes::fromMap($map['FaceAttributes']);
        }
        if (isset($map['FaceId'])) {
            $model->faceId = $map['FaceId'];
        }

        return $model;
    }
}
