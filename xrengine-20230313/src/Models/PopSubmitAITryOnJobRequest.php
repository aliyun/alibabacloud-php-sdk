<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\XrEngine\V20230313\Models;

use AlibabaCloud\Tea\Model;

class PopSubmitAITryOnJobRequest extends Model
{
    /**
     * @var string
     */
    public $bottomsId;

    /**
     * @var string
     */
    public $clothingType;

    /**
     * @var string
     */
    public $jwtToken;

    /**
     * @var string
     */
    public $modelId;

    /**
     * @var string
     */
    public $shoeType;

    /**
     * @var string
     */
    public $suitId;

    /**
     * @var string
     */
    public $topsId;
    protected $_name = [
        'bottomsId'    => 'BottomsId',
        'clothingType' => 'ClothingType',
        'jwtToken'     => 'JwtToken',
        'modelId'      => 'ModelId',
        'shoeType'     => 'ShoeType',
        'suitId'       => 'SuitId',
        'topsId'       => 'TopsId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bottomsId) {
            $res['BottomsId'] = $this->bottomsId;
        }
        if (null !== $this->clothingType) {
            $res['ClothingType'] = $this->clothingType;
        }
        if (null !== $this->jwtToken) {
            $res['JwtToken'] = $this->jwtToken;
        }
        if (null !== $this->modelId) {
            $res['ModelId'] = $this->modelId;
        }
        if (null !== $this->shoeType) {
            $res['ShoeType'] = $this->shoeType;
        }
        if (null !== $this->suitId) {
            $res['SuitId'] = $this->suitId;
        }
        if (null !== $this->topsId) {
            $res['TopsId'] = $this->topsId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PopSubmitAITryOnJobRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BottomsId'])) {
            $model->bottomsId = $map['BottomsId'];
        }
        if (isset($map['ClothingType'])) {
            $model->clothingType = $map['ClothingType'];
        }
        if (isset($map['JwtToken'])) {
            $model->jwtToken = $map['JwtToken'];
        }
        if (isset($map['ModelId'])) {
            $model->modelId = $map['ModelId'];
        }
        if (isset($map['ShoeType'])) {
            $model->shoeType = $map['ShoeType'];
        }
        if (isset($map['SuitId'])) {
            $model->suitId = $map['SuitId'];
        }
        if (isset($map['TopsId'])) {
            $model->topsId = $map['TopsId'];
        }

        return $model;
    }
}
