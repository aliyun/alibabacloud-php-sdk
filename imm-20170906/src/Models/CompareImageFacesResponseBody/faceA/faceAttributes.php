<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20170906\Models\CompareImageFacesResponseBody\faceA;

use AlibabaCloud\SDK\Imm\V20170906\Models\CompareImageFacesResponseBody\faceA\faceAttributes\faceBoundary;
use AlibabaCloud\Tea\Model;

class faceAttributes extends Model
{
    /**
     * @var faceBoundary
     */
    public $faceBoundary;
    protected $_name = [
        'faceBoundary' => 'FaceBoundary',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->faceBoundary) {
            $res['FaceBoundary'] = null !== $this->faceBoundary ? $this->faceBoundary->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return faceAttributes
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FaceBoundary'])) {
            $model->faceBoundary = faceBoundary::fromMap($map['FaceBoundary']);
        }

        return $model;
    }
}
