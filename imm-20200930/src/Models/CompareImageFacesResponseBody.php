<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Tea\Model;

class CompareImageFacesResponseBody extends Model
{
    /**
     * @description The request ID.
     *
     * @example F73AC982-2B9E-4ECD-AED5-F8331C5******
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The face similarity. A larger value indicates a higher face similarity. Valid values: 0 to 1.
     *
     * @example 0.8848152756690983
     *
     * @var float
     */
    public $similarity;
    protected $_name = [
        'requestId'  => 'RequestId',
        'similarity' => 'Similarity',
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

        return $model;
    }
}
