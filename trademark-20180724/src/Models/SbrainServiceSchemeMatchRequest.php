<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Trademark\V20180724\Models;

use AlibabaCloud\Tea\Model;

class SbrainServiceSchemeMatchRequest extends Model
{
    /**
     * @var mixed[]
     */
    public $matchParams;

    /**
     * @var string
     */
    public $productCode;

    /**
     * @var string
     */
    public $referenceNo;

    /**
     * @var string
     */
    public $referenceType;

    /**
     * @var string
     */
    public $sceneCode;

    /**
     * @var string
     */
    public $source;
    protected $_name = [
        'matchParams'   => 'MatchParams',
        'productCode'   => 'ProductCode',
        'referenceNo'   => 'ReferenceNo',
        'referenceType' => 'ReferenceType',
        'sceneCode'     => 'SceneCode',
        'source'        => 'Source',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->matchParams) {
            $res['MatchParams'] = $this->matchParams;
        }
        if (null !== $this->productCode) {
            $res['ProductCode'] = $this->productCode;
        }
        if (null !== $this->referenceNo) {
            $res['ReferenceNo'] = $this->referenceNo;
        }
        if (null !== $this->referenceType) {
            $res['ReferenceType'] = $this->referenceType;
        }
        if (null !== $this->sceneCode) {
            $res['SceneCode'] = $this->sceneCode;
        }
        if (null !== $this->source) {
            $res['Source'] = $this->source;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SbrainServiceSchemeMatchRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MatchParams'])) {
            $model->matchParams = $map['MatchParams'];
        }
        if (isset($map['ProductCode'])) {
            $model->productCode = $map['ProductCode'];
        }
        if (isset($map['ReferenceNo'])) {
            $model->referenceNo = $map['ReferenceNo'];
        }
        if (isset($map['ReferenceType'])) {
            $model->referenceType = $map['ReferenceType'];
        }
        if (isset($map['SceneCode'])) {
            $model->sceneCode = $map['SceneCode'];
        }
        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }

        return $model;
    }
}
