<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkvisual\V20180120\Models;

use AlibabaCloud\Tea\Model;

class GetPictureInfoWithVectorIdsRequest extends Model
{
    /**
     * @var string
     */
    public $apiProduct;

    /**
     * @var string
     */
    public $apiRevision;

    /**
     * @var string[]
     */
    public $vectorIdList;
    protected $_name = [
        'apiProduct'   => 'ApiProduct',
        'apiRevision'  => 'ApiRevision',
        'vectorIdList' => 'VectorIdList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->apiProduct) {
            $res['ApiProduct'] = $this->apiProduct;
        }
        if (null !== $this->apiRevision) {
            $res['ApiRevision'] = $this->apiRevision;
        }
        if (null !== $this->vectorIdList) {
            $res['VectorIdList'] = $this->vectorIdList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetPictureInfoWithVectorIdsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApiProduct'])) {
            $model->apiProduct = $map['ApiProduct'];
        }
        if (isset($map['ApiRevision'])) {
            $model->apiRevision = $map['ApiRevision'];
        }
        if (isset($map['VectorIdList'])) {
            if (!empty($map['VectorIdList'])) {
                $model->vectorIdList = $map['VectorIdList'];
            }
        }

        return $model;
    }
}
