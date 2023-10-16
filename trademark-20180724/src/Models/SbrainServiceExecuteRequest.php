<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Trademark\V20180724\Models;

use AlibabaCloud\Tea\Model;

class SbrainServiceExecuteRequest extends Model
{
    /**
     * @var mixed[]
     */
    public $executeParams;

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
     * @var int
     */
    public $schemeId;

    /**
     * @var string
     */
    public $servicePlace;

    /**
     * @var string
     */
    public $source;

    /**
     * @var string
     */
    public $target;
    protected $_name = [
        'executeParams' => 'ExecuteParams',
        'productCode'   => 'ProductCode',
        'referenceNo'   => 'ReferenceNo',
        'referenceType' => 'ReferenceType',
        'sceneCode'     => 'SceneCode',
        'schemeId'      => 'SchemeId',
        'servicePlace'  => 'ServicePlace',
        'source'        => 'Source',
        'target'        => 'Target',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->executeParams) {
            $res['ExecuteParams'] = $this->executeParams;
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
        if (null !== $this->schemeId) {
            $res['SchemeId'] = $this->schemeId;
        }
        if (null !== $this->servicePlace) {
            $res['ServicePlace'] = $this->servicePlace;
        }
        if (null !== $this->source) {
            $res['Source'] = $this->source;
        }
        if (null !== $this->target) {
            $res['Target'] = $this->target;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SbrainServiceExecuteRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ExecuteParams'])) {
            $model->executeParams = $map['ExecuteParams'];
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
        if (isset($map['SchemeId'])) {
            $model->schemeId = $map['SchemeId'];
        }
        if (isset($map['ServicePlace'])) {
            $model->servicePlace = $map['ServicePlace'];
        }
        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }
        if (isset($map['Target'])) {
            $model->target = $map['Target'];
        }

        return $model;
    }
}
